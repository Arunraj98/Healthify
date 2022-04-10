<?php
  	require("auth.php");
  	include('../db_connect/db.php');	
	$district=$_POST['district'];
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
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  					  <div class="panel-heading ">
							Patient Census
                        </div>
						<div class="panel-body">  
                        <?php
								$male=0;
								$female=0;
													
								$resultm = $db->prepare("select count(*) as sex from prescription where district='$district' and sex='male'");
								$resultm->execute();
								for($i=1; $rowm = $resultm->fetch(); $i++)
									{	
										$male=$male+$rowm["sex"];
									}
								
								$resultf = $db->prepare("select count(*) as sex from prescription where district='$district' and sex='female'");
								$resultf->execute();
								for($i=1; $rowf = $resultf->fetch(); $i++)
									{	
										$female=$female+$rowf["sex"];
									}
						?>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
						<script type="text/javascript">
                          google.charts.load("current", {packages:["corechart"]});
                          google.charts.setOnLoadCallback(drawChart);
                          function drawChart() {
                            
                            var data = google.visualization.arrayToDataTable([
							
                              ['Total', 'People'],
                              ['Male', <?php echo $male;?>],
                              ['Female', <?php echo $female;?>],  						
                            ]);
                    
                            var options = {         
                              is3D: true,
                            };
                    
                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                            chart.draw(data, options);
                          }
                        </script>
                        <div class="col-sm-12 about-grid">
                            <div class="about-grid-main">
                                <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
                            </div>
                        
                        </div>	
          <!-- /.box -->
                         </div>
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
</body>
</html>
