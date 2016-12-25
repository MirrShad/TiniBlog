<?php
class Database extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
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
	
	public function addNewBlog($newBlog)
	{
		$query = $this->db->query('SELECT MAX(ID) AS max FROM articles');
		$maxID = $query->result()[0]->max+1;
		
		$data = array(
        'ID' => $maxID,
        'TAG' => $newBlog['tag'],
        'TEXT' => $newBlog['context']
		);
		$this->db->insert('articles', $data);
	}
	
	function close()
	{
		$this->db->close();
	}
}