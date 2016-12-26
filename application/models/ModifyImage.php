<?php
/**
*This ia a chass in model which used to modify the input image
*@name modifyImage.php
*@version 26/12/2016 1.0
*@author Lijun He
*@module the class ModifyImage is contained in CI_Model
*/
class ModifyImage extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	/*
	*This is a function to thrum the image into needed size and delete the default image 
	*@param string $imagePath the path of the upplad image 
	*@return no return
	*/
	function thrumImage($imagePath)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = $imagePath;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 75;
		$config['height']       = 50;
			
		$this->load->library('image_lib', $config);
			
		$this->image_lib->resize();
		
		$this->load->helper("url");
		
		/*delete the default image*/
		unlink($imagePath); 
	}
}