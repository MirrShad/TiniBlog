<?php 
	
class Test extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index()
	{
		echo "test";
		$this->load->library('unit_test');
		
		//test Database.php
		$this->load->model('Database');
		$addResult = $this->Database->addNewBlog(array('tag' => 1,'context' => "test"));
		echo $this->unit->run(1, $addResult[0],'test Database.php addNewBlog');
		
		$this->load->model('Database');
		$deleteResult = $this->Database->deleteBlog($addResult[1]);
		echo $this->unit->run(1, $deleteResult,'test Database.php deleteBlog');
		
		$this->Database->close();
		
	}
}