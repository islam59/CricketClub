<?php
	class Gallery_Model extends CI_Model{

		public function getGalleryData(){
			$this->db->select('*');
			$this->db->from('tb_gallery');
			//$this->db->where('id','DESC');
			$result   = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}

		public function getGalleryDataHome(){
			$this->db->select('*');
			$this->db->from('tb_gallery');
			//$this->db->where('id','DES');
			$this->db->limit('3');
			$result   = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}

		public function getGalleryDataById($data){
			$this->db->select('*');
			$this->db->from('tb_gallery');
			$this->db->where('id',$data['id']);
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function saveGallery($data){
			$this->db->insert('tb_gallery',$data);
		}//save profile...

		public function delProfile($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_gallery');
		}//del managements...


		public function updateGalleryDataImage($data){
			$this->db->set('image',$data['image']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_gallery');
		}
	}
?>