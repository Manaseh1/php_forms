<?php
include_once('form3.db.php');
$firstname =mysqli_real_escape_string($conn,$_POST['firstname']) ;
$lastname =mysqli_real_escape_string($conn,$_POST['lastname']);
$town =mysqli_real_escape_string($conn,$_POST['town']);
$email =mysqli_real_escape_string($conn,$_POST['email']);
$password =mysqli_real_escape_string($conn,$_POST['pwd']);
$sql= "INSERT into formtab(firstname,lastname,town,email,pwd) VALUES('$firstname','$lastname','$town','$email','$password');";
$result = mysqli_query($conn,$sql);
header('Location:../success.php?signup=success');


