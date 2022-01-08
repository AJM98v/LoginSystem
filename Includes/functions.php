<?php

require_once "Config.php";
function input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function getData($connect, $username, $email)
{
    $query = $connect->prepare("SELECT * FROM user WHERE username=? or email=?");
    $query->bind_param("ss", $username, $email);
    $query->execute();
    if ($select = $query->get_result()) {
        $row = $select->fetch_assoc();
        return $row;
    }

    $query->close();
}

function userExist($connect, $username, $email)
{
    $user = getData($connect, $username, $email);

    if ($user['username'] === $username or $user['email'] === $email) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function createUser($connect, $username, $email, $password)
{
    $pre = $connect->prepare("INSERT INTO user (username,email,password)VALUES (?,?,?)");
    $pre->bind_param("sss", $username, $email, $password);
    $pre->execute();

    $pre->close();
    $connect->close();
}

function userLogin($connect, $username, $password)
{
    $user = getData($connect, $username, $username);
    $un = $user['username'];

    if ($user['username'] === $username and password_verify($password, $user['password'])) {
        $_SESSION['userID'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../Index.php?user=$un");
        exit();

    }else{
        header("Location: ../login.php?error=wrong");
        exit();
    }

}
