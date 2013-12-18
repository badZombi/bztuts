<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbtest extends CI_Controller {

	public function index(){

		$query = $this->db->get('test');
		
		foreach ($query->result() as $row){
		    echo $row->name . '<br/>';
		}
	}

}

/* End of file db 2.php */
/* Location: .//C/Users/John/AppData/Local/Temp/fz3temp-1/db 2.php */