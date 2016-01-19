<?php

//dont update this. no value added as josh's is more up to date

require "../library/connect.php";

$conn = server_connect();

//-----------------------------------------------------------------
//TEST QUERY

$query = $_GET['query'];
print $query;

//if results returned true
if (empty($query)) {
	echo ("No Query");
}
else {
	//array of unwelcome input
	$takeMe = array("/\;/", "/drop/", "/delete/", "/insert/");
	//takes unwelcome items out of input
	foreach ($takeMe as $takeThis){
		$query = preg_replace ($takeThis, "", strtolower($query), -1, $result);
	}

	$result = mysqli_query($conn,$query);
	//if not empty
	if ($result) {
		$rows = 	mysqli_num_rows($result);
		$fields = 	mysqli_num_fields($result);
		print_r($result);
		print_r($rows);
		print_r($fields);

			
		echo ("<h1>Tables</h1>");
		echo ("<table border>");
		
		echo ("<tr>");
		for($i=0; $i<$fields; $i++) {
			$field = mysqli_fetch_field($result);
			echo ("<td>{$field->name}</td>");
		}
		echo ("</tr>");
		
		while($row = mysqli_fetch_row($result)) {
			echo ("<tr>");
			foreach($row as $cell)
				echo ("<td>$cell</td>");
			echo ("</tr>");
		}

		echo ("</table>");
	}
	//if no results
	else {
		echo mysqli_error($conn);
	}
}

	
echo ("<br/>");
echo ("<hr>");
echo ("<br/>");

//-----------------------------------------------------------------

$query = "	show tables";

$result = 	mysqli_query($conn,$query);
$rows = 	mysqli_num_rows($result);
$fields = 	mysqli_num_fields($result);

//if results returned true
if ($result) {
	
	echo ("<h1>Tables</h1>");
	echo ("<table border>");
	
	echo ("<tr>");
	for($i=0; $i<$fields; $i++) {
		$field = mysqli_fetch_field($result);
		echo ("<td>{$field->name}</td>");
	}
	echo ("</tr>");
	
	while($row = mysqli_fetch_row($result)) {
		echo ("<tr>");
		foreach($row as $cell)
			echo ("<td>$cell</td>");
		echo ("</tr>");
	}


	echo ("</table>");
}
//if no results
else {
	echo ("0 Results");
}

echo ("<br/>");
echo ("<hr>");
echo ("<br/>");

//-----------------------------------------------------------------
echo ("<table border>");
echo ("<tr>");
echo ("<td style='vertical-align:top;padding:20px;'>");

$query = "	SELECT *
			FROM location_continent";

$result = 	mysqli_query($conn,$query);
$rows = 	mysqli_num_rows($result);
$fields = 	mysqli_num_fields($result);

//if results returned true
if ($result) {
	
	echo ("<h1>Continents</h1>");
	echo ("<table border>");
	
	echo ("<tr>");
	for($i=0; $i<$fields; $i++) {
		$field = mysqli_fetch_field($result);
		echo ("<td>{$field->name}</td>");
	}
	echo ("</tr>");
	
	while($row = mysqli_fetch_row($result)) {
		echo ("<tr>");
		foreach($row as $cell)
			echo ("<td>$cell</td>");
		echo ("</tr>");
	}


	echo ("</table>");
}
//if no results
else {
	echo ("0 Results");
}

echo ("</td>");
//----------------------------
echo ("<td style='vertical-align:top;padding:20px;'>");

$query = "	SELECT *
			FROM location_country";

$result = 	mysqli_query($conn,$query);
$rows = 	mysqli_num_rows($result);
$fields = 	mysqli_num_fields($result);

//if results returned true
if ($result) {
	
	echo ("<h1>Countries</h1>");
	echo ("<table border>");
	
	echo ("<tr>");
	for($i=0; $i<$fields; $i++) {
		$field = mysqli_fetch_field($result);
		echo ("<td>{$field->name}</td>");
	}
	echo ("</tr>");
	
	while($row = mysqli_fetch_row($result)) {
		echo ("<tr>");
		foreach($row as $cell)
			echo ("<td>$cell</td>");
		echo ("</tr>");
	}


	echo ("</table>");
}
//if no results
else {
	echo ("0 Results");
}

echo ("</td>");
//----------------------------
echo ("<td style='vertical-align:top;padding:20px;'>");

$query = "	SELECT *
			FROM location_city";

$result = 	mysqli_query($conn,$query);
$rows = 	mysqli_num_rows($result);
$fields = 	mysqli_num_fields($result);

//if results returned true
if ($result) {
	
	echo ("<h1>Cities</h1>");
	echo ("<table border>");
	
	echo ("<tr>");
	for($i=0; $i<$fields; $i++) {
		$field = mysqli_fetch_field($result);
		echo ("<td>{$field->name}</td>");
	}
	echo ("</tr>");
	
	while($row = mysqli_fetch_row($result)) {
		echo ("<tr>");
		foreach($row as $cell)
			echo ("<td>$cell</td>");
		echo ("</tr>");
	}


	echo ("</table>");
}
//if no results
else {
	echo ("0 Results");
}

echo ("</td>");
echo ("</tr>");
echo ("<table>");

//-----------------------------------------------------------------

$query = "	SELECT 	*
			FROM item";

$result = 	mysqli_query($conn,$query);
$rows = 	mysqli_num_rows($result);
$fields = 	mysqli_num_fields($result);

//if results returned true
if ($result) {
	
	echo ("<h1>Items</h1>");
	echo ("<table border>");
	
	echo ("<tr>");
	for($i=0; $i<$fields; $i++) {
		$field = mysqli_fetch_field($result);
		echo ("<td>{$field->name}</td>");
	}
	echo ("</tr>");
	
	while($row = mysqli_fetch_row($result)) {
		echo ("<tr>");
		foreach($row as $cell)
			echo ("<td>$cell</td>");
		echo ("</tr>");
	}


	echo ("</table>");
}
//if no results
else {
	echo ("0 Results");
}

echo ("<br/>");
echo ("<hr>");
echo ("<br/>");

//-----------------------------------------------------------------


server_close($conn);

?>