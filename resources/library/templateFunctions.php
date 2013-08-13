<?php
	require_once(realpath(dirname(__FILE__) . "/../config.php"));

	function renderLayoutWithContentFile($contentFile, $variables = array())
	{
		$contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;
	
		// making sure passed in variables are in scope of the template
		// each key in the $variables array will become a variable
		if (count($variables) > 0) {
			foreach ($variables as $key => $value) {
				if (strlen($key) > 0) {
					${$key} = $value;
				}
			}
		}
	
		require_once(TEMPLATES_PATH . "/header.php");
	
		echo "<div id=\"container\">\n"
		   . "\t<div id=\"content\">\n";
	
		if (file_exists($contentFileFullPath)) {
			require_once($contentFileFullPath);
		} else {
			/*
				If the file isn't found the error can be handled in lots of ways.
				In this case we will just include an error template.
			*/
			require_once(TEMPLATES_PATH . "/error.php");
		}
	
		// close content div
		echo "\t</div>\n";
	
		require_once(TEMPLATES_PATH . "/rightPanel.php");
	
		// close container div
		echo "</div>\n";
	
		require_once(TEMPLATES_PATH . "/footer.php");
	}
	
	
	class iSQL {


	
	function connect() {
	$db = mysqli_connect('127.0.0.1','root','') or die("Database error"); 
	mysqli_select_db($db ,'testlist');
	}
	
	function selectQuery($q){
	
	$result = mysqli_query("set names 'utf8'"); 
	// $query = "select * from YOUR_DB_TABLE"; 
	$query = $q; 
	$result = mysqli_query($query);
	}
	
	function close(){
	$db = mysqli_connect('127.0.0.1','root','') or die("Database error"); 
	mysqli_close($db); 
	}


}
?>