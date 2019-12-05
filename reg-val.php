<?php

  include 'dbconfig/dbconfig.php';

  $name = $_POST['NAME'];
  $mobile = $_POST['cell_number'];
  $username = $_POST['uname'];
  $password = $_POST['psw'];

  $s = "select * from user where username = '$username'";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);

  if($num == 1) {
    // echo "<script type = 'text/javascript'> alert('username already taken !') </script>";
    echo "Username already taken";
    header('location:register.php');
  }
  else {
    $reg = "insert into user(name, mobile_no, username, password) values('$name', '$mobile', '$username', '$password')";
    mysqli_query($con, $reg);
    // echo "<script type = 'text/javascript'> alert('Registration Successful !!') </script>";
   // echo "Success!!!";
    header('location:login.php');
  }

  //header('location:login.php');
  



?>