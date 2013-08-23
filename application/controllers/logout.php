<?php

	class Logout extends CI_Controller
	{
		public function __construct() {
			
			parent::__construct();

				session_start();
				session_unset();
				session_destroy();
								
		}

		public function index() {
		
			$data['title'] = "Topline Press";

			// Load the model
			$this->load->model('Api_model');

			// Call the method of the model
			$data['articles'] = $this->Api_model->get_news();
			$data['paginate'] = $this->Api_model->paginate_news();
			
			// Load the view
			$this->load->view('header', $data);
			$this->load->view('start', $data);			
			$this->load->view('footer', $data);
						
		} 

				
	} 

?>