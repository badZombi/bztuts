<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function index(){

		
		$data = array(
		   'title' => 'BadZombi Tutorials...',
		   'view' => 'welcome_message'
		   
		);	

		$this->template->load($data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */