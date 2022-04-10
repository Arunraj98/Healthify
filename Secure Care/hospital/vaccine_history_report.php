<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$uniqueid=$_POST['uniqueid'];
  	$result = $db->prepare("select * from  patient where mdcpatid = '$uniqueid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$mdcpatid=$row["mdcpatid"];
			$name=$row["name"];
			$photo=$row["photo"];
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
   <style>
		input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button{-webkit-appearance: none;margin: 0;}
	</style>

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
  
    <section class="content-header">
      <h1>
       MEDICAP
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    
     <!-- Main content -->
     <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          	
            <i class="fa fa-globe"></i> MEDICAP  Patient ID : <?php echo $mdcpatid;?> & Name :  <?php echo strtoupper($name);?>
            <small class="pull-right"><?php echo"<b>Date : ".date("d-m-Y")."</b>";?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-sm-3 invoice-col">
          <b>Medical History Report </b><br>
        </div>
          <div class="col-sm-3 invoice-col">
          <b><?php echo ""/*strtotime($fdate)*/; ?> </b><br>
        </div>
         <div class="col-sm-3 invoice-col">
          <b><?php echo ""/*strtotime($tdate)*/;?></b><br>
        </div>             
        <hr>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
        	
        
          <table class="table table-striped">
            <thead>
            <tr>
            	<th>Sl No</th>                
                <th>Hospital</th>
                <th>Doctor</th>
                <th>Diseases</th>
                <th>Vaccine</th>
                <th>Description</th>  
                <th>Certificate</th>                            
                <th>Date</th>              
            </tr>
            </thead>
            <tbody>
            <?php
				$tot=0;
				$result = $db->prepare("select * from  vaccine where mdcpatid= '$uniqueid'");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++)
					{				
						 $tot=$tot+$i;			
						 echo"<td>".$i."</td>";
						 echo"<td>".$row["hdname"]."</td>";
						 echo"<td>".$row["docname"]."</td>";										
						 echo"<td>".$row["diseas"]."</td>";	
						 echo"<td>".$row["vaccine"]."</td>";
						 echo"<td>".$row["descr"]."</td>";	
						 ?>
                         <td>
                         <a href="../admin/vacci_photo/<?php echo $row["cert"];?>" target="_blank">Download</a>
                         </td>
                         <?php
						 echo"<td>".$row["date"]."</td>";									
						 echo"</tr>";
				  }
			?>
            </tbody>
          </table>
          
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
      <hr>
        <!-- accepted payments column -->
        <div class="col-xs-3">
        	<img src="../admin/patient_photo/<?php echo $photo;?>" style="height:100px; width:100px;" class="img-circle">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <div class="table-responsive">
            
          </div>
        </div>
        <hr>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px; width:180px;" onClick="window.print() ">
            <i class="fa fa-print"></i> Print
          </button>
          
          <a type="button" class="btn btn-danger pull-right" style="margin-right: 5px; width:180px;" href="vaccine_history.php">
            <i class="fa fa-backward"></i> Back
          </a>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
	<?php
		include("include/js.php");
	?>  
    </div>
</body>
</html>
  