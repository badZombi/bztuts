<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends MY_Controller {

	public function index(){

		$this->load->model('comments_m');
		$comments = $this->comments_m->get_comments();
		echo "<pre>";
			print_r($comments);
		echo "</pre>";
	}

}

/* End of file comments.php */
/* Location: .//C/work/zombizu/app/controllers/comments.php */