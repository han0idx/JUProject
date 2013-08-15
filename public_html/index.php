<?php

	require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

	require_once(LIBRARY_PATH . "/templateFunctions.php");
	require_once(LIBRARY_PATH . "/SQL.class.php");

	/*
		Now you can handle all your php logic outside of the template
		file which makes for very clean code!
	*/
	
	$mysql=new iSQL();
	$testList=$mysql->selectQuery('SELECT * FROM testlist');
	
	
	// Must pass in variables (as an array) to use in template
	$variables = array(
		'testList' => $testList,
	);
	
	renderLayoutWithContentFile("home.php", $variables);

?>