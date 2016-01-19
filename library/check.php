<?php

function cookie_check(){
	
	$expire = time() - 3600;
	$loc = "/";
	
	if (!empty($_COOKIE["user"])){
		require "connect.php";
		$conn = server_connect();

		$array = explode("-",$_COOKIE["user"]);

		$uid = 		$array[0];
		$session = 	$array[1];
		$key =		$array[2];
		
		$query = "	select *
					from sessions
					where user_id = '".$uid."'
					and session_id = '".$session."'
					and key_id = '".$key."'";
					
		$result = mysqli_query($conn,$query);

		if ($result) {
			$rows = 	mysqli_num_rows($result);
			if ($rows > 0) {
				
				$today = getdate();
				$date = $today['year']."-".$today['mon']."-".$today['mday'];
				//--------------
				$query = "	update users
							set date_last = '".$date."'
							where user_id = '".$uid."'";			
				$result = mysqli_query($conn,$query);				
			}
			else {
				//kill cookies
				setcookie("uname","null",$expire,$loc);
				setcookie("user","null",$expire,$loc);
			}
		}
		else {
			//kill cookies
			setcookie("uname","null",$expire,$loc);
			setcookie("user","null",$expire,$loc);
		}
	}
	else {
		//kill cookies
		setcookie("uname","null",$expire,$loc);
		setcookie("user","null",$expire,$loc);
	}
}

?>