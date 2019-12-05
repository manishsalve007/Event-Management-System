<?php
  session_start();
  include 'dbconfig/dbconfig.php';

  if(isset($_POST['update-btn'])) {

  	$lname = $_POST['event-name'];
  	$ldate = $_POST['event-date'];
  	$lfee = $_POST['event-fee'];

    $iid = $_SESSION['e_id'];



    $query = "UPDATE `event` SET `title`= '".$lname."' , `date`= '".$ldate."', `fee`= ".$lfee." WHERE `id` = ".$iid."";

  	$res = mysqli_query($con, $query);
  	if($res) {
    echo "<script type = 'text/javascript'> alert('Updated Succesfully !!') </script>";

   	// header('location: events_a.php');
  	}
  	else {
    	echo "<script type = 'text/javascript'> alert('Failed !!') </script>";
  	}
  }

  




?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">COEP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Event Management Company</h1>      
    <p></p>
  </div>
</div>


<h2 align="center">Update an Event</h2>

<form action="admin-update_a.php" method="POST">

  <div class="container">
    <label for="uname"><b>Event Name</b></label>
    <input type="text" name = "event-name" placeholder="update event name here"  required>

    <label for="uname"><b>Date</b></label>
    <input type="text" placeholder="update Date" name ="event-date" required>

    <label for="uname"><b>Registration Fee</b></label>
    <input type="text" placeholder="update fees" name="event-fee" required>
        
    <button type="submit" name = "update-btn">Update</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="events_a.php"><button type="button" class="cancelbtn">Back</button></a>
  </div>
</form>



  

<footer class="container-fluid text-center">
  <p>Email : impressions@coep.ac.in</p>
</footer>

</body>
</html>


