<?php
/**
*This ia a chass in model which has some function the control the database
*@name database.php
*@version 26/12/2016 1.0
*@author Zeling Wu && Lijun He
*@module the class Database is contained in CI_Model
*/

class Database extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	/*
	*This is a function to get all the Blogs from database
	*@param no parameter
	*@return array $blogs which is the information about the blogs 
	*/
	function getAllBlogs()
	{
		$blogs = array();
		if ($this->db->simple_query('SELECT ID,TAG,TEXT,IMAGE FROM articles'))
		{
			$query = $this->db->query('SELECT ID,TAG,TEXT,IMAGE FROM articles');
			foreach ($query->result() as $row)
			{
				array_push($blogs,array('ID'=>$row->ID,'TAG'=>$row->TAG,'TEXT'=>$row->TEXT,'IMAGE'=>$row->IMAGE));
			}
			//echo 'Total Results: ' . $query->num_rows();
		}
		else
		{
			echo "Query failed!";
		}
		return $blogs;
	}
	
	/*
	*This is a function to add  new Blog into database
	*@param array @newBlog which is an array contains string tag, string context, string image(the imagepath), bool imagepath(if exist the imagepath)
	*@return array
	*/
	public function addNewBlog($newBlog)
	{
		$query = $this->db->query('SELECT MAX(ID) AS max FROM articles');
		$insertID = $query->result()[0]->max+1;
		
		if ($newBlog['imagePath'])
		{
			$data = array(
        	'ID' => $insertID,
        	'TAG' => $newBlog['tag'],
       		'TEXT' => $newBlog['context'],
			'IMAGE' => $newBlog['image']
			);
		}
		else 
		{
			$data = array(
					'ID' => $insertID,
					'TAG' => $newBlog['tag'],
					'TEXT' => $newBlog['context']);
		}
		$this->db->insert('articles', $data);
		
		return array($this->db->affected_rows(),$insertID);
	}
	
	/*
	*This is a function to delete a Blog from database
	*@param array @BlogID 
	*@return array
	*/
	public function deleteBlog($BlogID)
	{
		$this->db->delete('articles', array('ID' => $BlogID));
		return $this->db->affected_rows();
	}
	
	/*
	*This is a function to close database
	*@param no parameter
	*@return no return
	*/
	function close()
	{
		$this->db->close();
	}
}