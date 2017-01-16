<?php 
/**
*This ia a chass in controller which used to do the unit_test
*@name Test.php
*@version 26/12/2016 1.0
*@author Zeling Wu
*@module the class Test contained in CI_Controller
*/
class Test extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	
    /*this is a function to do unit_test
	*no parameter
	*no return
	*/
	function index()
	{
		echo "test";
		$this->load->library('unit_test');
		
		//test Database.php
		/*test add new Blog into database*/
		$this->load->model('Database');//connect database
		$addResult = $this->Database->addNewBlog(array('tag' => 1,'context' => "test",'imagePath'=>FALSE));
		echo $this->unit->run($addResult[0], 1,'test Database.php addNewBlog');
		
		/*text delete a Blog*/
		$this->load->model('Database');//connect database
		$deleteResult = $this->Database->deleteBlog($addResult[1]);
		echo $this->unit->run($deleteResult, 1,'test Database.php deleteBlog');
		
		/*close database*/
		$this->Database->close();
		
	}
}