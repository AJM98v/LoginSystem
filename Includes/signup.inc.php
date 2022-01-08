<?php

require_once 'Config.php';
require_once 'functions.php';


if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
    $name = $email = $mobile = $password = $passwordR = "";
    if (isset($_POST['submit'])) {
        if (!empty($_POST['username'])) {
            if (preg_match('/^[a-zA-Z0-9]*$/', $_POST['username'])) {
                $name = input($_POST['username']);
            } else {
                header("Location: ../signup.php?error=invalidUn");
                exit();
            }
        } else {
            header("Location: ../signup.php?error=empty");
            exit();
        }
        if (!empty($_POST['email'])) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = input($_POST['email']);
            } else {
                header("Location: ../signup.php?error=invalidEmail");
                exit();
            }
        } else {
            header("Location: ../signup.php?error=empty");
            exit();
        }
        if (!empty($_POST['password'] || $_POST['password-r'])) {
            if ($_POST['password'] === $_POST['password-r']) {
                $password = password_hash(input($_POST['password']), PASSWORD_DEFAULT);
            } else {
                header("Location: ../signup.php?error=notMatch");
                exit();
            }
        } else {
            header("Location: ../signup.php?error=empty");
            exit();
        }
        if (userExist($connect, $name, $email) !== false) {
            header("Location: ../signup.php?error=taken");
            exit();

        } else {
            createUser($connect, $name, $email, $password);
            header("Location: ../create.php?error=done");
            exit();
        }








    } else {
        header('Location: ../signup.php?');
        exit();
    }

}