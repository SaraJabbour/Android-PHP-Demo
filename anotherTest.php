<?php
    $idcon=mysqli_connect("127.0.0.1","root","","demo");
    if($idcon)
        $err=0;
    else{
        $err=1;
        $errMsg="Couldn't connect to database";
    }
    $id=1;
    $query='SELECT `username`,`id` FROM users';
    $response= mysqli_query($idcon,$query);
    $jsonAr=Array();
    $i=0;
    while($ar=mysqli_fetch_assoc($response))
        $jsonAr[$i++]=$ar;

    echo json_encode($jsonAr);
?>
