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
		//������ͼ
		$this->load->view('index_view');
	}
	
	function showContent()
	{
		$this->load->model('Database');
		$this->load->model('ModifyDataTools');
		$blogs = $this->Database->getAllBlogs();
		$blogsHTML = $this->ModifyDataTools->showBlogOnContentPage($blogs);
		$data=array('blogs'=>$blogsHTML);
		
		$this->load->helper(array('html', 'url'));
		$this->load->view('content_view',$data);
		
		$this->Database->close();
	}
	
	function showWrite()
	{
		$this->load->helper(array('html', 'url','form'));	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('tag', 'Tag', 'required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('context', 'Text', 'trim|required');
		
		$this->form_validation->run();
		$this->load->view('write_view');		
	}
}