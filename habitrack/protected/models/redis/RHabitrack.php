<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RHabitrack extends CRedis
{
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name', 'required'),
			// rememberMe needs to be a boolean
			array('name', 'string'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function getHabitracks()
	{
		return array(
			'name'=>'Remember me next time',
			'records'=> array(
				'start_time'=>'20141201',
				'end_time'=>'20141210',
				),
		);
	}

}
