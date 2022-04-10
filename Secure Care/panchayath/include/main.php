<!-- /.Row Start -->
<div class="row">
	
    
    <!-- /.Doctors Start -->
    <div class="col-md-6">
    	<!-- USERS LIST -->
   		<div class="box box-danger">
   		 	<div class="box-header with-border">
      			<h3 class="box-title">Latest Hospitals</h3>
          		<div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
          		</div>
    		</div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="users-list clearfix">
               <?php
				$result = $db->prepare("select * from  hospital limit 4");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++)
					{
					?>
                <li>
                  <img src="../admin/hospital_photo/<?php echo $row["photo1"];?>" alt="User Image">
                  <a class="users-list-name" href="#"><?php echo $row["hname"];?></a>
                  <span class="users-list-date"><?php echo $row["jdate"];?></span>
                </li>
				<?php
					}
              ?> 
              </ul>
            </div>         
        </div>
    	<!--/.box -->
    </div>
    <!-- /.Doctors End-->
    
    
    <!-- /.Doctors Start -->
    <div class="col-md-6">
    	<!-- USERS LIST -->
   		<div class="box box-danger">
   		 	<div class="box-header with-border">
      			<h3 class="box-title">Latest Doctors</h3>
          		<div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
          		</div>
    		</div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="users-list clearfix">
			 <?php
                $result = $db->prepare("select * from  doctor limit 4");
                $result->execute();
                for($i=1; $row = $result->fetch(); $i++)
                    {
                ?>
                <li>
                  <img src="../admin/doctor_photo/<?php echo $row["photo1"];?>" alt="User Image">
                  <a class="users-list-name" href="#"><?php echo $row["name"];?></a>
                  <span class="users-list-date"><?php echo $row["jdate"];?></span>
                </li>                
               <?php
					}
			   ?>
              </ul>
            </div>          
        </div>
    	<!--/.box -->
    </div>
    <!-- /.Doctors End-->
</div>
<!-- /.Row-->

<div class="row">
	<div class="col-md-4">
    	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Patients</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            <?php
				$male=0;
				$female=0;
									
				$resultm = $db->prepare("select count(*) as sex from prescription where sex='male'");
				$resultm->execute();
				for($i=1; $rowm = $resultm->fetch(); $i++)
					{	
						
							$male=$male+$rowm["sex"];
										
					}
				$resultm = $db->prepare("select count(*) as sex from prescription where sex='female'");
				$resultm->execute();
				for($i=1; $rowm = $resultm->fetch(); $i++)
					{	
						
							$female=$female+$rowm["sex"];
										
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
				<div id="piechart_3d" style="width: 100%; height: 200px;"></div>
			</div>
		
		</div>	
            </div>
    	</div>
	</div>        
    <div class="col-md-8">
    	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Bookings</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">              
                    <table class="table no-margin">
                      <thead>
                        <tr>
                         <th>Name</th>
                         <th>Age</th>
                         <th>Sex</th>
                         <th>Diseases</th>
                         <th>Booking</th>
                         <th>Date</th>                    
                         <th>Time</th>
                         <th>Phone</th>                  
                         <th>Status</th>
                       </tr>
                      </thead>
                      <tbody>	
						<?php
                        $result = $db->prepare("select * from  booking where stat='Pending' limit 5");
                        $result->execute();
                        for($i=1; $row = $result->fetch(); $i++)
                            {
                            echo"<tr>";						
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
                                    <span class="label label-danger"><?php echo strtoupper($row["stat"]);?></span>
                                </td>                                
                            <?php															
                            echo"</tr>";
                            }
                        ?>	 
                    </tbody>
                  </table>     
                </div>
            </div>
            <!--
            <div class="box-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">All Booking</a>
            </div>
            -->
    	</div>  
	</div>           
</div>  
