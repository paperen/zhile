<?php

/**
 * weather模块
 * @version {version}
 * @package application
 * @subpackage application/modules/weather/controllers
 * @author {author}
 */
class Weather_Main_Module extends MY_Module
{

	/**
	 *
	 */
	public function index() {
		$data = array( );
		$this->load->layout( 'custom', $data );
	}

}