<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('nav_li')){

	function nav_li($link, $name, $check, $class = FALSE){

		$CI =& get_instance();

		//echo 'seg: '.$CI->uri->segment(1).' | check: '.$check;
		
		//echo "<script>alert('".$CI->uri->segment(1)."')</script>";
		$ret = "<li class='".($CI->uri->segment(1) == $check ? 'active' : '').$class." '>";
        $ret .= anchor($link, $name);
        $ret .= "</li>";

		return $ret;
	}

	function nav_li_dd($link, $name, $check){

		$CI =& get_instance();

		//echo 'seg: '.$CI->uri->segment(1).' | check: '.$check;
		
		//echo "<script>alert('".$name."')</script>";
		if($CI->uri->uri_string() == $check){
			$name = '<i class="icon-caret-left"></i> '.$name;
		}
		$ret = "<li ".($CI->uri->uri_string() == $check ? 'class="disabled"' : '').">";
        $ret .= anchor($link, $name);
        $ret .= "</li>";

		return $ret;
	}

}

