<?php

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['auth'] = [$email, $password];
        header("location:../views/index.php");
    } else {
        $err = "Login failed. Invalid username or password";
        echo "<h1> $err .</h1>";
        unset($err);
    }
}


// $email = trim($_POST['email']);
// $password = trim($_POST['password']);

// if (!strlen($email) || !strlen($password)) {
//     die('Please enter a username and password');
// }

// $success = false;

// $handle = fopen("../data/users.csv", "r");

// while (($data = fgetcsv($handle)) !== FALSE) {
//     if ($data[1] == $email && $data[2] == $password) {
//         $success = true;
//         break;
//     }
// }

// fclose($handle);

// if ($success) {
//     redirect('../index.php');
// } else {
//     redirect('../login.php');
// }