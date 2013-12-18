<?php


class MY_Controller extends CI_Controller {

    function __construct(){
        parent::__construct();

         if($this->config->item('block_by_ip') == TRUE){
            $this->load->model('ipblock');

            if($this->ipblock->check_ip() == FALSE){
                redirect('ip_block');
            } 
        }

        foreach($this->config->item('css') as $css){
            $this->carabiner->css( $css );
        }

        foreach($this->config->item('js') as $js){
            $this->carabiner->js( $js );
        }
        

    }


}
