<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// add whatever custom vars we need for the project here

// basic settings
	$config['logo'] = '';
	$config['show_debug'] = FALSE;
	$config['template'] = 'cryptoconversion';
	$config['copyright_name'] = '';
	$config['title_suffix'] = ' | Crypto Currency Calculator';
	$config['topnav_fixed'] = FALSE;
	$config['footer_fixed'] = FALSE;
	$config['send_emails'] = TRUE;


	$config['block_by_ip'] = TRUE; // site inactive or something. only allow people with password
	$config['add_ip_pass'] = 'allthecoins';


// social settings

	$config['fb_admin_array'] = '';
	$config['fb_app_id'] = '';
	$config['page_id'] = '';
	

// contact info

	$config['contact_email'] = 'contact@cryptoconversion.com';
	$config['company_name'] = 'CryptoConversion.com';
	$config['address'] = '123 Some St. ';
	$config['city'] = 'City';
	$config['state'] = 'ST';
	$config['zip'] = '12345';
	$config['phone'] = '(123) 456.7890';
	$config['phone2_name'] = 'Toll Free';
	$config['phone2'] = '(123) 456.7890';
	$config['map_link'] = '';


// default assets lists

	$config['css'] = array(
		    'style.css',
		);

	$config['js'] = array(
			'site.js',
		);


// registrtion stuff:

	$config['min_username_length'] = 4;
	$config['max_username_length'] = 30;
	$config['bad_username_words'] = array(
			'admin', 
			'cryptoconversion',
		);


