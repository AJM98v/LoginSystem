<?php

$sn = "localhost";
$un = "root";
$pass = "";
$db = "loginsystem";

$connect = new mysqli($sn,$un,$pass,$db);

if ($connect->connect_error){
    die("Connection is Down!");

}


session_start();
setcookie(session_name(),session_id(),time()+3600);
