<?php
    $usr=$_POST["username"];
    $fn=$_POST["fullname"];
    $p=$_POST["pass"];
    $confp=$_POST["confirmPassword"];
    $sex=$_POST["sex"];
    $dt=$_POST["dt"];

    $a_user=array($usr,$fn,$p,$confp,$sex,$dt);

    $handle = fopen("users.csv","a");
    fputcsv($handle,$a_user);
    fclose($handle);

    session_start();
    $_SESSION["username"]=$un;
    header("location:../index.php");
?>