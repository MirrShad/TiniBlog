<?php
/**
*This ia a chass in model which contains some tools to modify date
*@name modifyDataTools.php
*@version 26/12/2016 1.0
*@author Lijun He && Zeling Wu && Zikai Zhou
*@module the class ModifyDataTools is contained in CI_Model
*/
class ModifyDataTools extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	/*
	*This is a function to show the Blog on content_view
	*@param array $blogs which contains string ID, string Tag, string TEXT, string IMAGE
	*@return string $blogsHTML which is HTML code present all blogs
	*/
	function showBlogOnContentPage($blogs)
	{
		$this->load->helper('html');
		
		$blogsHTML = '';
		foreach($blogs as $blog)
		{	
			/*judge the Tag*/
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
			$blogHTML = '<blockquote><p>';
			if($blog['IMAGE']!=null){
				$blogHTML = $blogHTML.'<a>';
				
				$image_properties = array(
					'src'   => 'images/'.$blog['IMAGE'],
					'class' => 'floatLeft',
				);
				$blogHTML=$blogHTML.img($image_properties);
								
				$blogHTML = $blogHTML.'</a>';
			}
			$blogHTML = $blogHTML.$blog['TEXT'];
			$blogHTML = $blogHTML.'<br><br><br><b class="highlight floatRight">'.$tempTag.'</b>';
			$blogHTML = $blogHTML.'<br></p></blockquote><br><br>';
			
			$blogsHTML=$blogsHTML.$blogHTML;
			
		}
		return $blogsHTML;
	}
	
	/*
	*This is a function to post the new Blog
	*@param string $tag which is the tag 
	*@param string $context which is the context text 
	*@param array $imgInfoArray which contains all the information of image which is an Array
	*@return array $newBlog which is an array contains string tag, string context, string image(the imagepath), bool imagepath(if exist the imagepath)
	*/
	function postNewBlog($tag,$context,$imgInfoArray)
	{
		if($imgInfoArray['file_size']==null)
		{
			/*the case there is no image*/
			$image = null;
			$imagePath = FALSE ;
			$newBlog = array('tag' => $tag,'context' => $context,'imagePath' =>$imagePath);
		}
		else {
			/*the case there is a image which has been uploaded*/
			$type = $imgInfoArray['file_ext'] ;
			$image = "database/" . $imgInfoArray['file_name'];
			$image = str_replace("$type","_thumb".$type,"$image");
			$imagePath = TRUE ;
			$newBlog = array('tag' => $tag,'context' => $context,'image' =>$image,'imagePath' =>$imagePath);
		}
		return $newBlog ;
	}
}