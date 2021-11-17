<?php

class Registration_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function register(){
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
                
				date_default_timezone_set('Asia/Bangkok');
				$time_now = date('Y-m-d H:i:s', time());
				//////////////////////////////////////////
				//
				// Step 1: get Queue ID
				//
				//////////////////////////////////////////
				$queue_id = $this->getQueueId($points->site_id);

				//////////////////////////////////////////
				//
				// Step 2: get register data
				//
				//////////////////////////////////////////
				$last_register_number = $this->getLastRegisterNumber($queue_id);
				$register_number = (int)$last_register_number + 1;
				// $register_type = $points->register_type;
				$register_datetime = $time_now;
				$register_hn = $points->register_hn;
				$register_name = $points->register_name;
        		$register_by = $this->session->username;
				$site_id = $points->site_id;
				$claim = $points->claim;
				$path_id = $points->path_id;
				$staff = $points->staff;
				$telephone = $points->telephone;

				//////////////////////////////////////////
				//
				// Step 3: List Documents
				//
				//////////////////////////////////////////
				$document_name_shows = "";
				$documents = $points->documents;
				if(!empty($documents)){
					foreach($documents as $index => $document){
						if($index!=0){
							$document_name_shows .= SEPERATE_STR;
						}
						$document_name_shows .= $document;
					}
				}
				else{
					return "NOT document_name_shows";
				}
				
				//////////////////////////////////////////
				//
				// Step 4: get Register Type,  Direction ID & Route ID from Path ID
				//
				//////////////////////////////////////////

				$sql = "SELECT p.path_name, p.direction_id, p.route_id, register_type
						FROM qq_path p
						WHERE p.path_id = '" . $points->path_id . "'";
				$result = $this->db->query($sql)->row();
		
				if($result){
					$path_name = $result->path_name;
					$direction_id = $result->direction_id;
					$route_id = $result->route_id;
					$register_type = $result->register_type;
				}else{
					return "NOT direction_id, route_id, register_type";
				}

				//////////////////////////////////////////
				//
				// Step 5: get Direction Detail (List of Departments)
				//
				//////////////////////////////////////////
				$sql = "SELECT * 
                    FROM qq_direction d
                    JOIN qq_direction_detail  dd ON d.direction_id = dd.direction_id
                    JOIN qq_department dp ON dd.department_id = dp.department_id
                    WHERE d.direction_id = '" . $direction_id . "'
					ORDER BY dd.department_order ASC";
				$result_direction = $this->db->query($sql)->result();

				if($result_direction){
					$department_names = "";
					foreach($result_direction as $index => $row){
						if($index!=0){
							$department_names .= SEPERATE_STR;
						}
						$department_names .= $row->department_name; 
						$department_ids[$index] = $row->department_id;
					}
				}else{
					return "NOT department_names, department_ids";
				}

				//////////////////////////////////////////
				//
				// Step 6: get Route Detail (List of Locations)
				//
				//////////////////////////////////////////
				$sql = "SELECT * 
                    FROM qq_route_detail rd
                    RIGHT JOIN qq_location l ON rd.location_id = l.location_id
                    WHERE rd.route_id = '" . $route_id . "'
					ORDER BY rd.location_order ASC";
				$result_route = $this->db->query($sql)->result();

				if($result_route){
					$location_names = "";
					foreach($result_route as $index => $row){
						if($index!=0){
							$location_names .= SEPERATE_STR;
						}
						$location_names .= $row->location_name_show; 
						$location_ids[$index] = $row->location_id;
					}
				}else{
					return "NOT location_names, location_ids";
				}

				//////////////////////////////////////////
				//
				// Step 7: insert to qq_register
				//
				//////////////////////////////////////////
				$data_register = array(
					'register_type' => $register_type,
					'register_number' => $register_number,
					'register_hn' => $register_hn,
					'register_name' => $register_name,
					'register_datetime' => $register_datetime,
					'register_by' => $register_by,
					'queue_id' => $queue_id,
					'site_id' => $site_id,
					'claim_name_show' => $claim,
					'document_name_shows' => $document_name_shows,
					'path_id' => $path_id,
					'path_name' => $path_name,
					'direction_id' => $direction_id,
					'route_id' => $route_id,
					'department_names' => $department_names,
					'location_name_shows' => $location_names,
					'staff' => $staff,
					'telephone' => $telephone,

				);
				$result = $this->db->insert('qq_register', $data_register); 
				if($result){
					$register_id = $this->db->insert_id();
				}else{
					return "NOT insert qq_register";
				}

				//////////////////////////////////////////
				//
				// Step 8: insert to qq_register_department_order
				//
				//////////////////////////////////////////
				foreach($result_direction as $index => $row){
					$department_order = $row->department_order; 
					$department_id = $row->department_id;
					$data = array(
						'register_id' => $register_id,
						'department_order' => $department_order,
						'department_id' => $department_id,
						'waiting' => 0,
					);
					$result = $this->db->insert('qq_register_department_order', $data); 
				}

				//////////////////////////////////////////
				//
				// Step 9: retreive registered data 
				//
				//////////////////////////////////////////
				$register_data = $this->getRegisterDepartmentOrderFirst($register_id);
				if(!$register_data){
					return "NOT register_data";
				}

				//////////////////////////////////////////
				//
				// Step 10: add register to qq_waiting
				//
				//////////////////////////////////////////
				$send_datetime = date('Y-m-d H:i:s', time());
				$send_by_department_id = 0;
				$receive_by_department_id = $department_ids[0];

				$data_waiting = array(
					'register_id' => $register_id,
					'register_type' => $register_type,
					'register_number' => $register_number,
					'register_hn' => $register_hn,
					'send_from_waiting_id' => 0,
					'send_datetime' => $send_datetime,
					'send_by_user_id' => $this->session->username,
					'send_by_department_id' => $send_by_department_id,
					'receive_by_department_id' => $receive_by_department_id,
					'called' => 0,
					'send_out' => 0,
					'call_repeat' => 0,
				);
				$result = $this->db->insert('qq_waiting', $data_waiting); 
				if(!$result){
					return "NOT add waiting ";
				}
				
				//////////////////////////////////////////
				//
				// Step 11: update waiting
				//
				//////////////////////////////////////////
				$register_detail_id = $register_data->register_detail_id;
				$data_waiting = array(
					'waiting' => 1,
				);
				$this->db->where('register_detail_id', $register_detail_id);
        		$result = $this->db->update('qq_register_department_order', $data_waiting);

				if(!$result){
					return "NOT update waiting in qq_register_department_order";
				}

				return $register_data;
			}
		}

		return "error";
	}

	function getQueueId($site_id){
		date_default_timezone_set('Asia/Bangkok');
		$date = date('Y-m-d', time());

		$sql = "SELECT * 
				FROM qq_queue
				WHERE queue_date = CURDATE()
				AND site_id = '" . $site_id . "' 
				LIMIT 1";
		$result = $this->db->query($sql)->row();

		if(!$result){
			$data = array(
				'queue_date' => $date,
				'site_id' => $site_id,
			);
			$result = $this->db->insert('qq_queue', $data); 

			if($result){
				$queue_id = $this->db->insert_id(); 
				return $queue_id;
			}
			else{
				return 0;
			}
		}
        
        return $result->queue_id;
	}

	function getLastRegisterNumber($queue_id){
		$sql = "SELECT MAX(CONVERT(register_number,UNSIGNED INTEGER)) as max_number
                FROM qq_register
                WHERE queue_id = '" . $queue_id . "'
                ORDER BY register_number DESC
                LIMIT 1";
		$result = $this->db->query($sql)->row();
		return $result->max_number;
	}

	function getRegisterDepartmentOrderFirst($register_id){
		$sql = "SELECT * 
				FROM qq_register_department_order rdo
				JOIN qq_register r ON rdo.register_id = r.register_id
				WHERE rdo.register_id = '" . $register_id . "'
				AND rdo.waiting = 0
				ORDER BY rdo.department_order ASC
				LIMIT 1";
		$result = $this->db->query($sql)->row();
		return $result;
	}

	function registered(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);
		
		// return $points;
		if(!isset($points)){
            return "NOT isset";
        }
		$sql = "SELECT * 
				FROM qq_register 
				WHERE site_id = '" . $points->site_id . "' 
				AND DATE(register_datetime) = CURDATE()
				ORDER BY register_datetime DESC";
		if((!empty($points->limit)) && ($points->limit != 0 )){
			$sql .= " LIMIT " . $points->limit;
		}
		$result = $this->db->query($sql)->result();
		return $result;
	}

	function registeredAll($site_id){

		$sql = "SELECT * 
				FROM qq_register 
				WHERE site_id = '" . $site_id . "' 
				AND DATE(register_datetime) = CURDATE()
				ORDER BY register_datetime DESC";
		
		$result = $this->db->query($sql)->result();
		return $result;
	}


	function deleteRegistered(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);

		if(!isset($points)){
            return "NO Data";
        }
		$this->db->where('register_id', $points->register_id);
        //$result = $this->db->update('form', $data);
        $result = $this->db->delete("qq_register");
        return $result;
	}
}
