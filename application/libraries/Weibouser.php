<?php

class Weibouser
{
	private $_oauth;
	private $_CI;

	function __construct() {
		// load saev2
		$this->_CI =& get_instance();
		$this->_CI->load->helper( 'saev2' );
		$this->_oauth = new SaeTOAuthV2( config_item( 'app_key' ), config_item( 'app_secret' ) );
	}

	/**
	 * authorize
	 * @return null
	 */
	public function authorize() {
		$authorize_url = $this->_oauth->getAuthorizeURL( base_url( config_item( 'authorize_redirect_uri' ) ) );
		header("location:{$authorize_url}");
		exit;
	}

	/**
	 * access_token
	 */
	public function access_token() {
		$code = $this->_CI->input->get('code');
		echo $code;
		if ( empty( $code ) ) return NULL;

		try {
			$token = $this->_oauth->getAccessToken( 'code', array(
				'code' => $code,
				'redirect_uri' => base_url( config_item( 'authorize_redirect_uri' ) ),
			) );

			// set session
			// "access_token": "ACCESS_TOKEN",
			// "expires_in": 1234,
			// "uid":"12341234"
			$token['auth_type'] = AUTH_WEIBO;
			return $token;

		} catch( Exception $e ) {
			return $e->getMessage();
		}
	}

	/**
	 * revoke
	 */
	public function revoke( $token ) {
		$result = $this->_oauth->post( $this->_oauth->revokeURL(), array(
			'access_token' => $token,
		) );
		return ( $result['result'] === 'true' );
	}
}