<?php

	class Pageup extends CI_Controller
	{
		public function __construct() {
			
			parent::__construct();

			session_start();

		} 
		
		public function index() {
		
			$data['title'] = "Topline Press";

			// Load the model
			$this->load->model('Api_model');

			// Call the method of the model
			$data['articles'] = $this->Api_model->get_news();
			$data['paginate'] = $this->Api_model->paginate_news();
			
			// Load the views
			$this->load->view('header', $data);
			$this->load->view('pageup', $data);			
			$this->load->view('footer', $data);
			
			
			
		} 

	} // End of class
	
?>