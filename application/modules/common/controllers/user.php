<?php

/**
 * 公共模块
 * @package application
 * @subpackage application/modules/common/controllers
 * @author
 */
class Common_User_Module extends CI_Module
{
	/**
	 * login
	 */
	public function login() {
		$data = array();
		$this->load->view( 'login', $data );
	}

	/**
	 * logout
	 */
	public function logout() {

	}
}