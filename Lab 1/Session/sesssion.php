<?php
    $uname="";
    $pass="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        if($uname=="Shawon" && $pass="12345"){
            session_start();
            $_SESSION["user"]=$uname;
            header("Location:dashboard.php");
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
        <body>
            <form action="" method="post">
                <input type="text" name="uname" placeholder="username"><br>
                <input type="text" name="pass" placeholder="password"><br>
                <input type="submit" value="login"><br>
            </form>
            </body>
</html>