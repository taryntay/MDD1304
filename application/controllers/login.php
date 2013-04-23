<?php  
    class Login extends CI_Controller{  
    
       function index()  
        {  
        	$data['main_content'] = 'login_form';
        	$this->load->view('includes/template', $data);
        }  
        
        function validate_credentials()
        {
        	$this->load->model('user_model');
        	$query = $this->user_model->validate();
        	
        	if($query) //if users credentials are validated…
        	{
        		$data = array(
        			'username' => $this->input->post('username'),
        			'is_logged_in' => true
        		);
        		
        		$this->session->set_userdata($data);
        		
        		redirect('site/bookworm');
        	}
        	
        	else
        	{
        		$data['main_content'] = 'login_form';
        		$this->load->view('includes/template', $data);
        		echo('Username and/or password is incorrect. Please try again.');
        	}
        }
        
        function signup()
        {
        	$data['main_content'] = 'signup_form';
        	$this->load->view('includes/template', $data);
        }
        
        function create_user()
        {
        
			$this->load->library('form_validation');
			//field name, error message, validation rules.
			
			$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->signup();
			}
			else
			{
				$this->load->model('user_model');
				if($query = $this->user_model->create_user())
				{
					$data['main_content'] = 'signup_successful';
					$this->load->view('includes/template', $data);
				}
				else
				{
					$this->load->view('signup_form');
				}
			}
        	
        }

        
 	}  
     
?>