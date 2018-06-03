<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Controller {
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

	public function index(){

		$this->load->model('site_model');/*default for all SiteOption Info*/
		//$this->load->model('slider_model');/*default for sliders */
		$this->load->model('about_model');/*default for abouts data... */
		$this->load->model('sponsor_model');/*default for sponsors.. */
		$this->load->model('news_model');/*default for news.. */
		$this->load->model('management_model');/*default for management.. */
		$this->load->model('teams_model');/*default for management.. */
		$this->load->model('schedule_model');/*default for schedule.. */

		//$data = array(); 
		$this->home();

	}	

	public function home(){
		$data = array();

		/*...............*/
		$data['siteData'] = $this->site_model->getAllSiteData($data); //use for site data....
		$data['aboutData'] = $this->about_model->getAboutData($data); //use for site data....
		$data['sponsorData'] = $this->sponsor_model->getSponsorData($data); //use for site data....
		$data['newsData'] = $this->news_model->getNewsData($data); //use for site data....
		$data['managementData'] = $this->management_model->getManagementData($data); //use for site data....
		$data['teamsData'] = $this->teams_model->getTeamsData($data); //use for site data....
		$data['schedules'] = $this->schedule_model->getScheduleData($data); //use for site data....
		$data['results'] = $this->schedule_model->getResultData($data); //use for site data....
		/*...............*/

		$data['header'] = $this->load->view('include/header.php',$data, TRUE); //load header files..
		$data['content'] = $this->load->view('files/teams.php',$data, TRUE); // load home files...
		$data['schedule'] = $this->load->view('include/schedule.php',$data, TRUE); //load schedule files...
		$data['sponsor'] = $this->load->view('include/sponsor.php',$data, TRUE); // load sponsor files...
		$data['footer'] = $this->load->view('include/footer.php',$data, TRUE); // load footer files////
		
		$this->load->view('home', $data);
	}

}