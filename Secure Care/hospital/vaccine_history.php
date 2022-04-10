<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$hostid=$_SESSION['SESS_HSP_ID'];
  	$result = $db->prepare("select * from  hospital where hostid = '$hostid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$hname=$row["hname"];
		}
?>
<!DOCTYPE html>
<html>

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
      <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Vaccine Certificate Search</h3>
                </div>
                
                <div class="box-body no-padding">
				 <div class="box-body">
				<form method="post" action="vaccine_history_report.php" autocomplete="off">
                      <div class="col-md-3 col-sm-6 col-xs-12">                           
                        <label>Unique Id</label>
                            <input list="uniqueid" required class="form-control" name="uniqueid">
                                <datalist id="uniqueid">
                                    <option value="">Select</option> 
                                     <?php
										$result = $db->prepare("SELECT distinct mdcpatid  FROM vaccine");
										$result->execute();
										$row_count =  $result->rowcount();
										for($i=0; $rows = $result->fetch(); $i++)
										{
										echo '<option>'.$rows['mdcpatid'].'</option>';
										}
                                    ?>	                                         					
                                </datalist>
                        </div>
                         <div class="col-md-2 col-sm-6 col-xs-12">                           
                           	<label>&nbsp;</label>
                            <input type="submit" value="Search" class="btn btn-block btn-primary">
                        </div>

                        
                </form>		  		
            	</div>
		 </div>
		
	  </div>
	</div>
  </div>
</div>
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
	</div>
</body>
</html>