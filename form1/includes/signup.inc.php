<?php
 include_once('dbh.inc.php');
$first =$_POST['first'];
$last =$_POST['last'];
$email =$_POST['Email'];
$uid =$_POST['uid'];
$pwd =$_POST['pwd'];

$sql="INSERT into users(user_first,user_last,user_email,user_uid,user_pwd) VALUES('$first','$last','$email','$uid','$pwd');";
$result = mysqli_query($conn,$sql);
header("Location: ../success.php?signup=success");