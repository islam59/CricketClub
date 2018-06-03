<?php
	class Slider_Model extends CI_Model{

		public function getAllSliderData(){
			$this->db->select('*');
			$this->db->from('tb_slider');
			$this->db->where('status','1');
			$this->db->order_by('priority','DESC');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}



		public function getGalleryDataById($data){
			$this->db->select('*');
			$this->db->from('tb_slider');
			$this->db->where('id',$data['id']);
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function saveGallery($data){
			$this->db->insert('tb_slider',$data);
		}//save profile...

		public function delProfile($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_slider');
		}//del managements...


		public function updateGalleryDataImage($data){
			$this->db->set('images',$data['images']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_slider');
		}
	}
?>