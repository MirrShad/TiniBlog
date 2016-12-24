<?php
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