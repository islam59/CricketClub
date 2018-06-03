<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scheduleoptions extends CI_Controller {
	/***
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 ***/

	public function __construct(){
		parent::__construct(); 
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		//$this->load->helper(array('form', 'url'));
		$this->load->model('schedule_model');

		$data = array(); 

		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
	}

	public function Schedule(){
		$data = array();
		$data['schedules'] = $this->schedule_model->getScheduleData($data); //use for site data....
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/schedule.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function ScheduleAdd(){
		$data = array();
		$data['addform'] = $this->load->view('admin_panel/files/scheduleAdd.php',$data,TRUE);
		$data['schedules'] = $this->schedule_model->getScheduleData($data); //use for site data....
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/schedule.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function ScheduleAddForm(){
		$data = array(); 
		$data['teamone'] = $this->input->post('teamone');
		$data['teamtwo'] = $this->input->post('teamtwo');
		$data['venue']   = $this->input->post('venue');
		$t= $this->input->post('time'); 
		$u= $this->input->post('unit'); 
		$data['time'] = $t.$u; 
		$data['date']    = $this->input->post('date'); 

		$teamone = $data['teamone']; 
		$teamtwo = $data['teamtwo']; 
		$venue = $data['venue']; 
		$time = $data['time']; 
		$unit = $data['unit']; 
		$date = $data['date']; 

		if(empty($teamone) OR empty($teamtwo) OR empty($venue) OR empty($time) OR empty($date)){
			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Scheduleoptions/Schedule");
		}else{
			$this->schedule_model->saveShedule($data); 
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Schedule Added Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Scheduleoptions/Schedule");

		}
	}//schedule saved... 

	public function ScheduleEdit($id){
		$data = array();
		$data['id'] = $id; 
		$data['scheduleById'] = $this->schedule_model->getScheduleDataById($data); 
		$data['addform'] = $this->load->view('admin_panel/files/scheduleEdit.php',$data,TRUE);
		$data['schedules'] = $this->schedule_model->getScheduleData($data); //use for site data....
		
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/schedule.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}
	public function ScheduleUpdateForm(){
		$data = array(); 
		$data['id'] = $this->input->post('id'); 
		$data['teamone'] = $this->input->post('teamone');
		$data['teamtwo'] = $this->input->post('teamtwo');
		$data['venue']   = $this->input->post('venue');
		$t= $this->input->post('time'); 
		$u= $this->input->post('unit'); 
		$data['time'] = $t.$u; 
		$data['date']    = $this->input->post('date'); 

		$teamone = $data['teamone']; 
		$teamtwo = $data['teamtwo']; 
		$venue = $data['venue']; 
		$time = $data['time']; 
		$date = $data['date']; 

		if(empty($teamone) OR empty($teamtwo) OR empty($venue) OR empty($time) OR empty($date)){
			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Scheduleoptions/Schedule");
		}else{
			$this->schedule_model->updateShedule($data); 
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning">Schedule Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Scheduleoptions/Schedule");

		}
	}//schedule updates..... 

	public function RemoveSchedule($id){
		$this->schedule_model->removeSchedule($id); 
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning">Schedule Deleted Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Scheduleoptions/Schedule");
	}	


}
