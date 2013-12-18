<?php
/**
 * Facebook OAuth2 Provider
 *
 * @package    CodeIgniter/OAuth2
 * @category   Provider
 * @author     Phil Sturgeon
 * @copyright  (c) 2012 HappyNinjas Ltd
 * @license    http://philsturgeon.co.uk/code/dbad-license
 */

//die('this is not complete... I just started and then got distracted...');
class OAuth2_Provider_Reddit extends OAuth2_Provider
{
	protected $scope = array('identity');

	public function url_authorize()
	{
		return 'https://ssl.reddit.com/api/v1/authorize';
	}

	public function url_access_token()
	{
		return 'https://ssl.reddit.com/api/v1/access_token';
	}

	public function get_user_info(OAuth2_Token_Access $token)
	{
		$url = 'https://oauth.reddit.com/api/v1/me.json';

		$opts = array(
			'http' => array(
				'method'  => 'GET',
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n".
							"Authorization: bearer  ".$token->access_token,
			)
		);

		//$_default_opts = stream_context_get_params(stream_context_get_default());
		$context = stream_context_create($opts);
		$user = json_decode( file_get_contents( $url, false, $context ) );
		
		return $user;
	}

	public function post(OAuth2_Token_Access $token, $post_data)
	{
		$url = 'https://oauth.reddit.com/api/submit';

		$opts = array(
			'http' => array(
				'method'  => 'GET',
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n".
							"Authorization: bearer  ".$token->access_token,
			)
		);

		//$_default_opts = stream_context_get_params(stream_context_get_default());
		$context = stream_context_create($opts);
		$ret = json_decode( file_get_contents( $url, false, $context ) );
		
		return $ret;
	}
}
