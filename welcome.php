<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = 'Please fill in both fields.';
    } else {
        // perform validation with your backend or authentication service
        // here we're just checking if the email is example@example and the password is password
        if ($email === 'example@example.com' && $password === 'password') {
            $firstName = 'John'; // replace with the user's first name retrieved from your backend
            header("Location: welcome.php?firstName=$firstName");
            exit();
        } else {
            $error = 'Invalid login credentials.';
        }
    }
} ?>

