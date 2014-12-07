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
	'class'=>'Mongo',
	'connectionString'=>'mongodb://127.0.0.1:27017',
	'dbName'=>'driver',
	'fsyncFlag'=>false,
	'safeFlag'=>true,
	'upsertFlag'=>true
);
