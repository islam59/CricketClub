<?php
	class Sponsor_Model extends CI_Model{

		public function getSponsorData(){
			$this->db->select('*');
			$this->db->from('tb_sponsor');
			//$this->db->where('status','1');
			//$this->db->order_by('priority','DESC');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}

		public function getSponsorDataById($data){
			$this->db->select('*');
			$this->db->from('tb_sponsor');
			$this->db->where('id',$data['id']);
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function updateSponsorData($data){
			$this->db->set('link',$data['link']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_sponsor');
		}
		public function updateSponsorDataImage($data){
			$this->db->set('link',$data['link']);
			$this->db->set('sponsor_logo',$data['sponsor_logo']);  
			$this->db->where('id',$data['id']);
			$this->db->update('tb_sponsor');
		}


		public function saveSponsor($data){
			$this->db->insert('tb_sponsor',$data);
		}//save slider...

		public function delSponsor($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_sponsor');
		}//del sponsor pageadds.. by id
	}
?>