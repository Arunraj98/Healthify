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
              <h3 class="box-title">District Information</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div table-responsive">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                    <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Incharge</th>
                  	 <th>Address</th>
                     <th>Contact</th>
                     <th>Email</th>                    
                     <th>Site</th>
                     <th>Edit</th>
                   </tr>
                  </thead>
                <tbody>		
                	<?php
					$result = $db->prepare("select * from  district");
					$result->execute();
					for($i=1; $row = $result->fetch(); $i++)
						{
						$mdcdcid = $row['mdcdcid'];
						echo"<tr>";						
							echo"<td>".$row["mdcdcid"]."</td>";
							echo"<td>".$row["name"]."</td>";
							echo"<td>".$row["inchaprsn"]."</td>";	
							echo"<td>".$row["addr"]."</td>";	
							echo"<td>".$row["cntn1"]."</td>";	
							echo"<td>".$row["email"]."</td>";	
							echo"<td>".$row["wbaddr"]."</td>";						
						  ?>
						  <td>
							<a href="district_edit_update.php<?php echo '?mdcdcid='.$mdcdcid; ?>" class=" btn btn-sm btn-primary">&nbsp;Edit</a>
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
