<?php 
	// Include PHP Easy Template.
	require_once('php-easy-template.php');

	// Insert the folder containing the templates [in this case, the folder "templates"].
	define('TEMPLATES_PATH', 'templates');

	// Insert the file name/location inside the folder containing the templates.
	$template = new Template(TEMPLATES_PATH.'/hello-world.html');

	// Do all the calculations and processaments to your variables...
	$helloWorld = "Hello, world!";
	$simpleText = "I am now using PHP Easy Template ;)";

	// Assign to the html file variable those variables you treated.
	$template->assign('header',    $helloWorld);
	$template->assign('paragraph', $simpleText);
	
	// Finally show the page to the user!
	$template->show();

 ?>