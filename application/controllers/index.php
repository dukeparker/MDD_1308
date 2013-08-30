<?php

	class Index extends CI_Controller
	{
		public function __construct() {
			
			parent::__construct();

			session_start();

		} 
		
		public function index() {
		
			$data['title'] = "Topline Press";

			// Load the models
			$this->load->model('Api_model');
			$this->load->model('Like_model');			

			// Call the methods
			$data['articles'] = $this->Api_model->get_news();
			$data['like'] = $this->Like_model->get_likes();
			
			// Load the views
			$this->load->view('header', $data);
			$this->load->view('start', $data);			
			$this->load->view('footer', $data);
			
			//push story data into database
			$this->db->set('stories', $article_data);
		} 

	} // End of class
	
?>