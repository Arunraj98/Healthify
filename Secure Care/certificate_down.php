<?php
 	session_start();
  	include('db_connect/db.php');	
    $mdcpatid=$_SESSION['SESS_CERT_ID'];
	$result = $db->prepare("select * from  vaccine where mdcpatid='$mdcpatid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$cert=$row["cert"];
	}
?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Refresh" content="5; url=index.php">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Secure Care</title>
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
						<h5>Seacure Care</h5>
						<h3>Sarch anf find your needs.</h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est natus facere aperiam!
							Tenetur maiores dolore a quod pariatur ut voluptates quae saepe ea quasi laudantium,
							iste molestias inventore fuga assumenda.</p>
						<a href="index.php" class="read-more btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="form-left">
				<div class="top">
					<a href="index.php" class="brand-logo">Back</a>
				</div>
				<div class="middle">
					<h4>certificate</h4>
					<p>Download Certificate In 5 Second.</p>
				</div>
                	<br><br>
                <div class="form-input">
                	<div class="bt">
                    <a href="admin/vacci_photo/<?php echo $cert;?>" class="btn db" target="_blank" style="color:white;">Download</a>
					</div>
               	 </div>	
                <hr>
			</div>
		</div>
	</div>
</section>