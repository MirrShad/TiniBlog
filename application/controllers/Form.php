<?php
/**
*This ia a chass in controller which used to judge the validation of the inputs in write_view
*and modify the input data
*@name Form.php
*@version 26/12/2016 1.0
*@author Lijun He
*@module the class Form is contained in CI_Controller
*/
class Form extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
     /*
	*This is a function to judge the validation of the inputs 
	*@param no parameters
	*@return if there are errors it wil return the errors view
	*@return if all the inputs are valid, then it will insert information into database
	*/  
	public function writeValidation()
	{
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		
		/* justify the validation of tag and contex */
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
			
		/*judge the validation of image */
		$config['upload_path']          = './images/database/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$this->load->model('ModifyImage');
		if(($form_fail!=FALSE)||(! $this->upload->do_upload('userfile')))//the case form is valid but file upload failed
		{
			/*the case form is valid but file upload failed*/
			$file_fail=TRUE;
			if($this->upload->data('file_size')==null)
			{
				/*the case form is valid and no file is uploaded which is valid */
				$file_fail=FALSE;
			}
		}
		else
		{
			/*the case form is valid and file is uploaded successfully */
			$file_fail=FALSE;
			
			/*call the function thrumImage in class ModifyImage to thrum the input image into needed size*/
			$this->ModifyImage->thrumImage($this->upload->data('full_path'));
		}
			
			
		/*change to another view or stay to collect errors*/
		if($form_fail||$file_fail)
		{
			/*the case there are errors */
			$error = array('error' => ' ' );
			if($this->upload->data('file_size')!=null)
			{
				$error = array('error' => $this->upload->display_errors());
			}
			
			/*load the error_view */
			$this->load->view('write_view', $error);
		}
		else
		{
			/*no error then insert the data into database */
			
			$this->load->model('ModifyDataTools');
			$newBlog = $this->ModifyDataTools->postNewBlog($this->input->post('tag'),$this->input->post('context'),$this->upload->data());
			//insert another blog to the database/
			$this->load->model('Database');
			$this->Database->addNewBlog($newBlog);
			//change to content_view
			$this->load->helper(array('html', 'url'));
			$this->load->model('ModifiedData');
			$data = $this->ModifiedData->getAllBlogsOnContentPage();
			$this->load->view('content_view',$data);
		}
	}
		
}