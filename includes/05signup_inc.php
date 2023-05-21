<?php
    if (isset($_POST['signup-submit'])) {
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordRepeat = $_POST['password-repeat'];

        require '04dbconfig_inc.php';
        require '07functions_inc.php';

        if (emptyInputSignup($vorname, $nachname, $username, $email, $password, $passwordRepeat) !== false) {
            header("Location: ../signup.php?error=emptyinput");
            exit();
        }
        if (invalidVorname($vorname) !== false) {
            header("Location: ../signup.php?error=invalidVorname");
            exit();
        }
        if (invalidNachname($nachname) !== false) {
            header("Location: ../signup.php?error=invalidNachname");
            exit();
        }
        if (invalidUsername($username) !== false) {
            header("Location: ../signup.php?error=invalidUsername");
            exit();
        }
        if (invalidEmail($email) !== false) {
            header("Location: ../signup.php?error=invalidEmail");
            exit();
        }
        if (passwordMatch($password, $passwordRepeat) !== false) {
            header("Location: ../signup.php?error=passwordsdontmatch");
            exit();
        }
        if (usernameExists($conn, $username, $email) !== false) {
            header("Location: ../signup.php?error=usernametaken");
            exit();
        }
        createUser($conn, $vorname, $nachname, $username, $email, $password);
    }
    else {
        header("Location: ../signup.php");
    }