<?php
  session_start();
  include 'dbconfig/dbconfig.php';

  $name = $_POST['NAME'];
  //$mobile = $_POST['cell_number'];
  $username = $_POST['uname'];
  $password = $_POST['psw'];

  $s = "select * from user where username = '$username' and password = '$password'";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);

  if($num == 1) {
    echo "<script type = 'text/javascript'> alert('username already taken !') </script>";
    //$_SESSION['name'] = $username;
    //header('location:homepage.php');
  }
  else {
    // echo "<script type = 'text/javascript'> alert('Registration Successful !!') </script>";
   // echo "Success!!!";
    header('location:login.php');
  }

  //header('location:login.php');
  



?>