<?php  
    class Bookworm extends CI_Controller{  
    
       public function index()  
        {  
        	$this->load->library('SimpleLoginSecure');
			$this->load->view('login');
			$this->load->helper('url');
			$this->load->model('bookworm_model');
			$data['results'] = $this->bookworm_model->getAll();
			
			
		
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
    }  
     
?>