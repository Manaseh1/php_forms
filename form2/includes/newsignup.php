<?php 
include_once('newdb.inc.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql = "INSERT into users(first_name,last_name,email,pwd) VALUES('$fname','$lname','$email','$pwd');";
$result = mysqli_query($conn,$sql);
header("Location: ../success.php?signup=success");