<?php
    function emptyInputSignup($vorname, $nachname, $username, $email, $password, $passwordRepeat) {
        $result;
        if (empty($vorname) || empty($nachname) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidUsername($username) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function passwordMatch($password, $passwordRepeat) {
        $result;
        if ($password !== $passwordRepeat) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function usernameExists($conn, $username, $email) {
        $sql = "SELECT * FROM benutzer WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

function createUser($conn, $vorname, $nachname, $username, $email, $password) {
    $sql = "INSERT INTO benutzer (vorname, nachname, username, email, password) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $vorname, $nachname, $username, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../signup.php?error=none");
    exit();
}

function emptyInputSignin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

    function signinUser($conn, $username, $password) {
        $usernameExists = usernameExists($conn, $username, $password);

        if ($usernameExists === false) {
            header("Location: ../signin.php?error=wronglogin");
            exit();
        }

        $passwordHashed = $usernameExists["password"];
        $checkPassword = password_verify($password, $passwordHashed);

        if ($checkPassword === false) {
            header("Location: ../signin.php?error=wronglogin");
            exit();
        }
        else if ($checkPassword === true) {
            session_start();
            $_SESSION["userid"] = $usernameExists["id"];
            $_SESSION["username"] = $usernameExists["username"];
            header("Location: ../index.php");
            exit();
        }
    }