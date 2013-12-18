<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donate extends MY_Controller {

	public function index(){
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('display_name', 'Display Name', 'trim|max_length[25]');
		$this->form_validation->set_rules('comment', 'Comment', 'trim|max_length[250]');
		$this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');

		if ($this->form_validation->run() == true){
			$ins = array();

			if($this->input->post('display_name')){
				$ins['display_name'] = $this->input->post('display_name');
			} else {
				$ins['display_name'] = 'Anonymous';
			}

			if($this->input->post('comment')){
				$ins['comment'] = $this->input->post('comment');
				$ins['txnid'] = md5(time().$this->input->post('comment'));
			} else {
				$ins['comment'] = NULL;
				$ins['txnid'] = md5(time());
			}

			$url = 'https://blockchain.info/api/receive?method=create&address=18WuzkmxsJZFSrPDRvVtTydVwhmxLSVdhu&callback=http%3A%2F%2Ftuts.badzombi.com%2Fdonate%2Fcallback%3Ftxnid='.$ins['txnid'];
			$res = @file_get_contents($url);
			$res = json_decode($res);

			if($res){
				$ins['input_address'] = $res->input_address;
				$this->db->insert('donations', $ins);
				redirect('donate/thank_you/'.$ins['txnid']);
			} else {
				die('Oh oh. Something went wrong. We couldnt generate a new donation address. Please refresh to try again. Your comment will be resubmitted.');
			}
			

		} else {

			$data = array(
			   'title' => 'Make a donation...',
			   'view' => 'donate/comment_form'
			);
			
			$this->template->load($data);
		}

		//echo file_get_contents('http://ip-check.info/?lang=en');
	}

	function callback(){

		if($this->input->get('confirmations') >= 3){
			$q = $this->db->where('txnid', $this->input->get('txnid'))
							->get('donations');

			if($q->num_rows() >= 1){
				$txn = $q->result();
				$txn = $txn[0];
				$upd = array(
					'test' => $this->input->get('test'),
					'confirmations' => $this->input->get('confirmations'),
					'value' => $this->input->get('value'),
					'input_address' => $this->input->get('input_address'),
					'input_transaction_hash' => $this->input->get('input_transaction_hash'),
					'transaction_hash' => $this->input->get('transaction_hash'),
				);

				$this->db->where('id', $txn->id)->update('donations', $upd);
				die('*ok*');
			}
		}
		//do stuff here
	}

	function thank_you($txnid){
		$q = $this->db->where('txnid', $txnid)->get('donations');

		if($q->num_rows() == 1){
			$res = $q->result();
			$res = $res[0];
			
			echo "Please send your donation to: <b><a href='bitcoin:".$res->input_address."?amount=0.5&label=BadZombiDonation'>".$res->input_address."</a></b>";
		} else {
			die('Oh oh. Something went wrong. We couldnt generate a new donation address. Please refresh or go back and start over to try again.');
		}
	}

}
