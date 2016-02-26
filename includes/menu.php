<nav role="navigation" class="nav">
	<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
		<ul class="list-inline text-right">
			<li><a href="index.php" <?php if ($currentPage=='index.php' ) { echo 'id="here"';} ?>>Home</a></li>
			<li><a href="services.php" <?php if ($currentPage=='services.php' ) { echo 'id="here"';} ?>>Services</a></li>
			<li><a href="about.php" <?php if ($currentPage=='about.php' ) { echo 'id="here"';} ?>>About Us</a></li>
			<li><a href="reviews.php" <?php if ($currentPage=='reviews.php' ) { echo 'id="here"';} ?>>Reviews</a></li>
			<li><a href="quote.php" <?php if ($currentPage=='quote.php' ) { echo 'id="here"';} ?>>Get a Quote</a></li>
			<li><a href="jobs.php" <?php if ($currentPage=='jobs.php' ) { echo 'id="here"';} ?>>Jobs</a></li>
		</ul>

</nav>
