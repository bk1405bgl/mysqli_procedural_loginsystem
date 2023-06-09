<?php include 'includes/01doctype_inc.php'; ?>
<!-- Individual title for every single page -->
<title>Registrieren</title>
<!-- End of title tag -->
<?php include 'includes/02head_rest_inc.php'; ?>
<!-- START OF BODY -->
<body>
<?php include 'includes/03nav_inc.php'; ?>
<header>
    <h1>Chemperator</h1>
</header>
<main>
    <h2>Registrieren</h2>
    <div class="messages">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwörter stimmen nicht überein!</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Ups! Etwas ist schief gelaufen. Versuche es erneut.</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username bereits vergeben!</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>Registrierung erfolgreich!</p>";
            }
        }
        ?>
    </div>
    <form class="reglog" action="includes/05signup_inc.php" method="post">
        <input type="text" name="vorname" placeholder="Vorname" required>
        <input type="text" name="nachname" placeholder="Nachname" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="email" placeholder="E-Mail" required>
        <input type="password" name="password" placeholder="Passwort" required>
        <input type="password" name="password-repeat" placeholder="Passwort wiederholen" required>
        <input type="submit" name="signup-submit"></input>
        <input type="reset"></input>
    </form>
    <p>Schon registriert? <a href="signin.php">Hier geht es zum Login-Bereich.</a></p>
</main>
<?php include 'includes/10footer_inc.php'; ?>
</body>
</html>