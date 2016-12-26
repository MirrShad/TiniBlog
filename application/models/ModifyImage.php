<?php
class ModifyImage extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
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
		
		unlink($imagePath); 
	}
}