<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/ico" href="favicon.ico">
</head>
<body>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="signin.php">Login</a></li>
        <li><a href="signup.php">Register</a></li>
    </ul>
</nav>
<header>
    <h1>My First PHP Page</h1>
</header>

<main>
    <h2>Register</h2>
    <?php
    echo "Jetzt registrieren";
    ?>
</main>
<?php
include_once 'includes/footer_inc.php';
?>
</body>
</html>


