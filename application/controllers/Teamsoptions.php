<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teamsoptions extends CI_Controller {
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
		//$this->load->model('site_model');/*userprofile model.. */
		$this->load->helper(array('form', 'url'));
		$this->load->model('teams_model');

		$data = array(); 
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
		
	}

/*=========================================================================*/
	public function Team(){ //USER LIST METHODS...
		$data = array();
		$data['managements'] = $this->teams_model->getTeamsData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/team.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function TeamAddForm(){
		$data['name'] = $this->input->post('name');
		$data['type'] = $this->input->post('type');
		$data['image']= $_FILES['image']['name'];
		$name  = $data['name']; 
		$type = $data['type'];
		$image = $data['image']; 

		if(empty($image) OR empty($type) OR empty($name)){
			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Filed Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Teamsoptions/Team");
		}else{
			$this->teams_model->saveManagement($data);
				/*image uploads...*/
                $config['upload_path']          = './assist/images/teams/';
                $config['allowed_types']        = 'jpg|png|jpeg|gif';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 1024000000;
                $config['max_height']           = 76800000;

                $this->load->library('upload', $config);//uploads images...
                if ( ! $this->upload->do_upload('image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/
			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-success"> Profile Added Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Teamsoptions/Team");
		}
	}//end of sponsor insertion.... //
/*=========================================================================*/
	public function RemoveProfile($id,$img){
	   $file = "assist/images/management/".$img;
	   if (file_exists($file)){ unlink($file); }
			$this->teams_model->delProfile($id);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning"> Profile Deleted Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Teamsoptions/Team");
	}//end# remove memeber...

/*=========================================================================*/
	public function TeamUpdate($id){ //USER LIST METHODS...
		$data = array();
		$data['id'] = $id; 
		$data['profile'] = $this->teams_model->getManagementDataById($data); 
		$data['manForm'] = $this->load->view('admin_panel/files/teamedit.php',$data,TRUE); 
		$data['managements'] = $this->teams_model->getTeamsData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/team.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function TeamUpdateForm(){
		$data = array(); 
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['type'] = $this->input->post('type');
		$data['old_image'] = $this->input->post('old_image'); 
		$data['image']= $_FILES['image']['name'];

		$old_image = $data['old_image']; 

		if(empty($data['image'])){
			$this->teams_model->updateManagementData($data);
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-success"> Profile Updated Successfully!</div>';
			$this->session->set_flashdata($sdata);
			redirect("Teamsoptions/Team");
		}else{	
				$this->teams_model->updateManagementDataImage($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/teams/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/teams/".$old_image;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Profile Updated Successfully!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Teamsoptions/Team");
		}//
	}/*=========================================================================*/
}
