<?php

	require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

	require_once(LIBRARY_PATH . "/templateFunctions.php");
	require_once(LIBRARY_PATH . "/SQL.class.php");

	/*
		Now you can handle all your php logic outside of the template
		file which makes for very clean code!
	*/
	$fullList=null;
	$mysql=new iSQL();
	$testList=$mysql->selectList('SELECT * FROM testlist');
        if(isset($_GET['test'])) $fullList=$mysql->selectFullList('select * from fullsteps WHERE parentID='.$_GET['test'].' ORDER BY testNumber ASC;') OR DIE ("GET is not set");
	
	// Must pass in variables (as an array) to use in template
	$variables = array(
		'testList' => $testList,
                'fullList' => $fullList,
	);
	
	renderLayoutWithContentFile("home.php", $variables);

?>