<?php 
/**
*This ia a chass in controller which used to change the view pages
*@name Change.php
*@version 26/12/2016 1.0
*@author Zeling Wu
*@module the class Change which is contained in CI_Controller
*/
class Change extends CI_Controller {
	// constructor
	function __construct() {
		parent::__construct();
	}//default method
	
	
	/*
	*This is a function to show the index information view(the first page of demo)
	*no parameters
	*return the index_view
	*/
	
	function showIndex(){
		$this->load->helper(array('html', 'url'));
		//load view
		$this->load->view('index_view');
	}
	
	/*
	*This is a function to show the content view(the second page of demo)
	*no parameters
	*return the contact_view
	*/
	function showContent()
	{
		$this->load->model('ModifiedData');
		$data = $this->ModifiedData->getAllBlogsOnContentPage();
		$this->load->helper(array('html', 'url'));
		$this->load->view('content_view',$data);
		
		//$this->Database->close();
	}
	
	
	/*
	*This is a function to show the write view(the third page of demo)
	*no parameters
	*return the write_view
	*/
	function showWrite()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('write_view',array('error' => ' ' ));
	}
	
	
	/*
	*This is a function to show the contact view(the forth page of demo)
	*no parameters
	*return the contact_view
	*/
	function showContact()
	{
		$this->load->helper(array('html', 'url'));
		$this->load->view('contact_view');
	}
}