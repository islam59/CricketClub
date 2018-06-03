<?php
	class Cover_Model extends CI_Model{

		public function getAllSiteData(){
			$this->db->select('*');
			$this->db->from('tb_coverphoto`');
			$this->db->where('id','1');
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function changeSiteLogo($data){
			$this->db->set('management',$data['logo']); 
			$this->db->where('id','1');
			$this->db->update('tb_coverphoto`');
		}

		public function changeSiteBackground($data){
			$this->db->set('team',$data['background_image']); 
			$this->db->where('id','1');
			$this->db->update('tb_coverphoto`');
		}

	}
?>