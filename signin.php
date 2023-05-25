<?php include 'includes/01doctype_inc.php'; ?>
<!-- Individual title for every single page -->
<title>Login</title>
<!-- End of title tag -->
<?php include 'includes/02head_rest_inc.php'; ?>
<!-- START OF BODY -->
<body>
<?php include 'includes/03nav_inc.php'; ?>
<header>
    <h1>Chemperator</h1>
</header>
<main>
    <h2>Einloggen</h2>
    <div class="messages">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "wronglogin") {
                echo "<p>Zugangsdaten fehlerhaft!</p>";
            }
        }
        ?>
    </div>
    <form class="reglog" action="includes/06signin_inc.php" method="post">
        <input type="text" name="email_username" placeholder="E-Mail / Username" required>
        <input type="password" name="password" placeholder="Passwort" required>
        <input type="submit" name="signin-submit"></input>
        <input type="reset"></input>
    </form>
    <p>Noch nicht registriert? <a href="signup.php">Hier geht es zur Registrierung.</a></p>
</main>
<?php include 'includes/10footer_inc.php'; ?>
</body>
</html>