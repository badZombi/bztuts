<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graphics extends MY_Controller {

	function index(){
		die('nope');
	}

	function qrcode(){

		$address = $this->input->get('address');
		$amount = $this->input->get('amount');
		$label = $this->input->get('label');

		$this->load->library('ciqrcode');

		header("Content-Type: image/png");

		$params['data'] = 'bitcoin:'.$address.'?amount='.$amount.'&label='.$label;

		$params['level'] = 'L';
		$params['size'] = 5;

		$this->ciqrcode->generate($params);
		
		$this->load->library('ciqrcode');
		
		
	}

}

/* End of file qr.php */
/* Location: ./application/controllers/qr.php */