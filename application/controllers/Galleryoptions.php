<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galleryoptions extends CI_Controller {
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
		$this->load->model('gallery_model');

		$data = array(); 
		
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
	}

/*=========================================================================*/
	public function Gallery(){ //USER LIST METHODS...
		$data = array();
		$data['managements'] = $this->gallery_model->getGalleryData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/gallery.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function GalleryAddForm(){
		$data['image']= $_FILES['image']['name'];
		$image = $data['image']; 

		if(empty($image)){
			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Please Select An Image First !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Galleryoptions/Gallery");
		}else{
			$this->gallery_model->saveGallery($data);
				/*image uploads...*/
                $config['upload_path']          = './assist/images/gallery/';
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
			$sdata['msg'] = '<div class="alert alert-success"> Uploaded Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Galleryoptions/Gallery");
		}
	}//end of sponsor insertion.... //
/*=========================================================================*/
	public function RemoveProfile($id,$img){
	   $file = "assist/images/gallery/".$img;
	   if (file_exists($file)){ unlink($file); }
			$this->gallery_model->delProfile($id);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-warning"> Profile Deleted Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Galleryoptions/Gallery");
	}//end# remove memeber...

/*=========================================================================*/
	public function GalleryUpdate($id){ //USER LIST METHODS...
		$data = array();
		$data['id'] = $id; 
		$data['profile'] = $this->gallery_model->getGalleryDataById($data); 
		$data['manForm'] = $this->load->view('admin_panel/files/galleryedit.php',$data,TRUE); 
		$data['managements'] = $this->gallery_model->getGalleryData($data); //GET ALL USR PROFILE.... 
		$data['header'] = $this->load->view('admin_panel/include/header.php',$data, TRUE); // load admin header from includes...
		$data['menu'] = $this->load->view('admin_panel/include/menu.php',$data, TRUE); // load admin menu from includes...		
		$data['content'] = $this->load->view('admin_panel/files/gallery.php',$data, TRUE); // load logo &backgorund files...
		$data['footer'] = $this->load->view('admin_panel/include/footer.php',$data, TRUE); // load footer from includes......
		$this->load->view('dashboard', $data);
	}/*=========================================================================*/

	public function GalleryUpdateForm(){
		$data = array(); 
		$data['id'] = $this->input->post('id');
		$data['old_image'] = $this->input->post('old_image'); 
		$data['image']= $_FILES['image']['name'];

		$old_image = $data['old_image']; 
		$image = $data['image']; 

		if(empty($data['image'])){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Failed To Updated !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Galleryoptions/Gallery");
		}else{	
				$this->gallery_model->updateGalleryDataImage($data);

				/*image uploads...*/
                $config['upload_path']          = './assist/images/gallery/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "./assist/images/gallery/".$old_image;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Profile Updated Successfully!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Galleryoptions/Gallery");
		}//
	}/*=========================================================================*/
}
