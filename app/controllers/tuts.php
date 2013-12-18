<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tuts extends MY_Controller {

	function index(){
		redirect('/');
	}

	function beginner_tor_vm_setup($page = FALSE){

		$parts = array(
			'disclaimer' => array(
				'file' => 'disclaimer',
				'title' => 'Some things you need to know before completing this tutorial'
			),
			'1' => array(
				'file' => 'part1',
				'title' => 'Set up an account with DigitalOcean and claim your free credits'
			),
			'2' => array(
				'file' => 'part2',
				'title' => 'Install PuTTY & generate a new keypair'
			),
			'3' => array(
				'file' => 'part3',
				'title' => 'Create your first droplet'
			),
			'4' => array(
				'file' => 'part4',
				'title' => 'Log in to your droplet'
			),
			'5' => array(
				'file' => 'part5',
				'title' => 'Update, upgrade... save a quick snapshot'
			),
			'6' => array(
				'file' => 'part6',
				'title' => 'Installing Tor'
			),
			'7' => array(
				'file' => 'part7',
				'title' => 'Configuring Tor'
			),
			'8' => array(
				'file' => 'part8',
				'title' => 'Install and configure an http server'
			),
			'9' => array(
				'file' => 'part9',
				'title' => 'Wrapping up...'
			),
		);


		
		$data = array(
		   'title' => 'BadZombi Tutorials...',
		   'tut' => 'beginner_tor_1',
		   'parts' => $parts,
		   'feedback_link' => FALSE
		);	

		if($page != 'index' && $page == TRUE && isset($parts[$page]['file'])){
			$data['view'] = 'tuts/'.$data['tut'].'/'.$parts[$page]['file'];

			$data['prev'] = $this->findprev($page, $parts);
			$data['next'] = $this->findnext($page, $parts);

		} else {
			$data['view'] = 'tuts/'.$data['tut'].'/index';
		}

		
		$this->template->load($data);
	}

	function findnext($page, $parts){

		reset($parts);
		$savenext = FALSE;

		foreach($parts as $key => $value){
			
			if($savenext == TRUE){
				if($key){
					return strtolower($key);
				} else {
					return FALSE;
				}
				
			} 

			if($key == $page){
				$savenext = TRUE;
			} else {
				$savenext = FALSE;
			}

		}

		return FALSE;
	}

	function findprev($page, $parts){
		reset($parts);
		foreach($parts as $key => $value){
			
			if(!isset($last) || $page != $key){
				$last = strtolower($key);
			} else {
				return $last;
			}
		}

		return FALSE;
	}

}

/* End of file tuts.php */
/* Location: ./application/controllers/tuts.php */