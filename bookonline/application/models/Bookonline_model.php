<?php
	class Bookonline_model extends CI_model{
		function __contruct(){
			parent::__contruct();
		}

		public function getBookonlineViewed($hdid,$numot){
			$sql="SELECT * FROM bko_publish_viewed WHERE publish_hd_id='{$hdid}' AND num_ot='{$numot}'";
			$row=$this->db->query($sql)->row();
			return $row;
		}

		public function addBookonlineViewed($formArrayViewed,$tb="bko_publish_viewed"){
			$this->db->insert($tb,$formArrayViewed);
			return true;
		}

		//[Athiwat][25/06/2564][have : true && not have : false]
		public function checkBookonlineViewed($hdid,$numot){
			$sql="SELECT publish_viewed_id FROM bko_publish_viewed WHERE publish_hd_id='{$hdid}' AND num_ot='{$numot}'";
			$query=$this->db->query($sql);
			$numrow=$query->num_rows();
			if($numrow>0) return true; else return false;
		}

		public function getViewd($hdid){
			$sql="SELECT viewed FROM bko_publish_hd where publish_hd_id=".$hdid;
			$viewed=$this->db->query($sql)->row()->viewed;
			return $viewed;
		}

		public function deleteBookonlineFile($hdid,$fileid,$formArrayFile,$tb="bko_publish_file"){
			$sql_where="publish_hd_id=".$hdid." and publish_file_id=".$fileid;
			$this->db->update($tb,$formArrayFile,$sql_where);
			return true;
		}

		public function getUsers(){
			$sql="SELECT n.NUM_OT,p.fname,p.lname,po.position_name,nw.New_Heading
				  from tb_nuser n
				 	left outer join tb_person p on (n.NUM_OT = p.NUM_OT)
				 	left outer join tb_position po on (n.pp=po.position_code)
				 	left outer join tb_nward nw on (nw.ward_code=n.ward_code)";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getMaxHD(){
			$sql="SELECT max(publish_hd_id) AS maxid FROM bko_publish_hd WHERE deleted=0";
			$maxid=$this->db->query($sql)->row()->maxid;
			$maxid+=1;
			return $maxid;
		}

		public function getLocations(){
			$sql="SELECT ward_code,ward_name1 FROM tb_location1";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function addBookonlineAudience($hdid,$formArrayHD){
			if(!empty($hdid)){
				$sql_where="publish_hd_id=".$hdid;
				$this->db->update("bko_publish_hd",$formArrayHD,$sql_where);
				return true;
			}else return false;
		}

		public function updateBookonlineHd($formArrayHD,$hdid){
			if(!empty($hdid)){
				$sql_where="publish_hd_id=".$hdid;
				$this->db->update("bko_publish_hd",$formArrayHD,$sql_where);
				return true;
			}else return false;
		}

		public function deleteBookonline($hdid,$formArray){
			if(!empty($hdid)){
				$sql_where="publish_hd_id=".$hdid;
				$this->db->update("bko_publish_file",$formArray,$sql_where);
				$this->db->update("bko_publish_hd",$formArray,$sql_where);
				return true;
			}else return false;
		}

		public function getBookonlineHds(){
			$sql="SELECT * FROM bko_publish_hd WHERE deleted=0 ORDER BY publish_pin_status DESC,publish_status DESC,publish_hd_id DESC,publish_datetime DESC";
			$result = $this->db->query($sql)->result();
			return $result;
		}

		public function getBookonlineFiles(){
			$sql="SELECT * FROM bko_publish_file WHERE deleted = 0 ORDER BY create_datetime DESC";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getBookonlineHd($id){
			$sql="SELECT * FROM bko_publish_hd WHERE deleted=0 and publish_hd_id=$id";
			$result = $this->db->query($sql)->row();
			return $result;
		}

		public function getBookonlineFile($id){
			$sql="SELECT * FROM bko_publish_file WHERE publish_hd_id=$id AND deleted = 0 ORDER BY publish_file_id";
			$result = $this->db->query($sql)->result();
			return $result;
		}

		public function addBookonlineHd($formHds){
			$this->db->insert('bko_publish_hd',$formHds);
			return true;
		}

		public function addBookonlineFile($formFiles){
			$this->db->insert('bko_publish_file',$formFiles);
			return true;
		}

		public function getPublishTypes(){
			$sql="SELECT publish_type_id,publish_type_name FROM bko_publish_type ORDER BY publish_type_id";
			$result = $this->db->query($sql)->result();
			return $result;
		}

	}
?>
