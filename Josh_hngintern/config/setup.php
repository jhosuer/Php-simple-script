<?php
//SETUP PHP:

#Database Connection Here:
//mysqli_connect('host', 'username', 'password', 'database');
$dbc = mysqli_connect('localhost', 'root', '', 'atomcms') OR die('caused by: '.mysqli_connect_error());

#Constants:
// DEFINE($name, $value, $case_insensitive);
DEFINE('D_TEMPLATE', 'template');

#Functions:
include('functions/data.php');
include('functions/template.php');

 $site_title = "HNG_Intern";
/* $site_name = "Home"; */

/*
 
	To make sure the home page loads even if a user doesn't put in a page id.
	e.g  In the line where  $q = "SELECT * FROM pages WHERE id = 1"; it can be changed to
	$q = "SELECT * FROM pages WHERE id = $_GET[page]"; to make sure that within the url one can pass in a numeric value after it.
	E.g https://www.atomcms.com?page=1 that extra value (?page=1 ) comes as a result of the $_GET['page'] variable in the query $q.
	When this happens an if, else statement has to come in to ensure that a url passed into the browser address without specifying the ?page=1 value at least returns the homepage or 
	any other page specified in the if, else statement.
	NOTE: $q = "SELECT * FROM pages WHERE id = $_GET[page]"; // this line does not need to put
	a single quote like > $_GET['page'] within the double quotes of the SELECT * FROM pages ... syntax 
	because it is already within a double quote.
*/

	if (isset($_GET['page'])) {
		$pageid = $_GET['page'];
		
	} else {
		
		$pageid = 1;
	}

// this line queries the db using the mysqli_query($DatabaseLink, $tableToQuery) function

#Page Setup
$page = data_page($dbc, $pageid);



?>
