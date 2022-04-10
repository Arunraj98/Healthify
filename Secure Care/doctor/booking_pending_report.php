<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$hbkid=$_GET['hbkid'];
  	$result = $db->prepare("select * from  booking where hbkid = '$hbkid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$mdcpatid=$row["mdcpatid"];
			$name=$row["pname"];
			$sex=$row["sex"];
			$age=$row["age"];
			$pcont1=$row["pcont1"];
			$bkname=$row["bkname"];
			$hcntn1=$row["hcntn1"];
			$dat=$row["dat"];
			$tm=$row["tm"];
			$bkname=$row["bkname"];
			$hcntn1=$row["hcntn1"];
			
			$diseases=$row["diseases"];
			$descrp=$row["descrp"];
			$date=$row["date"];
			
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
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  					  <div class="panel-heading ">
							Doctor Book
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="database/booking.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Patient Information</strong>
                                        </div>
                                    
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                              <label>UNIQUE ID</label>
                                              <input type="hidden"  name="hbkid" value="<?php echo $hbkid;?>">
                                              <input type="text" class="form-control" name="mdcpatid" value="<?php echo $mdcpatid;?>" readonly>
                                          </div>                                                                                
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="pname"   class="form-control" value="<?php echo $name;?>" readonly>
                                          </div>
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="text"  name="age"   class="form-control" value="<?php echo $age;?>" readonly>
                                          </div>
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                           <input type="text"  name="sex"   class="form-control" value="<?php echo $sex;?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                           <input type="text"  name="pcont1"   class="form-control" value="<?php echo $pcont1;?>" readonly>
                                          </div>                                                                                                                   
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Date</label>
                                            <input type="date"  name="dat"  class="form-control" value="<?php echo $dat;?>">
                                         </div> 
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Time</label>
                                            <input type="time"  name="tm"  class="form-control" value="<?php echo $tm;?>">
                                         </div>                                                                                                                                                                            				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Doctor Information</strong>
                                    </div>
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Name</label>
                                        <input type="text"  name="bkname"  class="form-control"  value="<?php echo $bkname;?>" readonly>
                                     </div>  
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Contact No</label>
                                        <input type="text"  name="hcntn1"  class="form-control"  value="<?php echo $hcntn1;?>" readonly>
                                     </div>                                    
                                     <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Date</label>
										<input type="text"  name="date"  class="form-control" value="<?php echo $date;?>" readonly>
									</div>	
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Diseases</label>
                                        <input type="text"  name="diseases"  class="form-control"  value="<?php echo $diseases;?>" readonly>
                                     </div>                                   
                                   	 <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Description</label>
                                      	<textarea  name="descrp" rows="1"   class="form-control" readonly><?php echo $descrp;?></textarea>
                                      </div>  
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Status</label>
                                      		<select class="form-control" name="stat" required>	
                                            	<option value="">Select</option>
                                                <option>Accept</option>
                                                <option>Cancel</option>
                                            </select>
                                      </div>                                      				
                                                                                                                                       
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Book" class="btn btn-block btn-primary">
                            	 </div>
                                 
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Cancel" class="btn btn-block btn-danger" id="cls1">
                            	 </div>
                                 
                            </div>
                            
							</form>
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
