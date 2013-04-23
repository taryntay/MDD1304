<?
class User_model extends CI_Model{

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		
		if($query->num_rows == 1)
		{
			return true;
		}
	}
	
	function create_user()
	{
		$new_user_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password'))
		);
		
		$insert = $this->db->insert('users', $new_user_insert_data);
		return $insert;
		
	}

}


?>