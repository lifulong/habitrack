<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RHabitrack extends CRedis
{
	public $host='127.0.0.1';
	public $port=6379;
	public $password=null;
	protected static $_models=array();


	public static function model($className=__CLASS__) {
		$model=null;
		if (isset(self::$_models[$className]))
			$model=self::$_models[$className];
		else {
			$model=self::$_models[$className]=new $className(null);
		}
	    return $model;
	}


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
		$records=array();
		$records[]=array("start_time"=>"20130101", "end_time"=>"20131010",);
		$records[]=array("start_time"=>"20140101", "end_time"=>"20141010",);

		$habitrack=array(
			'name'=>'my first habitrack.',
			'records'=> $records,
		);
		$habitracks[]=$habitrack;

		return $habitracks;
	}

}
