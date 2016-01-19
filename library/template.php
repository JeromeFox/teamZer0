<?php
// added start function for cookies which needs to be at top of EVERY file that uses the header_print function!
//also added user search handling and shopping cart count to header
//also added handler for new and sale

function start() {
	session_start();

	require "check.php";
	cookie_check();
}

function header_print(){

	echo ('<script>
				$(function() {
					var availableTags = [');			
	
	require "connect.php";
	$conn = server_connect();
	$query = "select name from location_continent";
	$result = mysqli_query($conn,$query);
	if ($result) {
		$rows = 	mysqli_num_rows($result);
		$fields = 	mysqli_num_fields($result);
		while($row = mysqli_fetch_row($result)) {
			echo ('"'.$row[0].'",');
		}
	}
	$query = "select name from location_country";
	$result = mysqli_query($conn,$query);
	if ($result) {
		$rows = 	mysqli_num_rows($result);
		$fields = 	mysqli_num_fields($result);
		while($row = mysqli_fetch_row($result)) {
			echo ('"'.$row[0].'",');
		}
	}
	$query = "select name from location_city";
	$result = mysqli_query($conn,$query);
	if ($result) {
		$rows = 	mysqli_num_rows($result);
		$fields = 	mysqli_num_fields($result);
		while($row = mysqli_fetch_row($result)) {
			echo ('"'.$row[0].'",');
		}
	}
						
	echo ('			];
					$( "#s" ).autocomplete({
						source: availableTags
					});
				});
			</script>');

	if (isset($_GET['s'])) {
		$search = $_GET['s'];
	} 
	else {
		$search = "";
	}

	$count = 0;
	if (isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $k => $x) {
			$count += $x;
		}
	}
	/*$errorLog = "";
	if (isset($_SESSION['log'])) {
		$errorLog = $_SESSION['log'];
	}*/

	echo ('	<header>');
	echo ('		<div id="reg">');
	
	if (!isset($_COOKIE['uname']) or !$_COOKIE['uname']){
		echo ('			<a href="login"><i class="fa fa-sign-in"></i> Login/Register</a>');	

	}
	else {
		$name = $_COOKIE['uname'];
		echo ('			<a href="user"><i class="fa fa-user"></i> Welcome Back '.ucwords($name).'</a>');
		print "			<br />";
		echo ('			<a href="php/logout"><i class="fa fa-sign-out"></i> Logout </a>');
	}
	echo ('		</div>');
	echo ('		<div id="mini">');
	echo ('			<h1><a href="http://deepblue.cs.camosun.bc.ca/~comp19900/">Anywhere Air</a></h1>');
	echo ('			<a id="top"></a>');
	echo ('			<p>From Anywhere To Anywhere</p>');
	echo ('		</div>');
	echo ('		<div id="nav">');
	echo ('			<div  class="input">');
	echo ('				<form action="search" id="sgo" method="get">');
	echo ('					<input type="text" id="s" name="s" placeholder="Search" value="'.$search.'">');
	echo ('					<button type="submit">Go <i class="fa fa-search"></i></input>');
	echo ('				</form>');
	echo ('			</div>');
	echo ('			<ul>');
	echo ('				<li><a href="search"><i class="fa fa-navicon"></i> All Products</a></li>');
	echo ('				<li><a href="search?new=true"><i class="fa fa-plus"></i> New Products</a></li>');
	echo ('				<li><a href="locations"><i class="fa fa-flag"></i> Locations</a></li>');
	echo ('				<li><a href="search?promo=true"><i class="fa fa-usd"></i> Sale Items</a></li>');
		
	if (!empty($_COOKIE['user'])){
		print '				<li><a href="wish"><i class="fa fa-list"></i> Wish List</a></li>';
		echo ("<style>#nav li {width:".(100/6)."%;}</style>");
	}
	else {
		echo ("<style>#nav li {width:20%;}</style>");	
	}
	
	echo ('				<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart (<span id="cart_count">'.$count.'</span>)</a></li>');
	
	echo ('			</ul>');
	echo ('		</div>');
	echo ('	</header>');	
}

function footer_print(){
	echo ('	<hr>');
	echo ('	<div id="foot-links">');
	echo ('	<ul style="padding-left: 0px;">');
	echo ('		<li><a href="about">About Us</a></li>');
	echo ('		<li>|</li>');
	echo ('		<li><a href="legal">Legal</a></li>');
	echo ('	</ul>');
	echo ('	</div>');
	echo ('	<div id="copyright">');
	echo ('		<i class="fa fa-copyright"></i> All Rights Reserved');
	echo ('		<br/>');
	echo ('		Joshuah Larminay, Lorne McElderry, Geoffrey Nothling, Geraldine Schweden');
	echo ('		<br/>');
	echo ('		<b><i>Camosun College Victoria B.C.</i></b>');
	echo ('		<b><i>Comp 199</i></b>');
	echo ('	</div>');
}
