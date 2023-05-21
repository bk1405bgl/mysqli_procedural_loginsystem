<?php
    if (isset($_POST['signin-submit'])) {
        $username = $_POST['email_username'];
        $password = $_POST['password'];

        require '04dbconfig_inc.php';
        require '07functions_inc.php';

        if (emptyInputSignin($username, $password) !== false) {
            header("Location: ../signin.php?error=emptyinput");
            exit();
        }
        signinUser($conn, $username, $password);
    }
    else {
        header("Location: ../signin.php");
        exit();
    }