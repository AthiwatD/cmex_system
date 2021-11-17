<?php

class Node_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getNodes(){
        
        $sql = "SELECT l.Ward_code, l.ward_name, l.ward_name_eng, ward_tel, ward_tel2
                FROM tb_location1 l
                ORDER BY l.Ward_code ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
	function getWaitingHn(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);
		
		// return $points;
		if(!isset($points)){
            return "NOT isset";
        }
        else{
            if(empty($points)){
                return "NOT POSTED";
            }
            else{
				$site_id = $points->site_id;
                $department_id = $points->department_id;
				$channel_id = $points->channel_id;
				
				$datas = [];
				//////////////////////////////////////////////
				//
				//	รับ
				//
				//////////////////////////////////////////////
				$sql = "SELECT w.waiting_id, w.register_id, w.register_type, w.register_number, w.register_hn, w.send_datetime, d.department_name as 'send_by_department_name', w.speed_level
						FROM qq_waiting w
						LEFT JOIN qq_department d ON w.send_by_department_id = d.department_id
						WHERE w.receive_by_department_id = '" . $department_id . "'
						AND w.called = 0
						AND DATE(w.send_datetime) = CURDATE()
						ORDER BY w.send_datetime ASC, w.register_number ASC";
				$result = $this->db->query($sql)->result();
				$datas["received"] = $result;

				//////////////////////////////////////////////
				//
				//	เรียกแล้ว
				//
				//////////////////////////////////////////////
				$sql = "SELECT waiting_id, register_id, register_type, register_number, register_hn, call_datetime, call_by_channel_name, call_by_channel_number,  speed_level
						FROM qq_waiting
						WHERE receive_by_department_id = '" . $department_id . "'
						AND called = 1
						AND send_out = 0
						AND DATE(send_datetime) = CURDATE()
						ORDER BY call_datetime DESC, register_number DESC";
				$result = $this->db->query($sql)->result();
				$datas["called"] = $result;

				//////////////////////////////////////////////
				//
				//	ส่งแล้ว
				//
				//////////////////////////////////////////////
				$sql = "SELECT w.waiting_id, w.register_id, w.register_type, w.register_number, w.register_hn, w.send_datetime, w.receive_by_department_id, d.department_name as 'receive_by_department_name',  w.speed_level
						FROM qq_waiting w
						JOIN qq_department d ON w.receive_by_department_id = d.department_id
						WHERE w.send_by_department_id = '" . $department_id . "'
						AND DATE(w.send_datetime) = CURDATE()
						ORDER BY w.send_datetime DESC, w.register_number DESC";
				$result = $this->db->query($sql)->result();
				$datas["send"] = $result;

				return $datas;
			}
		}
		return "Not Success";
	}

	function sendRegister(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);
		
		// return $points;
		if(!isset($points)){
            return "NOT isset";
        }
        else{
            if(empty($points)){
                return "NOT POSTED";
            }
            else{

				$waiting_id = $points->waiting_id;
				$register_id = $points->register_id;
				$register_type = $points->register_type;
				$register_number = $points->register_number;
				$register_hn = $points->register_hn;
				$site_id = $points->site_id;
				$channel_id = $points->channel_id;
                $register = $points->register;
				$send_by_department_id = $points->send_by_department_id;
				$receive_by_department_id = $points->receive_by_department_id;  // 0 = ส่งตามลำดับ
				
				date_default_timezone_set('Asia/Bangkok');
				$send_datetime = date('Y-m-d H:i:s');
				$send_by_user_id = $this->session->username;

				// ถ้าเลือกส่งตามลำดับ ให้ดึงข้อมูล department_id ลำดับถัดไป
				if($receive_by_department_id == 0){
					$sql = "SELECT * 
							FROM qq_register_department_order
							WHERE register_id = '" . $register_id . "'
							AND waiting = '0'
							ORDER BY department_order ASC
							LIMIT 1";
					$row = $this->db->query($sql)->row();
					$register_detail_id  = $row["register_detail_id"];
					$department_id = $row["department_id"];
					$receive_by_department_id = $department_id;
				}

				// update ข้อมูล waiting เดิมว่าส่งแล้ว
				$data= array(
					'send_out' => 1,
				);
				$this->db->where('waiting_id', $waiting_id);
				$result = $this->db->update('qq_waiting', $data);

				// insert data to waiting
				$data= array(
					'register_id' => $register_id,
					'register_type' => $register_type,
					'register_number' => $register_number,
					'register_hn' => $register_hn,
					'send_from_waiting_id' => $waiting_id,
					'send_datetime' => $send_datetime,
					'send_by_user_id' => $send_by_user_id,
					'send_by_department_id' => $send_by_department_id,
					'receive_by_department_id' => $receive_by_department_id,
					'speed_level' => 0,
					'called' => 0,
					'send_out' => 0,
					'call_repeat' => 0,
				);
				$result = $this->db->insert('qq_waiting', $data);
				if(!$result){
					return "Add waiting unsuccess";
				}
				else{
					// update ข้อมูล waiting เดิมว่าส่งแล้ว
					$data= array(
						'waiting' => 1,
					);
					$this->db->where('register_detail_id', $register_detail_id);
					$result = $this->db->update('qq_register_department_order', $data);

					if(!$result){
						return "Update waiting unsuccess";
					}
					else{
						return "Success";
					}
				}

				
			}
		}
	}

	function callNumber(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);

		date_default_timezone_set('Asia/Bangkok');
    	$call_datetime = date('Y-m-d H:i:s');

        
		$sql = "SELECT *
				FROM qq_channel c
				WHERE c.channel_id = '" . $points->channel_id . "'";
		$result = $this->db->query($sql)->row();
			
		$channel_name = $result->channel_name;
		$channel_number = $result->channel_number;

		$data_called = array(
			'called' => 1,
			'call_datetime' => $call_datetime,
			'call_by_channel_id' => $points->channel_id,
			'call_by_channel_name' => $channel_name,
			'call_by_channel_number' => $channel_number,
			'call_by_user_id' => $this->session->username,
		);
		$this->db->where('waiting_id', $points->waiting_id);
        $result = $this->db->update('qq_waiting', $data_called);

		if($result){
			return "Success";
		}else{
			return "NOT call number";
		}
	}

	function callRepeat(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);

		date_default_timezone_set('Asia/Bangkok');
    	$call_datetime = date('Y-m-d H:i:s');

        
		$sql = "SELECT *
				FROM qq_channel c
				WHERE c.channel_id = '" . $points->channel_id . "'";
		$result = $this->db->query($sql)->row();
			
		$channel_name = $result->channel_name;
		$channel_number = $result->channel_number;

		$data_called = array(
			'called' => 1,
			'call_datetime' => $call_datetime,
			'call_by_channel_id' => $points->channel_id,
			'call_by_channel_name' => $channel_name,
			'call_by_channel_number' => $channel_number,
			'call_by_user_id' => $this->session->username,
		);
		$this->db->where('waiting_id', $points->waiting_id);
        $result = $this->db->update('qq_waiting', $data_called);

		if($result){
			return "Success";
		}else{
			return "NOT call repeat";
		}
	}

	function requeue(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);

		$data = array(
			'called' => 0,
		);
		$this->db->where('waiting_id', $points->waiting_id);
        $result = $this->db->update('qq_waiting', $data);

		if($result){
			return "Success";
		}else{
			return "NOT requeue";
		}
	}

	function cancelSend(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);

		$sql = "SELECT register_id, send_from_waiting_id, send_by_department_id
				FROM qq_waiting
				WHERE waiting_id = '" . $points->waiting_id  . "'
				ORDER BY waiting_id DESC
				LIMIT 1";
		$row = $this->db->query($sql)->row();

		if(!empty($row)){
			$register_id = $row["register_id"];
			$send_from_waiting_id = $row["send_from_waiting_id"];
			$send_by_department_id = $row["send_by_department_id"];

			$data = array(
				'send_out' => 0,
			);
			$this->db->where('waiting_id', $send_from_waiting_id);
        	$result = $this->db->update('qq_waiting', $data);

			$sql = "SELECT department_order
					FROM qq_register_department_order
					WHERE department_id ='" . $send_by_department_id . "'
					AND register_id = '" . $register_id . "'
					LIMIT 1";
			$row2 = $this->db->query($sql)->row();	
			if(!empty($row2)){
				$department_order = $row["department_order"];
				$sql = "SELECT register_detail_id, department_order, department_id
						FROM qq_register_department_order
						WHERE register_id ='" . $register_id . "'
						AND department_order > '" . $department_order . "'";
				$result2 = $this->db->query($sql)->result();	

				foreach($result2 as $row3){
					$register_detail_id = $row3["register_detail_id"];
					$department_order = $row3["department_order"];
					$department_id = $row3["department_id"];

					$data2 = array(
						'waiting' => 0,
					);
					$this->db->where('register_detail_id', $register_detail_id);
					$result = $this->db->update('qq_register_department_order', $data2);

					$data3 = array(
						'waiting' => 0,
					);
					$this->db->where('register_id', $register_id);
					$this->db->and('receive_by_department_id', $department_id);
					$result3 = $this->db->delete('qq_waiting', $data3);
				}
				
			}
		}


		if($result){
			return "Success";
		}else{
			return "NOT requeue";
		}

	}
}
