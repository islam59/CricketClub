<?php
	class Teams_Model extends CI_Model{

		public function getManagementDataCover(){
			$this->db->select('*');
			$this->db->from('tb_teams');
			$this->db->order_by('id','DESC');
			$this->db->limit('1');
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function getTeamsData(){
			$this->db->select('*');
			$this->db->from('tb_teams');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}
		public function getManagementDataById($data){
			$this->db->select('*');
			$this->db->from('tb_teams');
			$this->db->where('id',$data['id']);
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function saveManagement($data){
			$this->db->insert('tb_teams',$data);
		}//save profile...

		public function delProfile($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_teams');
		}//del managements...

		public function updateManagementData($data){
			$this->db->set('name',$data['name']);
			$this->db->set('type',$data['type']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_teams');
		}
		public function updateManagementDataImage($data){
			$this->db->set('name',$data['name']);
			$this->db->set('type',$data['type']);
			$this->db->set('image',$data['image']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_teams');
		}
	}
?>