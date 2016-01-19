<?php
require "../library/template.php";
start();
?>
<html>
<head>
	<title>Anywhere Air</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/blackrose_regular_macroman/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="fonts/nautilus/stylesheet.css" />
	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
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
			
			<div  style="width:80%;text-align:center;background-color:#aeaeae;margin:auto;padding:10px;">
				This website is a project we made for Comp-199 at Camosun College 2015.
				<br/>
				<br/>
				<br/>
				<table border style="text-align:center;margin:auto;">
					<tr>
						<td style="width:25%;padding:5px;">
							<p>Joshuah Larminay</p>
							<p>Email: <a href="mailto:j.larminay@gmail.com">j.larminay@gmail.com</a></p>
						</td>
						<td style="width:25%;padding:5px;">
							<p>Lorne McElderry</p>
							<p>Email: <a href="mailto:#">NONE</a></p>
						</td>
						<td style="width:25%;padding:5px;">
							<p>Geoffrey Nothling</p>
							<p>Email: <a href="mailto:#">NONE</a></p>
						</td>
						<td style="width:25%;padding:5px;">
							<p>Geraldine Schweden</p>
							<p>Email: <a href="mailto:#">NONE</a></p>
						</td>
					</tr>
				</table>
			</div>
			
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