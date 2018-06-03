<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siteoption extends CI_Controller {
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
		$this->load->model('site_model');/*userprofile model.. */
		$this->load->helper(array('form', 'url'));
		$data = array();
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
		
	}

/*=========================================================================*/
	public function Logobackground(){ //USER LIST METHODS...
		$data = array();
		$data['logobackground'] = $this->site_model->getAllSiteData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/logobackground.php',$data, TRUE); // load logo &backgorund files...
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
			redirect("Siteoption/Logobackground");
		}else{	
				$this->site_model->changeSiteLogo($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('logo')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/".$logoname;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Logo Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Logobackground".$id);
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
			redirect("Siteoption/Logobackground");
		}else{	
				$this->site_model->changeSiteBackground($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 10240000000;
                $config['max_height']           = 768000000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('background_image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/".$backgroundname;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Background Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Logobackground".$id);
		}//
	}//background changes.. /*=========================================================================*/


/*=========================================================================*/
	public function Copypower(){ //USER LIST METHODS...
		$data = array();
		$data['copypower'] = $this->site_model->getAllSiteData($data); //GET ALL USR PROFILE.... 

		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/copypower.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=======================================================*/


	public function Copyright(){
		$data = array();
		$data['copyright'] =$this->input->post('copyright');
		$copyright = $data['copyright']; 

		if(empty($copyright)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Empty Data Not Supported !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Copypower");
		}else{	
			$this->site_model->changeSiteCopyright($data);			
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Copyright Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Copypower".$id);
		}//
	}/*=========================================================================*/

	public function Power(){
		$data = array();
		$data['powered_by'] =$this->input->post('powered_by');
		$powered_by = $data['powered_by']; 

		if(empty($powered_by)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Empty Data Not Supported !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Copypower");
		}else{	
			$this->site_model->changeSitePower($data);			
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Powered Content Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Copypower");
		}//
	}/*=========================================================================*/

/*======================================================================================*/
	public function Social(){ //USER LIST METHODS...
		$data = array();
		$data['copypower'] = $this->site_model->getAllSiteData($data); //GET ALL USR PROFILE.... 

		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/sociallink.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=======================================================*/
	public function Facebook(){
		$data = array();
		$data['facebook'] =$this->input->post('facebook');
		$facebook = $data['facebook']; 

		if(empty($facebook)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Empty Data Not Supported !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}else{	
			$this->site_model->changeFacebook($data);			
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Facebook Link Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}//
	}/*=========================================================================*/
	public function Twitter(){
		$data = array();
		$data['twitter'] =$this->input->post('twitter');
		$twitter = $data['twitter']; 

		if(empty($twitter)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Empty Data Not Supported !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}else{	
			$this->site_model->changeTwitter($data);			
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Twitter Link Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}//
	}/*=========================================================================*/
	public function Youtube(){
		$data = array();
		$data['youtube'] =$this->input->post('youtube');
		$youtube = $data['youtube']; 

		if(empty($youtube)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Empty Data Not Supported !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}else{	
			$this->site_model->changeYoutube($data);			
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Youtube Link Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}//
	}/*=========================================================================*/
	public function Instagram(){
		$data = array();
		$data['instagram'] =$this->input->post('instagram');
		$instagram = $data['instagram']; 

		if(empty($instagram)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Empty Data Not Supported !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}else{	
			$this->site_model->changeInstagram($data);			
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Instagram Link Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Siteoption/Social");
		}//
	}/*=========================================================================*/
}
