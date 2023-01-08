<?php 
include_once('includes/head.php');
include_once('includes/newdb.inc.php');
?>
<html>
    <body>
        <form action="includes/newsignup.php" method="post">
           <input type="text" name="fname" placeholder="firstname"><br>
           <input type="text" name="lname" placeholder="lastname"><br>
           <input type="text" name="email" placeholder="Enter your email"><br>
           <input type="password" name="pwd" placeholder="password"><br>
           <button type="submit" name="Signup"> Sign up </button>
        </form>
        <?php $sql ='SELECT * FROM users; ' ?>

    </body>
</html