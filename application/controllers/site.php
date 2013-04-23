<?php

	class Site extends CI_Controller {
	
		function __construct() 
		{
			parent::__construct();
			$this->is_logged_in(); //check to make sure user is logged in before loading app.
		}
	
		function is_logged_in()
		{
			$is_logged_in = $this->session->userdata('is_logged_in');
		
			if(!isset($is_logged_in) || $is_logged_in != true) //validate that user is logged in
			{
				echo ('Not allowed. <a href="../login">Login</a>'); 
				//if user is not logged in, show error message and login link.
				die();
			}
		}
    
    	function bookworm()  
   		{  
			$this->load->helper('url'); //load url helper.
			$this->getBooks(); //load application and listin page.
    	}  
        
    	public function getBooks()
    	{
			$this->load->model('bookworm_model'); //load model to retrieve books from DB.
		
			$data['results'] = $this->bookworm_model->getAll();
			
			//$this->load->view('bookworm_view', $data); //pass the data to the bookworm view.
			
			$data['main_content'] = 'bookworm_view'; //dynamically generates the view.
        	$this->load->view('includes/template', $data);
		}
		
		public function details() //to retrieve book details for details page.
		{
		
			$this->load->model('bookworm_model'); //load model, run getDetails function.
		
			$data['results'] = $this->bookworm_model->getDetails();
		
			//$this->load->view('details_view', $data); //pass data into details view.
			$data['main_content'] = 'details_view'; //dynamically generates the view.
        	$this->load->view('includes/template', $data);
		}
		
		public function create() //Create a book. Loads respective view.
		{
			$data['main_content'] = 'create_view'; //dynamically generates the view.
        	$this->load->view('includes/template', $data);
		}
	
		public function add() //Adds a new book to the DB.
		{
			$data = array(
				'title' => $this->input->post('title'),
				'author' => $this->input->post('author')
			);
			//takes info from the input forms on the create view.
		
			$this->load->model('bookworm_model');
			$this->bookworm_model->addBook($data); 
			//runs the info through the addBook function to insert into the DB.
		
			$this->bookworm(); //load the homepage.
		}
	
		public function delete() //deletes books from the DB.
		{
			$this->load->model('bookworm_model'); //load the model
			$this->bookworm_model->deleteBook(); //run delete book function.
			$this->bookworm(); //load the home page which will show the newly updated list.
		}
	
		public function update() //updates specific book.
		{
			$this->load->model('bookworm_model'); //load the model.
		
			$data['results'] = $this->bookworm_model->getDetails(); //grab the data from the table.
		
			//$this->load->view('update_view', $data); //pass the data into the update view.
			$data['main_content'] = 'update_view'; //dynamically generates the view.
        	$this->load->view('includes/template', $data);
		}
		
		public function edit() //edit the book (continuation of update).
		{
		
			$data = array(
				'title' => $this->input->post('title'),
				'author' => $this->input->post('author')
			);
			//takes the data from the inputs on the update view.
			
			$this->load->model('bookworm_model');
			$this->bookworm_model->updateBook($data); //pass the data to the update book function to edit the DB.
		
			$this->bookworm(); //load the homepage with newly updated book.
		}
	}//class
?>