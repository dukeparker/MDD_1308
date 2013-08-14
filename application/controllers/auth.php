<?php

	class Auth extends CI_Controller
	{
		public function __construct() {
			
			parent::__construct();
			session_start();

		} // Close construct()
		
		public function index() {
		
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
			
			if ( $this->form_validation->run() !== false ) {

				$this->load->model('Auth_model');
				$data['userinfo'] = $this->Auth_model->get_UserByEmailPass($this->input->post('email'), $this->input->post('password'));
				
				if ($data['userinfo'] !== false) {
					$_SESSION['email'] = $this->input->post('email');
					redirect('index');
				} 
			} 
						
			$data['title'] = "Topline Press - Sign In";
			$this->load->view('header', $data);
			$this->load->view('auth-form', $data);
			$this->load->view('footer', $data);
			
		}

		
		public function logout() {
			
			session_destroy();
			redirect('index');
		} 		
	}

?>