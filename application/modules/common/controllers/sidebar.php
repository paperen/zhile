<?php

/**
 * 公共模块——边栏
 * @package application
 * @subpackage application/modules/common/controllers
 * @author
 */
class Common_Sidebar_Module extends CI_Module
{

	public function index() {
		$uid = $this->session->userdata('uid');
		$data = array(
			'uid' => $this->session->userdata('uid'),
		);
		if ( $uid ) {
			echo $uid;
			$user_weibo_info = $this->session->userdata('weibo');
			$data['profile_image_url'] = $user_weibo_info['profile_image_url'];
			$data['screen_name'] = $user_weibo_info['screen_name'];
			$data['weibo_url'] = $user_weibo_info['url'];
		}
		$this->load->view( 'sidebar', $data );
	}

}
