<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
* �������������������ĸ�����д�����еĿ���������̳���CI_Controller��
*/
class index extends CI_Controller {
	// ���췽��
	function __construct() {
		parent::__construct();
	}// Ĭ�Ϸ���
	
	function index() {
		$this->load->model('Database');
		
		$this->load->helper('html');
		$this->load->helper('url');
		//������ͼ   
		$this->load->view('index_view');
	}
	
/*	function showIndex(){
		$this->load->helper('html');
		$this->load->helper('url');
		//������ͼ
		$this->load->view('index_view');
		echo "test";
	}
	
	function showContent()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		//$this->load->model('template_model');
		//$htmlLocation= $this->template_model->show($id);
		//$this->load->view($htmlLocation.'/index');
		$view_data = array('content_view'=>'content_view'); 
		$this->load->view('content_view',$view_data);
	}
	*/
}/* End of file calculate.php */
/* Location: ./application/controllers/calculate.php */