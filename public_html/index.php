<?php

	require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

	require_once(LIBRARY_PATH . "/templateFunctions.php");

	/*
		Now you can handle all your php logic outside of the template
		file which makes for very clean code!
	*/
	
	$testList = "
	<ul>
	<li><a href='./tests?test=1'>test1</a></li>
	<li><a href='./tests?test=2'>test2</a></li>
	<li><a href='./tests?test=3'>test3</a></li>
	<li><a href='./tests?test=4'>test4</a></li>
	<li><a href='./tests?test=5'>test5</a></li>
	<li><a href='./tests?test=6'>test6</a></li>
	<li><a href='./tests?test=1'>test1</a></li>
	<li><a href='./tests?test=2'>test2</a></li>
	<li><a href='./tests?test=3'>test3</a></li>
	<li><a href='./tests?test=4'>test4</a></li>
	<li><a href='./tests?test=5'>test5</a></li>
	<li><a href='./tests?test=6'>test6</a></li>
	<li><a href='./tests?test=1'>test1</a></li>
	<li><a href='./tests?test=2'>test2</a></li>
	<li><a href='./tests?test=3'>test3</a></li>
	<li><a href='./tests?test=4'>test4</a></li>
	<li><a href='./tests?test=5'>test5</a></li>
	<li><a href='./tests?test=6'>test6</a></li>
	</ul>
	";
	
	// Must pass in variables (as an array) to use in template
	$variables = array(
		'testList' => $testList,
	);
	
	renderLayoutWithContentFile("home.php", $variables);

?>