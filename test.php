<?php
    $user = "root";
    $password = "";
    $host ="localhost";
    $db_name ="demo";
    $con = mysqli_connect($host,$user,$password,$db_name);

    if(isset($_POST["username"])&& isset($_POST["password"])){
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $query='SELECT COUNT(*) FROM `users` WHERE `username`="'.$user.'" AND `password`="'.$pass.'"';
        $res=mysqli_fetch_array(mysqli_query($con,$query));
        if($res[0]=='1'){
            echo "true";
        }
        else{
            echo "false";
        }
    }
?>
