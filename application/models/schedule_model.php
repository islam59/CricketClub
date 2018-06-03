<?php
	class Schedule_Model extends CI_Model{

		public function getScheduleData(){
			$this->db->select('*');
			$this->db->from('tb_schedule');
			$result   = $this->db->get();
			$result   = $result->result(); 
			return $result;
		}

		public function saveShedule($data){
			$this->db->insert('tb_schedule',$data);
		}//save slider...

		public function getScheduleDataById($data){
			$this->db->select('*');
			$this->db->from('tb_schedule');
			$this->db->where('id',$data['id']); 
			$result   = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function updateShedule($data){
			$this->db->set('teamone',$data['teamone']);
			$this->db->set('teamtwo',$data['teamtwo']);
			$this->db->set('date',$data['date']);
			$this->db->set('venue',$data['venue']);
			$this->db->set('time',$data['time']);
			$this->db->where('id',$data['id']); 
			$this->db->update('tb_schedule');			
		}//update team schedule... 

		public function removeSchedule($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_schedule');
		}//remove schedule...


/* ====================================================================================================== */
/* ====================================================================================================== */
/* ======================================..RESULT CONTROL MODELS..======================================= */
/* ====================================================================================================== */
/* ====================================================================================================== */
		public function getResultData(){ 
			$this->db->select('*');
			$this->db->from('tb_result');
			$this->db->order_by('id','DESC');
			$result   = $this->db->get();
			$result   = $result->result(); 
			return $result; 
		}//ALL RESULT FROM DB FOR SITE VIEW & CONTROL LIST.. 
		public function saveResult($data){
			$this->db->insert('tb_result',$data);
		}//save slider...

		public function getResultDataById($data){
			$this->db->select('*');
			$this->db->from('tb_result');
			$this->db->where('id',$data['id']); 
			$result   = $this->db->get();
			$result   = $result->row(); 
			return $result;
		}

		public function updateResult($data){
			$this->db->set('teamone',$data['teamone']);
			$this->db->set('teamtwo',$data['teamtwo']);
			$this->db->set('touch',$data['touch']);
			$this->db->set('result',$data['result']);
			$this->db->where('id',$data['id']); 
			$this->db->update('tb_result');			
		}//update team schedule... 

		public function removeResult($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_result');
		}//remove schedule...

	}


?>

