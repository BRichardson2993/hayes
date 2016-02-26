<?php
include './includes/title.php';
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Hayes Lawn &amp; Landscape
			<?php if (isset($title)) echo "&#8212;{$title}";
		?>
		</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<body>
		<div class="row">
			<header role="banner">
				<div class="col-md-8">
					<img src="images/Hayes_Logo_lg.png" alt="hayes lawn and landscaping logo">
				</div>
				<div class="col-md-4 text-right bannerAddress">
					<p>5016 N. Meridian Ave</p>
					<p>Oklahoma City, OK 73172</p>
					<p class="phone">&lpar;405&rpar; 313-4929</p>
					<p>hayes.austin@hotmail.com</p>
				</div>
			</header>
		</div>
		<nav role="navigation" class="nav">
			<ul class="list-inline text-right">
				<li><a href="index.html" target="_blank">Home</a></li>
				<li><a href="services.php" <?php if ($currentPage=='services.php' ) { echo 'id="here"';} ?>>Services</a></li>
				<li><a href="about.php" <?php if ($currentPage=='about.php' ) { echo 'id="here"';} ?>>About Us</a></li>
				<li><a href="reviews.php" <?php if ($currentPage=='reviews.php' ) { echo 'id="here"';} ?>>Reviews</a></li>
				<li><a href="quote.php" <?php if ($currentPage=='quote.php' ) { echo 'id="here"';} ?>>Get a Quote</a></li>
				<li><a href="jobs.php" <?php if ($currentPage=='jobs.php' ) { echo 'id="here"';} ?>>Jobs</a></li>
			</ul>

		</nav>
		<div class="banner">
			<img src="images/finished_3.png" alt="">
		</div>
		<blockquote>
			<p>At Hayes Lawn &amp; Landscaping we strive to ensure that all of our customers are beyond satisfied at all times.
				<br> I personally ask every client to please stay in touch and give us feedback on our service level.</p>
			<br>
			<p>I love working outside with the crew to make sure that our team is consistently doing the best work possible. It&rsquo;s been wonderful seeing our business grow over the years! God has been so good to me and my family and we are so thankful for our customers&rsquo; support and allowing us to work with them.</p>
			<br>

			<p><i>&#8212;Austin Hayes, owner<i></p>
			</blockquote>

			<footer>
				<?php
		$file = './includes/footer.php';
		if (file_exists($file) && is_readable($file)) {
		require $file;
			} else {
		throw new Exception("$file can't be found");
			}
		?>
			</footer>
	</body>

	</html>
