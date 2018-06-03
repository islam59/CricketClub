<?php
	class About_Model extends CI_Model{

		public function getAboutData(){
			$this->db->select('*');
			$this->db->from('tb_about');
			$this->db->where('id','1');
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function updateAboutData($data){
			$this->db->set('about_body',$data['about_body']);
			$this->db->where('id','1');
			$this->db->update('tb_about');
		}
		public function updateAboutDataImage($data){
			$this->db->set('about_body',$data['about_body']);
			$this->db->set('about_logo',$data['about_logo']);  
			$this->db->where('id','1');
			$this->db->update('tb_about');
		}

		public function updateHistoryData($data){
			$this->db->set('franchaizes_body',$data['franchaizes_body']);
			$this->db->set('coach_body',$data['coach_body']);
			$this->db->set('sponsor_body',$data['sponsor_body']);
			$this->db->where('id','1');
			$this->db->update('tb_about');
		}
		public function updateHistoryDataImage($data){
			$this->db->set('franchaizes_body',$data['franchaizes_body']);
			$this->db->set('coach_body',$data['coach_body']);
			$this->db->set('sponsor_body',$data['sponsor_body']);
			$this->db->set('franchaizes_logo',$data['franchaizes_logo']);  
			$this->db->where('id','1');
			$this->db->update('tb_about');
		}

		public function updateWinningsData($data){
			$this->db->set('about_body',$data['about_body']);
			$this->db->where('id','1');
			$this->db->update('tb_about');
		}
		public function updateWinningsDataImage($data){
			$this->db->set('winnings_body',$data['winnings_body']);
			$this->db->set('winnings_logo',$data['winnings_logo']);  
			$this->db->where('id','1');
			$this->db->update('tb_about');
		}

	}
?>