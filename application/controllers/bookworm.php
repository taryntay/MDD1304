<?php  
    class Bookworm extends CI_Controller{  
    
       function index()  
        {  

			$this->load->helper('url');
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
    }  
     
?>  