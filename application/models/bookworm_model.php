<?php  
	class Bookworm_model extends CI_Model {  
  
   		function getAll() //query the DB to get all the rows.
    	{
			$query = $this->db->query("SELECT * FROM books ORDER by title");
			return $query->result(); //pass results book to the controller.
		}
		
		function addBook($data) //add a book.
		{
			$this->db->insert('books', $data); //insert the new data into the books table.
			return; //return new book to controller.
		}
	
		function updateBook($data) //update a book.
		{
			$this->db->where('bookId', $this->uri->segment(3)); //update where the bookId = the uri segment #3.
			$this->db->update('books', $data); //update with the data from the edit function in the site controller.
			return; //return the newly updated book.
		}
	
		function deleteBook() //delete a book.
		{
			$this->db->where('bookId', $this->uri->segment(3)); //where the bookid = the uri segment #3.
			$this->db->delete('books'); //delete from the DB.
		}
  
  		function getDetails() //get the book details.
  		{
			$bookId = $this->uri->segment(3); //set bookID equal to the uri segment that is built.
		
			$query = $this->db->query("SELECT * FROM books WHERE (bookId = $bookId)");
			//query the DB for all the info for that bookID.
			return $query->result(); //return the results to the controller.
		}
	}//class 
?>