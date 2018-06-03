<?php
	class Management_Model extends CI_Model{

		public function getManagementDataCover(){
			$this->db->select('*');
			$this->db->from('tb_news');
			$this->db->order_by('id','DESC');
			$this->db->limit('1');
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function getManagementData(){
			$this->db->select('*');
			$this->db->from('tb_management');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}

		public function getManagementDataById($data){
			$this->db->select('*');
			$this->db->from('tb_management');
			$this->db->where('id',$data['id']);
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function saveManagement($data){
			$this->db->insert('tb_management',$data);
		}//save profile...

		public function delProfile($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_management');
		}//del managements...

		public function updateManagementData($data){
			$this->db->set('name',$data['name']);
			$this->db->set('title',$data['title']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_management');
		}
		public function updateManagementDataImage($data){
			$this->db->set('name',$data['name']);
			$this->db->set('title',$data['title']);
			$this->db->set('image',$data['image']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_management');
		}


	}
?>