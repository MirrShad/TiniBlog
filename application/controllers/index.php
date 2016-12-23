<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
* 计算控制器，类名首字母必须大写，所有的控制器必须继承自CI_Controller类
*/
class index extends CI_Controller {
	// 构造方法
	function __construct() {
		parent::__construct();
	}// 默认方法
	
	function index() {
		$this->load->model('Database');
		
		$this->load->helper('html');
		$this->load->helper('url');
		//加载视图   
		$this->load->view('index_view');
	}
	
/*	function showIndex(){
		$this->load->helper('html');
		$this->load->helper('url');
		//加载视图
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