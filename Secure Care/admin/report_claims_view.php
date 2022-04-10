<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$cmpny=$_POST['cmpny'];
	$fdate=$_POST['fdate'];
	$tdate=$_POST['tdate'];
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
          	
            <i class="fa fa-globe"></i>Insurance Company <?php echo strtoupper($cmpny);?>
            <small class="pull-right"><?php echo"<b>Date : ".date("d-m-Y")."</b>";?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <b><?php echo $cmpny;?> Company Patient's Claims Report </b><br>
        </div>
          <div class="col-sm-3 invoice-col">
          <b>From :  <?php echo date("d-m-Y",strtotime($fdate)); ?> </b><br>
        </div>
         <div class="col-sm-3 invoice-col">
          <b>To  :   <?php echo date("d-m-Y",strtotime($tdate));?></b><br>
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
                <th>Name</th>               
                <th>Age</th>
                <th>Gender</th> 
                <th>Contact</th> 
                <th>Hospital</th>
                <th>Doctor</th>
                <th>Diseas</th>   
                <th>Amunt</th>
                <th>Date</th>                        
                <th>Status</th>              
            </tr>
            </thead>
            <?php
				$tot=0;
				$result = $db->prepare("select * from insuranceapply where cdate>='$fdate' And cdate<='$tdate' and cmpny='$cmpny'");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++)
					{				
						 echo"<td>".$i."</td>";
						 echo"<td>".$row["pname"]."</td>";
						 echo"<td>".$row["age"]."</td>";
						 echo"<td>".$row["sex"]."</td>";										
						 echo"<td>".$row["cont1"]."</td>";	
						 echo"<td>".$row["hdname"]."</td>";
						 echo"<td>".$row["docname"]."</td>";
						 echo"<td>".$row["diseas"]."</td>";
						 echo"<td>".$row["amount"]."</td>";	
						 echo"<td>".$row["cdate"]."</td>";	
						 echo"<td>".$row["stat"]."</td>";
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
        <div class="col-xs-7">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <th>                	
                	Total
                </th>
                <td>
                   <?php 
						$result = $db->prepare("select sum(amount) as amount from insuranceapply where cdate>='$fdate' And cdate<='$tdate' and cmpny='$cmpny'");
						$result->execute();
						for($i=1; $row = $result->fetch(); $i++)
							{	
								echo "<b style='color:red; font-size:15px;'>".$row["amount"]."</b>";
							}
					
					?>
                </td>
              </tr>            
            </table>
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
          
          <a type="button" class="btn btn-danger pull-right" style="margin-right: 5px; width:180px;" href="report_claims.php">
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
  
  