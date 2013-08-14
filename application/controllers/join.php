<?php

	class Join extends CI_Controller
	{
		public function __construct() {
			
			parent::__construct();
			session_start();
			
		} // End of construct()
		
		public function index() {

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
			$this->form_validation->set_rules('password-confirm', 'Confirm Password', 'required|min_length[6]');
		
			if ( $this->form_validation->run() !== false ) {

				$this->load->model('User_model');

				$test = $this->User_model->checkUser(
					$this->input->post('email')
				);
				
				if ($test->num_rows == 0) {

					$insert = $this->User_model->addUser(
						$this->input->post('name'),
						$this->input->post('email'),
						$this->input->post('password')
					);
			        
			        if ($insert) {
			            
			            $_SESSION['email'] = $this->input->post('email');
						redirect('profile');

			        } else {

			            echo "User cannot be added.";

			        }

				} else {
					
					echo "User already exists.";

			    }
			}

			$data['title'] = "Topline Press - Join";
			$this->load->view('header', $data);
			$this->load->view('join', $data);
			$this->load->view('footer', $data);
		} 


		public function deleteUser() {
			
			$this->load->model('User_model');
			$this->User_model->deleteUser();
			session_destroy();
			redirect('index');

		}
	} 
	
?>