<?php

	class Profile extends CI_Controller
	{
		public function __construct() {
			
			parent::__construct();

			session_start();

			if (!isset($_SESSION['email'])) {
				redirect('auth');
			}

		}
		

		public function index() {
			$data['title'] = "Topline Press - Profile";
			$this->load->view('header', $data);
			$this->load->model('Profile_model'); 
			$data['userInfo'] = $this->Profile_model->getUserInfo($_SESSION['email']);
			$this->load->view('profile', $data);
			$this->load->view('footer', $data);
		} 
		
	} 

?>