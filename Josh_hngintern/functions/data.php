<?php 

	function data_page($dbc, $id) {
	// this line queries the db using the mysqli_query($DatabaseLink, $tableToQuery) function
	#Page Setup
	$q = "SELECT * FROM pages WHERE id = $id";
	$r = mysqli_query($dbc, $q);
	/* this link converts the query returned from the above line (stored in $r) to an associative array
	*/
	$data = mysqli_fetch_assoc($r);
	
	$data['body_nohtml'] = strip_tags($body['body']);
	
	if ($data['body_nohtml'] == $data['body']) {
	
		$data['body_formatted'] = '<p>' . $data['body'] . '</p>';
		
	} else {
		
		$data['body_formatted'] = $data['body'];
	}

	/*this array is an associative array and not a numeric array. so it 
		is accessed with a name index and not a number index. A number index can also be used
	*/

	return $data;
	}
	
?>