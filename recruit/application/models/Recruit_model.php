<?php
	class Recruit_model extends CI_model{
		
		function __contruct(){
			parent ::__contruct();
		}

		public function getRecruitHd(){
			$sql="select * from rc_publish_hd order by create_date DESC";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getRecruitDt(){
			$sql="select * from rc_publish_dt order by create_date DESC";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getRecruitFile(){
			$sql="select * from rc_publish_file order by file_date DESC";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function addRecruit($formHd,$formDt,$formFiles){
			$this->db->insert('re_publish_hd',$formHd);
			$this->db->insert('re_publish_dt',$formDt);
			$this->db->insert('re_publish_file',$formFiles);
			return true;
		}

	}
?>