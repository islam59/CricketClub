<?php
	class News_Model extends CI_Model{

		public function getNewsData(){
			$this->db->select('*');
			$this->db->from('tb_news');
			$this->db->order_by('id','DESC');
			$this->db->limit('1');
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function getNewsById($data){
			$this->db->select('*');
			$this->db->from('tb_news');
			$this->db->where('id',$data['id']);
			$result  = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function getNewsDataThree(){
			$this->db->select('*');
			$this->db->from('tb_news');
			$this->db->where('type','3');
			$this->db->order_by('id','DESC');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}
		public function getNewsDataSeven(){
			$this->db->select('*');
			$this->db->from('tb_news');
			$this->db->where('type','7');
			$this->db->order_by('id','DESC');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}
		public function getNewsDataTwo(){
			$this->db->select('*');
			$this->db->from('tb_news');
			$this->db->where('type','2');
			$this->db->order_by('id','DESC');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}

//for newsoptions... admin controls.....
		public function getAllNews(){
			$this->db->select('*');
			$this->db->from('tb_news');
			$this->db->order_by('id','DESC');
			$result  = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}
		public function positionLeft($id){
			$this->db->set('type', '3');
			$this->db->where('id', $id);
			$this->db->update('tb_news');
		}
		public function positionCenter($id){
			$this->db->set('type', '7');
			$this->db->where('id', $id);
			$this->db->update('tb_news');
		}
		public function positionRight($id){
			$this->db->set('type', '2');
			$this->db->where('id', $id);
			$this->db->update('tb_news');
		}

		public function saveNews($data){
			$this->db->insert('tb_news',$data);
		}//save slider..

		public function delNews($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_news');
		}//del sponsor pageadds.. by id


		public function updateNewsData($data){
			$this->db->set('news_title',$data['news_title']);
			$this->db->set('type',$data['type']);
			$this->db->set('news_body',$data['news_body']);
			$this->db->set('news_image',$data['old_image']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_news');
		}
		public function updateNewsDataImage($data){
			$this->db->set('news_title',$data['news_title']);
			$this->db->set('type',$data['type']);
			$this->db->set('news_body',$data['news_body']);
			$this->db->set('news_image',$data['news_image']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_news');
		}


	}
?>