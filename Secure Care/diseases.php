<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HEALTHIFY</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <script src='assets/js/jquery.min.js'></script>
</head>
<body>

<section class="w3l-login-6">
	<div class="login-hny">
		<div class="form-content">

			<div class="form-right">
				<div class="overlay">
					<div class="grid-info-form">
						<h5>HEALTHIFY</h5>
						<h3>Search and find your needs.</h3>
						<p>We are satisfied only when we see you are fit and fine.</p>
						<a href="index.php" class="read-more btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="form-left">
				<div class="top">
					<a href="index.php" class="brand-logo">Back</a>
				</div>
				<div class="middle">
					<h4>Search Diseases</h4>
					<p>Welcome! Please enter your disease.</p>
				</div>
				<form action="diseases_view.php" method="post" class="signin-form" autocomplete="off">
					<div class="form-input">
						<label>Name</label>
						<input type="text" name="diseases" placeholder="Search diseases" required />
					</div>					
					<button class="btn">Search</button>
				</form>
			</div>
		</div>
	</div>
</section>