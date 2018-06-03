<?php
	class Profile_Model extends CI_Model{

		public function saveProfile($data){//SAVE USER PROFILE..
			$this->db->insert('tb_user',$data);
		}

		public function profileList(){ //SHOW ALL USER IN TABLES..
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->order_by('id','DESC');

			$result =$this->db->get();
			$result = $result->result(); 
			return $result;
		}

		public function accessON($data){
			$this->db->set('access', '1');
			$this->db->where('id', $data);
			$this->db->update('tb_user');
		}

		public function accessOFF($data){
			$this->db->set('access', '0');
			$this->db->where('id', $data);
			$this->db->update('tb_user');
		}

		public function profileRemove($data){
			$this->db->where('id',$data);
			$this->db->delete('tb_user');
		}

		public function profileView($uid){ //SHOW ALL USER IN TABLES..
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('id',$uid);
			$result =$this->db->get();
			$result = $result->row(); 
			return $result;
		}

		public function changePassword($data){
			$this->db->set('password', $data['password']);
			$this->db->where('id', $data['id']);
			$this->db->update('tb_user');
		}

	}
?>