<?php
	class Recruit_model extends CI_model{
		function __contruct(){
			parent::__contruct();
		}

		public function getPositionTypes(){
			$sql="SELECT * FROM rc_position_type order by position_type_id DESC";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getPositions(){
			$sql="SELECT position_id,position_name from sev_position";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getLocations(){
			$sql="SELECT ward_code,ward_name1 from tb_location1";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function addRecruitAudience($hdid,$formArrayHD){
			if(!empty($hdid)){
				$sql_where="publish_hd_id=".$hdid;
				$this->db->update("rc_publish_hd",$formArrayHD,$sql_where);
				return true;
			}else return false;
		}

		public function updateRecruitHd($formArrayHD,$hdid){
			if(!empty($hdid)){
				$sql_where="publish_hd_id=".$hdid;
				$this->db->update("rc_publish_hd",$formArrayHD,$sql_where);
				return true;
			}else return false;
		}

		public function deleteRecruit($hdid,$formArrayHD,$formArrayDT){
			if(!empty($hdid)){
				$sql_where="publish_hd_id=".$hdid;
				$this->db->update("rc_publish_dt",$formArrayDT,$sql_where);
				$this->db->update("rc_publish_hd",$formArrayHD,$sql_where);
				return true;
			}else return false;
		}

		public function deleteRecruitDt($hdid,$dtid,$formArrayDT){
			$sql_where="publish_hd_id=".$hdid." and publish_dt_id=".$dtid;
			$this->db->update("rc_publish_dt",$formArrayDT,$sql_where);
			return true;
		}

		public function getRecruitHds(){
			$sql="SELECT * FROM rc_publish_hd WHERE deleted=0 ORDER BY publish_hd_id DESC";
			// $sql="SELECT * FROM rc_publish_hd WHERE deleted=0 ORDER BY publish_hd_id DESC";
			$result = $this->db->query($sql)->result();
			return $result;
		}

		public function getRecruitDts(){
			$sql="SELECT * FROM rc_publish_dt WHERE deleted=0 ORDER BY publish_dt_id DESC";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getRecruitFiles(){
			$sql="SELECT * FROM rc_publish_file ORDER BY file_date DESC";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getRecruitHd($id){
			$sql="SELECT * FROM rc_publish_hd WHERE deleted=0 and publish_hd_id=$id";
			$result = $this->db->query($sql)->row();
			return $result;
		}

		public function getRecruitDt($id){
			$sql="SELECT * FROM rc_publish_dt WHERE publish_hd_id=$id and deleted=0 ORDER BY create_date ASC";
			$result = $this->db->query($sql)->result();
			return $result;
		}

		public function getRecruitFile($id){
			// $sql="SELECT * FROM rc_publish_file WHERE publish_hd_id=".$id;
			$sql="SELECT file.*
				  from rc_publish_file file left outer join rc_publish_dt dt on(file.publish_dt_id=dt.publish_dt_id and file.publish_hd_id=dt.publish_hd_id)
				  where dt.deleted = 0 and file.publish_hd_id='{$id}'";
			$result = $this->db->query($sql)->result();
			return $result;
		}

		public function addRecruitHd($formHds){
			$this->db->insert('rc_publish_hd',$formHds);
			return true;
		}

		public function addRecruitDt($formDts){
			$this->db->insert('rc_publish_dt',$formDts);
			return true;
		}

		public function addRecruitFile($formFiles){
			$this->db->insert('rc_publish_file',$formFiles);
			return true;
		}

	}
?>