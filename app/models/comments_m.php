<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_m extends CI_Model {

	function get_comments(){
		$q = $this->db->where('comment !=', 'NULL')
						->order_by('value', 'desc')
						->order_by('id')
						->get('donations');

		if($q->num_rows() >= 1){
			$comments = array();
			foreach($q->result() as $comment){
				$comments[] = $comment;
			}
			return $comments;
		} else {
			die('no comments yet...');
		}
	}

}

/* End of file comments_m.php */
/* Location: ./application/models/comments_m.php */