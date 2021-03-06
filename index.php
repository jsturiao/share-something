<?php

	// Start Session
	session_start();

	// Include Config
	require('config.php');

	if (DEBUG) {
		ini_set('display_errors', '1');
		error_reporting(E_ALL);
	}

	require('classes/Messages.php');
	require('classes/Bootstrap.php');
	require('classes/Controller.php');
	require('classes/Model.php');

	require('controllers/home.php');
	require('controllers/shares.php');
	require('controllers/users.php');

	require('models/home.php');
	require('models/share.php');
	require('models/user.php');

	$bootstrap = new Bootstrap($_GET);

	$controller = $bootstrap->createController();

	if($controller){
	  $controller->executeAction();
	}