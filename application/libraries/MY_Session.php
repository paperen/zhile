<?php

/**
 * 继承CI_Session，在其基础上加入了用户数据
 * @author 梁子恩
 * @version 0.0
 * @package njsystem
 * @subpackage application/core
 */
class MY_Session extends CI_Session
{

	/**
	 * 魔术方法
	 * @param string $name
	 * @return mixed
	 * uid
	 * email
	 * regtime
	 * lastlogin
	 * lastip
	 * status
	 */
	function __get( $name ) {
		return isset( $this->$name ) ? $this->$name : NULL;
	}

}

// end of Hook