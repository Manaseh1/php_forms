<?php
 include_once('includes/head.php');
 include_once('includes/dbh.inc.php')
?>
<body>
    <form method="post">
        Name:<input type="text" name="Name" ><br>
        Username:<input type="text"  name="username"><br>
        <button type='submit'>See my name</button><br>
    </form>
    <?php
    $conn;
    echo $_POST['Name'],'<br> ';
    $username =$_POST['username'];
    $_SESSION['username']= $username;
    //echo $_SESSION['username'];
    if(!isset($_SESSION['username'])){
        echo 'You are not logged in';
    }
    else{
        echo "You are logged in $username";
    }
    ?>
</body>
</html>