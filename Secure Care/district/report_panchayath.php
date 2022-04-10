<?php
 	 require("auth.php");
  	 include('../db_connect/db.php');	
     $mdcdcid=$_SESSION['SESS_DISTR_ID'];
	 $result = $db->prepare("select * from  district where mdcdcid='$mdcdcid'");
	 $result->execute();
	 for($i=0; $row = $result->fetch(); $i++)
	 	{						
			$name=$row["name"];
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
                  <h3 class="box-title">Panchayath Wise Report</h3>
                </div>
                <div class="box-body no-padding">
				 <div class="box-body">
					<form method="post" action="report_panchayath_view.php" autocomplete="off">
                        <div class="col-md-3 col-sm-6 col-xs-12">                           
                           	<label>From Date</label>
                          	<input type="date" name="fdate" class="form-control" max="<?php echo date("Y-m-d");?>" required>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">                           
                           	<label>To Date</label>
                            <input type="date" name="tdate" class="form-control" max="<?php echo date("Y-m-d");?>" required>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">                           
                        <label>Panchayath</label>
                            <input list="panchayath" required class="form-control" name="panchayath">
                                <datalist id="panchayath">
                                    <option value="">Select</option> 
                                     <?php
                                        $result = $db->prepare("SELECT distinct(name) FROM panchayath");
                                        $result->execute();
                                        $row_count =  $result->rowcount();
                                        for($i=0; $rows = $result->fetch(); $i++)
                                        {
                                        echo '<option>'.$rows['name'].'</option>';
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
