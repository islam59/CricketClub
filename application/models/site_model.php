<?php
	class Site_Model extends CI_Model{

		public function getAllSiteData(){
			$this->db->select('*');
			$this->db->from('tb_site');
			$this->db->where('id','1');
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function changeSiteLogo($data){
			$this->db->set('logo',$data['logo']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}

		public function changeSiteBackground($data){
			$this->db->set('background_image',$data['background_image']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}

		public function changeSiteCopyright($data){
			$this->db->set('copyright',$data['copyright']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}

		public function changeSitePower($data){
			$this->db->set('powered_by',$data['powered_by']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}

		public function changeFacebook($data){
			$this->db->set('facebook',$data['facebook']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}

		public function changeTwitter($data){
			$this->db->set('twitter',$data['twitter']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}

		public function changeYoutube($data){
			$this->db->set('youtube',$data['youtube']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}

		public function changeInstagram($data){
			$this->db->set('instagram',$data['instagram']); 
			$this->db->where('id','1');
			$this->db->update('tb_site');
		}
	}
?>