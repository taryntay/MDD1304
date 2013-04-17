<?php  
class Bookworm_model extends CI_Model {  
  

     	function getAll(){
		
		$query = $this->db->query("SELECT * FROM books ORDER by title");
		return $query->result();
	}
  
  	function getDetails(){
		
		$bookId = $this->uri->segment(3);
		
		$query = $this->db->query("SELECT * FROM books WHERE (bookId = $bookId)");
		return $query->result();
	}
}  
?>  