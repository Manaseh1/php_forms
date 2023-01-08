<?php
 include_once('includes/head.php');
 include_once('includes/dbh.inc.php')
?>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="first" placeholder="First_name"><br>
            <input type="text" name="last" placeholder="Last_name"><br>
            <input type="text" name="Email" placeholder="Email"><br>
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button type="submit" name="signup">Sign up</button>
        </form>
        <?php
        $data ='Hellen';
        //created a template
        $sql = "SELECT * FROM users where user_first =? ";
        //Created a prepard statement varname stmt
        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo 'SQL statement failed';
        } 
        else{
            mysqli_stmt_bind_param($stmt,'s',$data);
            //execute
            mysqli_stmt_execute($stmt);
            $result =mysqli_stmt_get_result($stmt);
            while($row=mysqli_fetch_assoc($result)){
                echo $row['user_uid']."<br>";
                
            }
        }        
        ?>
    </body>
</html>

