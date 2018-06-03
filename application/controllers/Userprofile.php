<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {
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
		$this->load->model('profile_model');/*userprofile model.. */
		$data = array(); 
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
		
	}


	public function home(){ //USER LIST METHODS...
		$data = array();

		$data['users'] = $this->profile_model->profileList($data); //GET ALL USR PROFILE.... 

		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/user.php',$data, TRUE); // load admin dashboard from files....		
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function userprofileForm(){ //CLICK ON ADD USER FORM SHOW METHODS...
		$data = array();

		$data['addform'] = $this->load->view('admin_panel/files/useraddform.php',$data, TRUE); // USER ADD FORM....	
		$data['users'] = $this->profile_model->profileList($data); //GET ALL USR PROFILE.... 	

		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/user.php',$data, TRUE); // load admin dashboard from files....		
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function userprofileView($uid){ //CLICK ON ADD USER FORM SHOW METHODS...
		$data = array();

		$data['profile'] = $this->profile_model->profileView($uid); //GET ALL USR PROFILE.... 	
		$data['addform'] = $this->load->view('admin_panel/files/userview.php',$data, TRUE); // USER ADD FORM....	

		$data['users'] = $this->profile_model->profileList($data); //GET ALL USR PROFILE.... 	

		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/user.php',$data, TRUE); // load admin dashboard from files....		
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function passwordUpdate($uid){ //CLICK ON ADD USER FORM SHOW METHODS...
		$data = array();

		$data['id'] = $uid; 

		$data['addform'] = $this->load->view('admin_panel/files/changepassword.php',$data, TRUE); // USER ADD FORM....	

		$data['users'] = $this->profile_model->profileList($data); //GET ALL USR PROFILE.... 	
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/user.php',$data, TRUE); // load admin dashboard from files....		
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function changePassword($uid){ //CLICK ON ADD USER FORM SHOW METHODS...
		$data = array();
		$data['id'] = $this->input->post('id');
		$data['password']  = $this->input->post('password');
		$data['c_password']  = $this->input->post('c_password');

		$password   = $data['password'];
		$c_password   = $data['c_password']; 


		if(empty($password) OR empty($c_password)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Field Must Not Empty</div>';
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/home");
		}elseif($password != $c_password){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Password Not Matched 1</div>';
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/home");
		}else{
			$data['password'] = md5($data['password']);

			$this->profile_model->changePassword($data);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Password Change Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/home");
		}
	}

	public function useraddform(){//SAVE USER TO DATABASE METHODS...
		$data = array();
		$data['username']  = $this->input->post('username');
		$data['password']  = $this->input->post('password');
		if(!empty($data['password'])){
			$data['password'] = md5($data['password']);
		}
		
		$data['role']      = $this->input->post('role');
		$data['created_by']= $this->session->username;

		$data['access'] = '1'; 

		$username   = $data['username'];
		$password   = $data['password']; 
		$role       = $data['role'];
		$created_by = $data['created_by'];

		if(empty($username) OR empty($password) OR empty($role)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Field Must Not Empty</div>';
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/userprofileForm");
		}else{
			$this->profile_model->saveProfile($data);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">User Save Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/home");
		}
	}

	public function accessON($uid){ //ACCESS PARMITTED...
			$this->profile_model->accessON($uid);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Access Parmitted !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/home");
	}
	public function accessOFF($uid){ //ACCESS BLOCKED..
			$this->profile_model->accessOFF($uid);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-danger">Access Blocked !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/home");
	}

	public function removeProfile($data){
			$this->profile_model->profileRemove($data);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-danger">Profile Removed !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Userprofile/home");
	}

}
