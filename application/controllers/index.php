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
		$this->load->helper(array('html', 'url'));
		//加载视图   
		$this->load->view('index_view');
	}
}