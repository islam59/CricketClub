<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coveroption extends CI_Controller {
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
		$this->load->model('cover_model');/*userprofile model.. */
		$this->load->helper(array('form', 'url'));
		$data = array();
		
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
	}

/*=========================================================================*/
	public function Cover(){ //USER LIST METHODS...
		$data = array();
		$data['logobackground'] = $this->cover_model->getAllSiteData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/cover.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function ChangeLogo(){
		$data = array();
		$data['logoname'] =$this->input->post('logoname');//removable image from folder... 
		$data['logo']= $_FILES['logo']['name'];

		$logoname = $data['logoname']; 
		$logo = $data['logo']; 



		if(empty($data['logo'])){
			
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Select An Image !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Coveroption/Cover");
		}else{	
				$this->cover_model->changeSiteLogo($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/cover/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('logo')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/cover/".$logoname;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Coveroption/Cover".$id);
		}//
	}/*=========================================================================*/

	public function ChangeBackground(){
		$data = array();
		$data['backgroundname'] =$this->input->post('backgroundname');//removable image from folder... 
		$data['background_image']= $_FILES['background_image']['name'];

		$backgroundname = $data['backgroundname']; 
		$background_image = $data['background_image']; 



		if(empty($data['background_image'])){
			
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Select An Image !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Coveroption/Cover");
		}else{	
				$this->cover_model->changeSiteBackground($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/cover/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 10240000000;
                $config['max_height']           = 768000000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('background_image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/cover/".$backgroundname;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Coveroption/Cover".$id);
		}//
	}//background changes.. /*=========================================================================*/








}
