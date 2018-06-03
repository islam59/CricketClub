<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsoption extends CI_Controller {
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
		$this->load->helper(array('form', 'url'));
		$this->load->model('news_model');/*userprofile model.. */
		$data = array();
		
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		} 
	}


	public function News(){ //USER LIST METHODS...
		$data = array();

		$data['Newses'] = $this->news_model->getAllNews($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/news.php',$data, TRUE); // load admin dashboard from files....
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function AddNews(){ //USER LIST METHODS...
		$data = array();
		$data['addform'] = $this->load->view('admin_panel/files/newsadd.php',$data,TRUE);
		$data['Newses'] = $this->news_model->getAllNews($data); //GET ALL USR PROFILE.... 

		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/news.php',$data, TRUE); // load admin dashboard from files....
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}

	public function PositionLeft($id){ //ACCESS PARMITTED...
			$this->news_model->positionLeft($id);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Positions Updated Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News");
	}

	public function PositionCenter($id){ //ACCESS PARMITTED...
			$this->news_model->PositionCenter($id);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Positions Updated Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News");
	}


	public function PositionRight($id){ //ACCESS PARMITTED...
			$this->news_model->positionRight($id);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Positions Updated Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News");
	}




	public function NewsAddForm(){ //CLICK ON ADD USER FORM SHOW METHODS...
		$data['news_title'] = $this->input->post('news_title');
		$data['type'] = $this->input->post('type');
		$data['news_body'] = $this->input->post('news_body');
		$data['news_image']= $_FILES['news_image']['name'];
		
		$news_title = $data['news_title'];
		$type = $data['type'];
		$news_body = $data['news_body'];
		$news_image = $data['news_image']; 

		if(empty($news_title) OR empty($type)){ 
			
			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Title And Positions Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/AddNews");

		}elseif(empty($news_image)){

			$this->news_model->saveNews($data);//data uploads..
			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Uploaded Without Image !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News");

		}else{
			$this->news_model->saveNews($data);
				/*image uploads...*/
                $config['upload_path']          = './assist/images/news/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 1024000000;
                $config['max_height']           = 76800000;

                $this->load->library('upload', $config);//uploads images...

                if ( ! $this->upload->do_upload('news_image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/


			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Saved News !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News");
		}
	}


	public function NewsRemove($id,$img){
	   $file = "assist/images/news/".$img;
	   if (file_exists($file)){ unlink($file); }
			$this->news_model->delNews($id);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning">Successfully Deleted !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News",$data); 
	}//end# remove memeber...



	public function EditNews($id){ //USER LIST METHODS...
		$data = array();
		$data['id'] = $id; 
		$data['NewsData'] = $this->news_model->getNewsById($data); //GET ALL USR PROFILE.... 
		$data['addform'] = $this->load->view('admin_panel/files/newsedit.php',$data,TRUE);	
		$data['Newses'] = $this->news_model->getAllNews($data); //GET ALL USR PROFILE.... 

		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes....
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/news.php',$data, TRUE); // load admin dashboard from files....
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}


	public function NewsUpdateForm(){
		$data = array();
		$data['id'] =$this->input->post('id');//removable image from folder... 
		$data['old_image'] =$this->input->post('old_image'); 
		$data['news_title'] =$this->input->post('news_title'); 
		$data['news_body'] =$this->input->post('news_body'); 
		$data['type'] =$this->input->post('type'); 

		$data['link'] = $this->input->post('link');
		$data['news_image']= $_FILES['news_image']['name'];

		$news_title = $data['news_title']; 
		$type = $data['type']; 
		$news_image = $data['news_image']; 
		$news_body = $data['news_body']; 


		if(empty($news_title) OR empty($type)){
			
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Title & Type Must Not Be Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/EditNews",$data['id']);

		}elseif(empty($data['news_image'])){
			
			$this->news_model->updateNewsData($data);

			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-success"> Link Updated Successfully!</div>';
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News");

		}else{	
				
				$this->news_model->updateNewsDataImage($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/news/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('news_image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/news/".$old_image;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Logo Updated Successfully!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Newsoption/News");
		}//
	}/*=========================================================================*/


}
