<?php include 'includes/01doctype_inc.php'; ?>
<!-- Individual title for every single page -->
<title>Welcome</title>
<!-- End of title tag -->
<?php include 'includes/02head_rest_inc.php'; ?>
<!-- START OF BODY -->
<body>
<?php include 'includes/03nav_inc.php'; ?>
<header>
    <h1>Chemperator</h1>
</header>
<main>
    <h2>Dashboard</h2>
    <?php echo "Hello World"; ?>
    <div class="card-container">
    <div class="card">
        Anzahl Kunden: 499
    </div>
    <div class="card">
        Anzahl Produkte: 399
    </div>
    <div class="card">
        Anzahl Bestellungen: 299
    </div>
    </div>
</main>
<?php include 'includes/10footer_inc.php'; ?>
</body>
</html>