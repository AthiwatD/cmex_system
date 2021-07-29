<?php
	class Shcmenu_model extends CI_model{

		function __contruct(){
			parent::__contruct();
		}

		public function insertMenuDT($formDT,$tb="hrc_shortcut_menudt"){
			$this->db->insert($tb,$formDT);
			return true;
		}

		public function getShcmenuHDs(){
			$sql="SELECT * from hrc_shortcut_menuhd order by menuhd_id DESC";
			$result = $this->db->query($sql)->result();
			return $result;
		}

		public function getShcmenuDTs(){
			$sql="SELECT * FROM hrc_shortcut_menudt order by menuhd_id DESC  ,table_name ASC ,menudt_id ASC";
			$result = $this->db->query($sql)->result();
			return $result;
		}

		public function getMaxHD(){
			$sql="SELECT MAX(menuhd_id) as maxhdid from hrc_shortcut_menuhd where deleted = 0 order by menuhd_id DESC";
			$query=$this->db->query($sql);
			$row=$query->num_rows();
			if($row>0) return $this->db->query($sql)->row(); else return false;
		}

		public function insertMenuHD($formHD,$tb="hrc_shortcut_menuhd"){
			$this->db->insert($tb,$formHD);
			return true;
		}

		public function getMaxOT(){
			$sql_ot='SELECT max(ot_id) from sly_ot where ot_year is not null and ot_year <> "0"  and
														 ot_month is not null and ot_month <> "0" and
														 ot_date is not null and ot_date <> "0" and
														 ot_file is not null and ot_file <> "0";';
			$query_ot=$this->db->query($sql_ot);
			$row_o=$query_ot->num_rows();
			if($row_o>0) return $this->db->query($sql_ot); else return false;
		}


	}
?>
