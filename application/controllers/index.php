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
		$this->load->helper(array('html', 'url'));
		//������ͼ   
		$this->load->view('index_view');
	}
}