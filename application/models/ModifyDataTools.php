<?php
class ModifyDataTools extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function showBlogOnContentPage($blogs)
	{
		$blogsHTML = array();
		foreach($blogs as $blog)
		{
			$blogHTML = '<h2>';
			$blogHTML = $blogHTML.$blog['TAG'];
			$blogHTML = $blogHTML.'</h2>';
			$blogHTML = $blogHTML.'<blockquote><p>';
			$blogHTML = $blogHTML.$blog['TEXT'];
			$blogHTML = $blogHTML.'</p></blockquote>';
			
			array_push($blogsHTML,$blogHTML);
		}
	}
}