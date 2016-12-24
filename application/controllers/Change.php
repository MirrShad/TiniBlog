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
	/*	$this->load->helper(array('html', 'url','form'));	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('tag', 'Tag', 'required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('context', 'Text', 'trim|required');
		
		$this->form_validation->run();
		$this->load->view('write_view');		
	*/
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