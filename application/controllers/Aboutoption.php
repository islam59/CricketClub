<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutoption extends CI_Controller {
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
		$this->load->model('about_model');

		$data = array(); 
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
	}

/*=========================================================================*/
	public function About(){ //USER LIST METHODS...
		$data = array();
		$data['aboutData'] = $this->about_model->getAboutData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes..
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/about.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function AboutUpdateForm(){
		$data = array();
		$data['old_logo'] =$this->input->post('old_logo'); 
		$data['about_body'] = $this->input->post('about_body');
		$data['about_logo']= $_FILES['about_logo']['name'];

		$about_body = $data['about_body']; 
		$old_logo = $data['old_logo']; 
		$about_logo = $data['about_logo']; 

		if(empty($data['about_logo'])){
			$this->about_model->updateAboutData($data);
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-success">Successfully Updated!</div>';
			$this->session->set_flashdata($sdata);
			redirect("Aboutoption/About");
		}else{	
				$this->about_model->updateAboutDataImage($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/about/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('about_logo')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/about/".$old_logo;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Aboutoption/About");
		}//
	}/*=========================================================================*/

/*========================================================================================*/
/*========================================================================================*/
/*========================================================================================*/
/*=========================================================================*/
	public function History(){ //USER LIST METHODS...
		$data = array();
		$data['aboutData'] = $this->about_model->getAboutData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes..
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/history.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function HistoryUpdateForm(){
		$data = array();
		$data['old_logo'] =$this->input->post('old_logo'); 
		$data['franchaizes_body'] = $this->input->post('franchaizes_body');
		$data['coach_body'] = $this->input->post('coach_body');
		$data['sponsor_body'] = $this->input->post('sponsor_body');
		$data['franchaizes_logo']= $_FILES['franchaizes_logo']['name'];

		$franchaizes_body = $data['franchaizes_body']; 
		$old_logo = $data['old_logo']; 
		$franchaizes_logo = $data['franchaizes_logo']; 

		if(empty($data['franchaizes_logo'])){
			$this->about_model->updateHistoryData($data);
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-success">Successfully Updated History!</div>';
			$this->session->set_flashdata($sdata);
			redirect("Aboutoption/History");
		}else{	
				$this->about_model->updateHistoryDataImage($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/about/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('franchaizes_logo')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/about/".$old_logo;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated History!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Aboutoption/History");
		}//
	}/*=========================================================================*/

/*========================================================================================*/
/*========================================================================================*/
/*========================================================================================*/
/*=========================================================================*/
	public function Winnings(){ //USER LIST METHODS...
		$data = array();
		$data['aboutData'] = $this->about_model->getAboutData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes..
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/winnings.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function WinningsUpdateForm(){
		$data = array();
		$data['old_logo'] =$this->input->post('old_logo'); 
		$data['winnings_body'] = $this->input->post('winnings_body');
		$data['winnings_logo']= $_FILES['winnings_logo']['name'];

		$winnings_body = $data['winnings_body']; 
		$old_logo = $data['old_logo']; 
		$winnings_logo = $data['winnings_logo']; 

		if(empty($data['winnings_logo'])){
			$this->about_model->updateWinningsData($data);
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-success">Successfully Updated!</div>';
			$this->session->set_flashdata($sdata);
			redirect("Aboutoption/Winnings");
		}else{	
				$this->about_model->updateWinningsDataImage($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/about/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('winnings_logo')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/about/".$old_logo;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Aboutoption/Winnings");
		}//
	}/*=========================================================================*/

}

