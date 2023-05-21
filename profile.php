<?php include 'includes/01doctype_inc.php'; ?>
<!-- Individual title for every single page -->
<title>Profile Page</title>
<!-- End of title tag -->
<?php include 'includes/02head_rest_inc.php'; ?>
<!-- START OF BODY -->
<body>
<?php include 'includes/03nav_inc.php'; ?>
<header>
    <h1>Chemperator</h1>
</header>
<main>
    <h2>Profilseite</h2>
<?php
if (isset($_SESSION["userid"])) {
    echo "<p>Willkommen zurück, " . $_SESSION["username"] . "!</p>
</main>";

} else {
    echo "<p>Nicht berechtigt für diesen Inhalt!</p>";
    echo "<p>Bitte <a href='signin.php'>melden Sie sich an</a> oder <a href='signup.php'>registrieren Sie sich</a>!</p>
    </main>";
}
?>
<?php include 'includes/10footer_inc.php'; ?>
</body>
</html>