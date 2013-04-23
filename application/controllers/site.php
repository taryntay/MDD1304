<?php

class Site extends CI_Controller {
	
	
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		
	}
	
       public function bookworm()  
        {  
			$this->load->helper('url');
			$this->loadApp();
        }  
        
        public function loadApp()
        {
        	$this->getBooks();
        }
        
        public function getBooks(){
		
			$this->load->model('bookworm_model');
		
			$data['results'] = $this->bookworm_model->getAll();
			
			$this->load->view('bookworm_view', $data);
		}
		
		public function details(){
		
			$this->load->model('bookworm_model');
		
			$data['results'] = $this->bookworm_model->getDetails();
		
			$this->load->view('details_view', $data);
		}
		
		public function add(){
		
			$this->load->model('bookworm_model');

		}

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo ('Not allowed. <a href="../login">Login</a>');
			die();
		}
	}
}


?>