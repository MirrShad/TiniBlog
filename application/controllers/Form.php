<?php

class Form extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
        public function index()
        {
        }

		public function writeValidation()
		{
			$this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
			
			$this->form_validation->set_rules('tag', 'Tag', 'required');
			$this->form_validation->set_rules('context', 'Text', 'trim|required');
			
			$file_fail=TRUE;
			$file_fail=TRUE;
			if ($this->form_validation->run() == FALSE)
            {
				$form_fail=TRUE;
            }
            else
            {
				$form_fail=FALSE;
				
            }
			
			//image validation
			$config['upload_path']          = './images/database/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->load->model('ModifyImage');
			if(($form_fail!=FALSE)||(! $this->upload->do_upload('userfile')))
			{
				$file_fail=TRUE;
				if($this->upload->data('file_size')==null)
				{
					$file_fail=FALSE;
				}
			}
			else
			{
				$file_fail=FALSE;
				$this->ModifyImage->thrumImage($this->upload->data('full_path'));
			}
			
			
			//change to another view or stay to collect errors
			if($form_fail||$file_fail)
			{
				$error = array('error' => ' ' );
				if($this->upload->data('file_size')!=null)
				{
					$error = array('error' => $this->upload->display_errors());
				}
				$this->load->view('write_view', $error);
			}
			else
			{
				$this->load->model('ModifyDataTools');
				$newBlog = $this->ModifyDataTools->postNewBlog($this->input->post('tag'),$this->input->post('context'),$this->upload->data());
				//insert another blog to the database/
				$this->load->model('Database');
				$this->Database->addNewBlog($newBlog);
				//change to another view
				$this->load->helper(array('html', 'url'));
				$this->load->model('ModifiedData');
				$data = $this->ModifiedData->getAllBlogsOnContentPage();
				$this->load->view('content_view',$data);
			}
		}
		
}