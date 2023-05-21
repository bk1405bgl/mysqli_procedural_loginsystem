<?php // The Navigation Links are the same on every page, so they could be outsourced without any problems. ?>
<nav>
		<ul>
			<li><a href="/">Home</a></li>
            <?php
            if (isset($_SESSION["userid"])) {
                echo "<li><a href='profile.php'>Profile</a></li>";
                echo "<li><a href='includes/08logout_inc.php'>Log out</a></li>";
            } else {
                echo "<li><a href='signin.php'>Sign in</a></li>";
                echo "<li><a href='signup.php'>Sign up</a></li>";
            }
            ?>
		</ul>
	</nav>
<?php // The end of the Navigation Links. ?>