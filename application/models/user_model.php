<?php

class User_model extends MY_model
{

	protected $_pk = 'uid';
	protected $_fields = array(
		'uid' => '',
		'email' => '',
		'password' => '',
		'regtime' => '',
		'lastlogin' => '',
		'lastip' => '',
		'status' => '',
		'salt' => '',
	);
	protected $_table_name = 'user';

	public function get_by_email( $email ) {
		return $this->db->from( $this->_table_name() )->where( 'email', $email )->get()->row_array();
	}

}