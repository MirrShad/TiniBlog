<?php
/**
*This is an interface that control the database
*@name BlogChange.php
*@version 10/01/2017 1.0
*@author Zeling Wu
*@module the class BlogChange is contained in CI_Controller
*/
class BlogChange extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	public function deleteBlog($blogID)
	{
		$this->load->model('Database');
		$this->Database->deleteBlog($blogID);
		$this->load->model('ModifiedData');
		$data = $this->ModifiedData->getAllBlogsOnContentPage();
		$this->load->helper(array('html', 'url'));
		$this->load->view('content_view',$data);
	}
}