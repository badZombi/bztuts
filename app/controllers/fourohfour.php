<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fourohfour extends MY_Controller {

	public function index(){

		$data = array(
		   'title' => 'Page not found',
		   'view' => 'my_errors/404',

		);		
		
		

		$this->template->load($data);
	}

	
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */