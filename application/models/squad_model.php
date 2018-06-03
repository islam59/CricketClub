<?php
	class Squad_Model extends CI_Model{

		public function getSquadData(){
			$this->db->select('*');
			$this->db->from('tb_squad');
			$this->db->where('id','1');
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

	}
?>