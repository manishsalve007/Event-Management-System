<?php
session_start();
include 'dbconfig/dbconfig.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Management</title>
  <meta charset="utf-8">
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
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .button {
      background-color: #1E90FF;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 400px;
      cursor: pointer;
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
        <li class="active"><a href="homepage.php">Home</a></li>
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
  </div>
</div>
<div class="container">
  <h2 align = "center">Events at IMPRESSIONS</h2>
  <table class="table">
    <thead>
      <tr class = "success"> 
        <th>Event ID</th>
        <th>Event Name</th>
        <th>Date</th>
        <th>Registration Fee</th>
        <!-- <th>Action</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
        $query = "select * from event";
        $fetchquery =  mysqli_query($con, $query);
        while($row = mysqli_fetch_array($fetchquery)) {?>
          <tr>
            <!-- <form method = "POST" action = "admin-delete_a.php"> -->
              <td> <?php echo $row['id'];
                  $_SESSION['e_id'] = $row['id'];
               ?></td>
              <td> <?php echo $row['title']; ?></td>
              <td> <?php echo $row['date'];
                    
               ?></td>
              <td> <?php echo $row['fee'];
                    
               ?></td>
             <form method = "POST" action = "admin-delete_a.php"> <td> <input type="submit" name="delete-btn" value = 'Delete'></td></form>

              <td> <a href="admin-update_a.php"> <button>Update</button></a></td>
          </tr>

        <?php
         }
         ?>
    </tbody>
  </table>

    <a href = "admin-add_a.php"><button>Add Event</button></a>
<br><br>
    



</div>
<div class="container" style="background-color:#f1f1f1">
    <a href="admin-panel.php"><button type="button" class="cancelbtn">Back</button></a>
  </div>


<br><br>

<footer class="container-fluid text-center">
  <p>Email : impressions@coep.ac.in</p>
</footer>
</body>
</html>