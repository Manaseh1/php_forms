<!DOCTYPE html>
<?php
include_once('includes/form3.db.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup3.inc.php" method ="POST">
        <input type="text" name="firstname" placeholder="first name"><br>
        <input type="text" name="lastname" placeholder="last name "><br>
        <input type="text" name="town"  placeholder="Enter town "><br>
        <input type="text" name="email" placeholder="Enter email"><br>
        <input type="password" name="pwd" placeholder="Enter password"><br>
        <button>submit</button>
    </form>
    <?php $sql = "SELECT * FROM formtab;" ?>
</body>
</html>