<?php
/**
*This ia a chass in model which used to get all Blogs from database and use function to show them in content_view
*@name ModifiedData.php
*@version 26/12/2016 1.0
*@author Zeling Wu
*@module the class ModifiedData is contained in CI_Model
*/
class ModifiedData extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	
	public function getAllBlogsOnContentPage()
	{
		$this->load->model('Database');
		$this->load->model('ModifyDataTools');
		$blogs = $this->Database->getAllBlogs();
		$blogsHTML = $this->ModifyDataTools->showBlogOnContentPage($blogs);
		$data=array('blogs'=>$blogsHTML);
		return $data;
	}
}