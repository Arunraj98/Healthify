<?php
include('../db_connect/db.php');	
require("auth.php");
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<title>Secure Care</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php
	include("include/css.php");
	?>    
     <style>
		td{text-transform:uppercase;}
	</style>
    <link rel="stylesheet" href="../css/custom_style.css" />
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
        <div class="col-md-12">
        
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Booking Accept</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                    <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Age</th>
                     <th>Sex</th>
                  	 <th>Diseases</th>
                     <th>Booking</th>
                     <th>Booking Date</th>                    
                     <th>Time</th>
                     <th>Contact No</th>                  
                     <th>Status</th>
                   </tr>
                  </thead>
                  <tbody>	
                  	<?php
					$mdcpatid=$_SESSION['SESS_HSP_ID'];
					$result = $db->prepare("select * from  booking where bkid='$mdcpatid' and stat='Accept'");
					$result->execute();
					for($i=1; $row = $result->fetch(); $i++)
						{
						$mdcpatid = $row['mdcpatid'];
						echo"<tr>";						
							echo"<td>".$row["mdcpatid"]."</td>";
							echo"<td>".$row["pname"]."</td>";
							echo"<td>".$row["age"]."</td>";	
							echo"<td>".$row["sex"]."</td>";	
							echo"<td>".$row["diseases"]."</td>";	
							echo"<td>".$row["bkname"]."</td>";	
							echo"<td>".$row["dat"]."</td>";
							echo"<td>".$row["tm"]."</td>";	
							echo"<td>".$row["hcntn1"]."</td>";
						?>
                        	<td>
	                        	<a href="#" class=" btn btn-sm btn-info">&nbsp;Accept</a>
							</td>                                
                        <?php														
						echo"</tr>";
						}
					?>	 
                				
				</tbody>
              </table>
              </div>
              	<a href="index.php" style="float:right" class="btn btn-facebook btn-primary m_t_1">Back</a>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>
