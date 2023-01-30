<?php
    // $idcon=mysqli_connect("127.0.0.1","root","","demo");
    // if($idcon)
    //     $err=0;
    // else{
    //     $err=1;
    //     $errMsg="Couldn't connect to database";
    // }
    // $query='SELECT * FROM users WHERE id='.$id;
    // $res=mysqli_query($idcon,$query);
    // while($row = mysqli_fetch_assoc($res))
    //     echo "Username: ".$row["username"]." Password:".$row["password"];
    $user_name = isset($_POST["name"]);
    $user_pass = isset($_POST["email"]);
    $user = "root";
    $password = "";
    $host ="localhost";
    $db_name ="demo";
    $con = mysqli_connect($host,$user,$password,$db_name);
    // $sql = "insert into user values('".$user_name."','".$user_pass."');";
    // if(mysqli_query($con,$sql))
    // {
    //     echo "Data inserted successfully....";
    // }
    // else
    // {
    //     echo "some error occured";
    // }
    // mysqli_close($con);
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
