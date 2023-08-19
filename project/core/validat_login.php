<?php
session_start();
include('./database.php');


if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $valid = $conny->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    $user = $valid->fetch();
    $_SESSION['auth'] = [$id, $email];
    $errors = "Email or Password Not equal";
    $_SESSION['errors'] = $errors;

    if ($user) {
        return header('Location: ../views/index.php');
    } else {
        header("location: ../views/login.php");
        die;
    }
} else {
    return die(' email or password not field ');
}
