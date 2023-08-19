<?php
// session_star();
// include("../core/database.php");

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'  &&  isset($_POST['name'])) {

    foreach ($_POST as $key => $value) {
        $$key = $value;
    }


    // validation :
    //name => required , min:3 - max:25

    if (empty($name)) {
        $errors[] = "Name is required";
    } elseif (strlen($name) < 3) {
        $errors[] =  ' Name should be at least 3 chare ';
    } elseif (strlen($name) > 25) {
        $errors[] =  ' Name should be smaller than 25 chare';
    }


    //phone => required , min:3 - max:25

    if (empty($phone)) {
        $errors[] = "phone is required";
    } elseif (strlen($name) < 6) {
        $errors[] =  ' phone should be at least 3 number ';
    } elseif (strlen($name) > 25) {
        $errors[] =  ' Name should be smaller than 15 number';
    }


    //Email => required , a validate

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] =  ' Plaese type a valid Email ';
    }


    //password => required , min:6 - max:20

    if (empty($password)) {
        $errors[] = "password is required";
    } elseif (strlen($password < 3)) {
        $errors[] =  ' password should be at least 6 chare ';
    } elseif (!strlen($password > 25)) {
        $errors[] =  ' password should be smaller than 20 chare';
    }

    if (empty($errors)) {
        $sql = "INSERT INTO users(name, phone, email , password) VALUES('$name', '$phone', '$email' ,'$password')";
        $data = insert($sql);

        //redirect .. 
        $_SESSION['auth'] = [$email, $name];
        header("location: ../views/index.php");
        die;
    } else {
        $_SESSION['errors'] = $errors;
        header("location: ../views/register.php");
        die;
    }
}


/////////////////////////////////////////////////////////////////////////////
