<?php
require "../library/template.php";
start();
?>
<html>
<head>
	<title>Anywhere Air</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/blackrose_regular_macroman/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="fonts/nautilus/stylesheet.css">
	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/error.css">
	
</head>

<body>

	<div id="wall"></div>

	<div id="full">
	
		<?php
		require "../library/template.php";
		header_print();	
		?>
		
		<br/>
		
		<div id="container">
			
			<h3>Error 404</h3>
			<p>Page not found</p>
			
		</div>
	</div>
	
</body>

<footer>
	<?php
	require "../library/template.php";
	footer_print();	
	?>
</footer>
</html>