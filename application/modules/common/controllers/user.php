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
	 * 获取提交数据
	 * @param boolean $is_login 是否是登陆
	 * @return array
	 */
	private function _get_post_data( $is_login = TRUE ) {
		return array(
			'email' => $this->input->post( 'email' ),
			'password' => $this->input->post( 'password' ),
		);
	}

	/**
	 * 验证
	 * @param boolean $is_login 是否是登陆
	 */
	private function _validation( $is_login = TRUE ) {
		$this->form_validation->set_rules( 'email', '邮箱', 'required|valid_email' );
		$this->form_validation->set_rules( 'password', '密码', 'required' );
		return $this->form_validation->run();
	}

	/**
	 * login
	 */
	public function login() {
		$data = array( );

		if ( $this->form_validation->check_token() ) {
			// 提交处理
			$post_data = $this->_get_post_data();
			try {
				if ( !$this->_validation() ) throw new Exception( validation_errors(), 0 );
				$this->load->model( 'User_model', 'user' );
			} catch ( Exception $e ) {
				init_messagebox( $e->getMessage(), 'error', $e->getCode() );
			}
		}

		$this->load->view( 'login', $data );
	}

	/**
	 * 登陆表单
	 */
	public function login_form() {
		$data = array( );
		$this->load->view( 'login_form', $data );
	}

	/**
	 * logout
	 */
	public function logout() {

	}

}