<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* This is the starting point of the whole project
* @author ZelingWu
* @version 26/12/2016  1.0
*/
class index extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	//In this function we load the index_view on the page
	function index() {
		$this->load->helper(array('html', 'url'));
		  
		$this->load->view('index_view');
	}
}