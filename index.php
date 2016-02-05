<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
</head>
<body>
<section>
	<div class="container">
		<span class="menu main"><i class="fa fa-bars"></i></span>
		<div class="cities">
			<ul>
			<?php
				require('inc/cities.php');
				foreach ($cities as $city):
			?>
				<li><?php echo $city; ?></li>
			<?php
				endforeach;
			?>
			</ul>
		</div>
		<div class="data">
			<p class="city">Roker</p>
			<p class="country"></p>
			<p class="conditions">Press <span class="menu"><i class="fa fa-bars"></i></span> to begin</p>
			<p class="press"><i class="fa fa-eye"></i></p>
			<p class="temp"></p>
		</div>
	</div>
</section>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/jquery.simpleWeather.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>