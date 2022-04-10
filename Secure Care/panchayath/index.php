<?php
	require("auth.php");
  	include('../db_connect/db.php');	
	$hostid=$_SESSION['SESS_PANCHTH_ID'];
?>	
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<title>Secure Care</title>
    <link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php
	include("include/css.php");
	?>  
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
	
    <header class="main-header"> 
    <?php
	include("include/header.php");
	?>
	</header>
    
	<aside class="main-sidebar">
	<?php
	include("include/leftmenu.php");
	?>
	</aside>
    
	<div class="content-wrapper">
	<?php
	include("include/topmenu.php");
	?>
	</div>
    
      <div class="row well" style="background-color:#FAFAFA;">
      
        	<?php
				include("include/main.php");
			?>

		</div>
</section>           
</div>
  
 <?php
  include("include/footer.php");
	?>
		<div class="control-sidebar-bg"></div>
		</div>
        
<?php
  include("include/js.php");
?>

</body>
</html>
