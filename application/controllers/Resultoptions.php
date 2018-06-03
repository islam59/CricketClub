<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultoptions extends CI_Controller {
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
/* ====================================================================================================== */
/* ====================================================================================================== */
/* ======================================..RESULT CONTROL OPTIONS..====================================== */
/* ====================================================================================================== */
/* ====================================================================================================== */
	public function Result(){
		$data = array();
		$data['schedules'] = $this->schedule_model->getResultData($data); //use for site data....
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/result.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function ResultAdd(){
		$data = array();
		$data['addform'] = $this->load->view('admin_panel/files/resultAdd.php',$data,TRUE);
		$data['schedules'] = $this->schedule_model->getResultData($data); //use for site data....
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/result.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function ResultAddForm(){
		$data = array(); 
		$data['teamone'] = $this->input->post('teamone');
		$data['teamtwo'] = $this->input->post('teamtwo');
		
		$toch    = $this->input->post('toch');
		$role    = $this->input->post('role');
		$win     = $this->input->post('winner');
		$result  = $this->input->post('result');

		$teamone = $data['teamone']; 
		$teamtwo = $data['teamtwo']; 

/*====*/ 	if($toch == 1){ 
				$data['touch'] = $teamone." WIN TOUCH AND CHOOSE TO ".$role; 
			}else{
				$data['touch'] = $teamtwo." WIN TOUCH AND CHOOSE TO " .$role; 
			}
		$touch = $data['touch']; 

			if($win == 1){ 
				$data['result'] = $teamone.' WON BY '.$result; 
			}elseif($win== 2){ 
				$data['result'] = $teamtwo.'WON BY '.$result; 
			}else{
				$data['result'] = $win; 
			}
		$result = $data['result']; 
		



		if(empty($teamone) OR empty($teamtwo) OR empty($touch) OR empty($result)){
			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Resultoptions/Result");
		}else{
			$this->schedule_model->saveResult($data); 
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Schedule Added Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Resultoptions/Result");

		}
	}//schedule saved... 

	public function ResultEdit($id){
		$data = array();
		$data['id'] = $id; 

		$data['resultdata'] = $this->schedule_model->getResultDataById($data); 
		$data['addform'] = $this->load->view('admin_panel/files/resultedit.php',$data,TRUE);
		$data['schedules'] = $this->schedule_model->getResultData($data); //use for site data....
		
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/result.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}
	public function ResultUpdateForm(){
		$data = array(); 
		$data['id'] = $this->input->post('id'); 
		$data['teamone'] = $this->input->post('teamone');
		$data['teamtwo'] = $this->input->post('teamtwo');
		$data['touch']   = $this->input->post('touch');
		$data['result']    = $this->input->post('result'); 

		$teamone = $data['teamone']; 
		$teamtwo = $data['teamtwo']; 
		$touch = $data['touch']; 
		$result = $data['result']; 

		if(empty($teamone) OR empty($teamtwo) OR empty($touch) OR empty($result)){
			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Resultoptions/Result");
		}else{
			$this->schedule_model->updateResult($data); 
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning">Result Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Resultoptions/Result");

		}
	}//schedule updates..... 

	public function RemoveResult($id){
		$this->schedule_model->removeResult($id); 
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning">Result Deleted Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Resultoptions/Result");
	}	
/* ====================================================================================================== */
/* ====================================================================================================== */
/* ======================================..RESULT CONTROL OPTIONS..====================================== */
/* ====================================================================================================== */
/* ====================================================================================================== */


}
