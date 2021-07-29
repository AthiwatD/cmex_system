<?php
	class Hrcost_model extends CI_model{
		function __contruct(){
			parent::__contruct();
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

		public function getMaxSly(){
			$sql_sly='SELECT max(salary_id) from sly_salary where salary_year is not null and salary_year <> "0" and
																  salary_month is not null and salary_month <> "0" and
																  salary_date is not null and salary_date <> "0" and
																  salary_file is not null and salary_file <> "0";';
			$query_sly=$this->db->query($sql_sly);
			$row_s=$query_sly->num_rows();
			if($row_s>0) return $this->db->query($sql_sly); else return false;
		}

		public function processQueryCost($select,$where,$tb_hd,$td_dt,$pf){
			$res=array();
			if($pf=="sld"){
				$sql="SELECT count(sld.user_id) count ,format(sum($select),2) sum ,format(avg($select),2) avg ,format(max($select),2) max ,format(min($select),2) min from $tb_hd left outer join $td_dt on(sl.salary_id = sld.salary_id) left outer join sev_person p on(sld.user_id=p.person_id) left outer join sev_center c on(p.center_id=c.center_id) left outer join sev_position po on (p.position_id=po.position_id) left outer join tb_person_department pd on (p.person_id=pd.num_ot) left outer join tb_department d on (pd.department_id=d.department_id) WHERE $where ";
			}else if($pf=="otd"){
				$sql="SELECT count(otd.user_id) count ,format(sum($select),2) sum ,format(avg($select),2) avg ,format(max($select),2) max ,format(min($select),2) min from $tb_hd left outer join $td_dt on(ot.ot_id = otd.ot_id) left outer join sev_person p on(otd.user_id=p.person_id) left outer join sev_center c on(p.center_id=c.center_id) left outer join sev_position po on (p.position_id=po.position_id) left outer join tb_person_department pd on (p.person_id=pd.num_ot) left outer join tb_department d on (pd.department_id=d.department_id) WHERE $where ";
			}
			$query=$this->db->query($sql);
			$row=$query->num_rows();
			if($row>0) return $res=array($this->db->query($sql)->row(),$sql); else return false;
		}

		public function getPositions(){
			$sql="SELECT * FROM sev_position";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getDepartments(){
			$sql="SELECT * FROM tb_department";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getCenters(){
			$sql="SELECT * FROM sev_center";
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getOTs(){
			$sql='SELECT * FROM sly_ot where ot_year is not null and ot_year <> "0"  and
											 ot_month is not null and ot_month <> "0" and
											 ot_date is not null and ot_date <> "0" and
											 ot_file is not null and ot_file <> "0"
				  ORDER BY ot_id DESC;';
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getSalarys(){
			$sql='SELECT * FROM sly_salary where salary_year is not null and salary_year <> "0" and
												 salary_month is not null and salary_month <> "0" and
												 salary_date is not null and salary_date <> "0" and
												 salary_file is not null and salary_file <> "0" 
				  ORDER BY salary_id DESC;';
			$result=$this->db->query($sql)->result();
			return $result;
		}

		public function getSEVs($num_ot){
			$sql="SELECT p.*,po.*
				  from sev_person p left outer join sev_position po on (p.position_id = po.position_id)
				  where p.person_id=".$num_ot;
			$query=$this->db->query($sql);
			$row=$query->num_rows();
			if($row>0) return $this->db->query($sql)->row(); else return false;
		}

		public function getFixTBs($num_ot){
			$sql="SELECT p.fname,p.lname,po.position_name,nw.New_Heading
				  from tb_nuser n left outer join tb_person p on (n.NUM_OT = p.NUM_OT)
				 				  left outer join tb_position po on (n.pp=po.position_code)
				 				  left outer join tb_nward nw on (nw.ward_code=n.ward_code)
				   where n.NUM_OT=".$num_ot;
			$query=$this->db->query($sql);
			$row=$query->num_rows();
			if($row>0) return $this->db->query($sql)->row(); else return false;
		}

		public function getTBs($num_ot){
			$sql="SELECT n.*
   						,p.*
						,po.*
						,nw.*
				  from tb_nuser n left outer join tb_person p on (n.NUM_OT = p.NUM_OT)
				 				  left outer join tb_position po on (n.pp=po.position_code)
				 				  left outer join tb_nward nw on (nw.ward_code=n.ward_code)
				  where n.NUM_OT=".$num_ot;
			$query=$this->db->query($sql);
			$row=$query->num_rows();
			if($row>0) return $this->db->query($sql)->row(); else return false;
		}

		public function getUsers(){
			$sql="SELECT n.NUM_OT,p.fname,p.lname,po.position_name,nw.New_Heading
				  from tb_nuser n left outer join tb_person p on (n.NUM_OT = p.NUM_OT)
				 				  left outer join tb_position po on (n.pp=po.position_code)
				 				  left outer join tb_nward nw on (nw.ward_code=n.ward_code)";
			$result=$this->db->query($sql)->result();
			return $result;
		}

	}
?>
