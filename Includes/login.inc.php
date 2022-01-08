<?php
require_once 'Config.php';
require_once 'functions.php';


if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
    if (isset($_POST['submit'])){
        if (empty($_POST['username'])){
            header("Location: ../login.php?error=empty");
            exit();
        }else{
            $username = input($_POST['username']);

        }
        if (empty($_POST['password'])) {
            header("Location: ../login.php?error=empty");
            exit();
        } else {
            $password = input($_POST['password']);

        }
        userLogin($connect,$username,$password);
    }
    else{
        header("Location: ../login.php");
    }

}