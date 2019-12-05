<?php

	session_start();
	include 'dbconfig/dbconfig.php';
	$i = 0;
		while(1) {
			$i++;
			if(isset($_POST[((string)$i)])) {
				break;
			}
		}
		$Eid = $i;
		$username = $_SESSION['name'];
		$query = "select id from user where username = '".$username."'";
		$res = mysqli_query($con, $query);
		$r = mysqli_fetch_assoc($res);
		$UID = $r['id'];
		//$_SESSION['uid'] = $r['id'];
		$query = "insert into user_event(event_id, user_id) values('$Eid', '$UID' )";
		$result= mysqli_query($con, $query);
		if($result) {
			header('location: events_u.php');
			echo "<script type = 'text/javascript'> alert('Success!') </script>";

		}
		else {
			echo "<script type = 'text/javascript'> alert('Already registered !!!') </script>";
		}


		//header('location: events_u.php');





?>