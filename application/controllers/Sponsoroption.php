<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponsoroption extends CI_Controller {
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
		$this->load->model('sponsor_model');

		$data = array(); 
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
		
	}

/*=========================================================================*/
	public function Sponsor(){ //USER LIST METHODS...
		$data = array();
		$data['sponsors'] = $this->sponsor_model->getSponsorData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/sponsor.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function SponsorAdd(){ //USER LIST METHODS...
		$data = array();
		$data['addform'] = $this->load->view('admin_panel/files/sponsoradd.php',$data, TRUE);
		$data['sponsors'] = $this->sponsor_model->getSponsorData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/sponsor.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/


	public function SponsorAddForm(){
		$data['link'] = $this->input->post('link');
		$data['sponsor_logo']= $_FILES['sponsor_logo']['name'];
		
		$sponsor_logo = $data['sponsor_logo']; 

		if(empty($sponsor_logo)){
			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Select An Image !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsoroption/SponsorAdd");

		}else{
			$this->sponsor_model->saveSponsor($data);
				/*image uploads...*/
                $config['upload_path']          = './assist/images/sponsor/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 1024000000;
                $config['max_height']           = 76800000;

                $this->load->library('upload', $config);//uploads images...

                if ( ! $this->upload->do_upload('sponsor_logo')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/


			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-success"> Uploaded Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsoroption/Sponsor");
		}
	}//end of sponsor insertion.... //
/*=========================================================================*/
	public function SponsorDelete($id,$img){

	   $file = "assist/images/sponsor/".$img;
	   if (file_exists($file)){ unlink($file); }
		
			$this->sponsor_model->delSponsor($id);

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning"> Delete Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			//redirect("Sponsor/SponsorList/");

			redirect("Sponsoroption/Sponsor",$data); 
	}//end# remove memeber...

/*=========================================================================*/
	public function SponsorUpdate($id){ //USER LIST METHODS...
		$data = array();
		$data['id'] = $id; 

		$data['sponsorDataById'] = $this->sponsor_model->getSponsorDataById($data);
		$data['sponsors'] = $this->sponsor_model->getSponsorData($data); //GET ALL USR PROFILE.... 

		$data['addform'] = $this->load->view('admin_panel/files/sponsoredit.php',$data, TRUE);		
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....	
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/sponsor.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/
	public function SponsorUpdateForm(){
		$data = array();
		$data['id'] =$this->input->post('id');//removable image from folder... 
		$data['old_logo'] =$this->input->post('old_logo'); 
		$data['link'] = $this->input->post('link');
		$data['sponsor_logo']= $_FILES['sponsor_logo']['name'];

		$old_logo = $data['old_logo']; 
		$sponsor_logo = $data['sponsor_logo']; 



		if(empty($data['sponsor_logo'])){
			$this->sponsor_model->updateSponsorData($data);
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-success"> Link Updated Successfully!</div>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsoroption/Sponsor");
		}else{	
				$this->sponsor_model->updateSponsorDataImage($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/sponsor/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('sponsor_logo')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/sponsor/".$old_logo;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Logo Updated Successfully!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsoroption/Sponsor");
		}//
	}/*=========================================================================*/
}
