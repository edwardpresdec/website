<?php
    $un=$_POST["username"];
    $pass=$_POST["password"];

    if (($open = fopen("users.csv", "r")) !== false) {
        while (($data = fgetcsv($open, 1000, ",")) !== false) {
            $array[] = $data;
        }
     
        fclose($open);
    }

    $loggedIn=false;

    foreach ($array as $A) {
        if (($A[0] . "." . $A[1])==$un && ($A[2]==$pass)) {
            $loggedIn=true;
            break;
        }
    }

    if ($loggedIn){
        session_start();
        $_SESSION["username"]=$un;
        header("location:../pages/home.php");
    }else{
        header("location:../index.php");
    } 
?>