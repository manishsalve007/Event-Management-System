<?php
	session_start();
	include 'dbconfig/dbconfig.php';


	$ID = $_SESSION['e_id'];


	if(isset($_POST['delete-btn'])) {
		$query = "delete from event where id = '$ID'";
		$result = mysqli_query($con, $query);
  		//$num = mysqli_num_rows($result);
  		if($result) {
  			echo "<script type = 'text/javascript'> alert('Deleted Successfully!') </script>";


  			header('location:events_a.php');
  		}
  		else {
  			echo "<script type = 'text/javascript'> alert('Failed!!') </script>";
  		}

	}

?>