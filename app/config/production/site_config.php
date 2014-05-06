<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// add whatever custom vars we need for the project here

// basic settings
	$config['logo'] = '';
	$config['show_debug'] = FALSE;
	$config['template'] = 'default';
	$config['copyright_name'] = 'BadZombi';
	$config['title_suffix'] = ' | learn stuff...';
	$config['topnav_fixed'] = FALSE;
	$config['footer_fixed'] = FALSE;
	$config['send_emails'] = TRUE;

	$config['clearnet_address'] = 'tuts.badzombi.com';
	$config['tor_address'] = 'zombizu5ifykigb2.onion';

	$config['block_by_ip'] = FALSE; // site inactive or something. only allow people with password
	$config['add_ip_pass'] = 'password';

	$config['pagination_links'] = 5;
	$config['default_pp'] = 12; // default number of items per inventory page when none specified 


// cache settings
	// $config['cache_ratings'] = FALSE;

// social settings

	$config['fb_admin_array'] = '';
	$config['fb_app_id'] = '';
	$config['page_id'] = '';
	

// contact info

	$config['contact_email'] = 'tuts@badzombi.com';
	$config['company_name'] = 'BadZombi.com';
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
			'bootstrap.min.css',
		    'site.css',
		);

	$config['js'] = array(
			'site.js',
		);


// registrtion stuff:

	$config['min_username_length'] = 4;
	$config['max_username_length'] = 30;
	$config['bad_username_words'] = array(
			'admin', 
			'badzombi',
		);


