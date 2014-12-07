<?php

// This is the database connection configuration.
//return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	/*
	'connectionString' => 'mysql:host=localhost;dbname=testdrive',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	*/
//);

return array(
	'class'=>'system.db.CDbConnection',
	'connectionString'=>'mysql:host=127.0.0.1;dbname=db_habitrack',
	'schemaCachingDuration'=>600,
	'emulatePrepare'=>true,
	'autoConnect'=>false,
	'username'=>'root',
	'password'=>'root',
	'charset'=>'utf8',
	'tablePrefix'=>'t_'
);

