<?php
class ModifyDataTools extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function showBlogOnContentPage($blogs)
	{
		$this->load->helper('html');
		
		$blogsHTML = '';
		foreach($blogs as $blog)
		{	
			if($blog['TAG']==1)
			{
				$tempTag='Life';
			}
			else if($blog['TAG']==2)
			{
				$tempTag='Coding';
			}
			else if($blog['TAG']==3)
			{
				$tempTag='Else';
			}
			$blogHTML = '<h2>';
			$blogHTML = $blogHTML.$tempTag;
			$blogHTML = $blogHTML.'</h2>';
			$blogHTML = $blogHTML.'<blockquote><p>';
			if($blog['IMAGE']!=null){
				$blogHTML = $blogHTML.'<a>';
				
				$image_properties = array(
					'src'   => 'images/'.$blog['IMAGE'],
					'class' => 'floatLeft',
					'width' => '110',
					'height'=> '80',
				);
				$blogHTML=$blogHTML.img($image_properties);
				
				
				$blogHTML = $blogHTML.'</a>';
			}
			$blogHTML = $blogHTML.$blog['TEXT'];
			$blogHTML = $blogHTML.'</p></blockquote>';
			
			$blogsHTML=$blogsHTML.$blogHTML;
			
		}
		return $blogsHTML;
	}
}