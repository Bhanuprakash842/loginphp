<?php

include './config.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    register($name, $email, $password);
}

if (isset($_POST['login'])) {
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];
    login($email, $password);
}

function alert($msg, $redirect)
{
    echo "<script type='text/javascript'>alert('$msg');window.location.href='$redirect';</script>";
}

function login($email, $password)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE `email`='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['loggedin'] = true;
            alert("Login Succesfull", "index.php");
        } else {
            alert("Password Is Incorrect", "index.php");
        }
    } else {
        alert("email Doesn't Exists", "index.php");
    }
}


function register($name, $email, $password)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE `email`='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) < 1) {
        $sql = "INSERT INTO users (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['loggedin'] = true;
            alert("Registered", "index.php");
        } else {
            alert("Something went wrong!", "index.php");
        }
    } else {
        alert("Email already used!", "index.php");
    }
}
