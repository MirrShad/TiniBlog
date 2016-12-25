<?php 

class Change extends CI_Controller {
	// constructor
	function __construct() {
		parent::__construct();
	}//default method
	
	public function index()
    {
        
    }
	
	function showIndex(){
		$this->load->helper(array('html', 'url'));
		//¼ÓÔØÊÓÍ¼
		$this->load->view('index_view');
	}
	
	function showContent()
	{
		$this->load->model('ModifiedData');
		$data = $this->ModifiedData->getAllBlogsOnContentPage();
		$this->load->helper(array('html', 'url'));
		$this->load->view('content_view',$data);
		
		//$this->Database->close();
	}
	
	function showWrite()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('write_view',array('error' => ' ' ));
	}
	
	function showContact()
	{
		$this->load->helper(array('html', 'url'));
		$this->load->view('contact_view');
	}
}