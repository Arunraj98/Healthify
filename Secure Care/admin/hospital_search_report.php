<?php
 	 require("auth.php");
  	include('../db_connect/db.php');	
    $hname=$_POST["hname"];
	$result = $db->prepare("select * from  hospital where hname='$hname'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$hostid=$row["hostid"];
		$hname=$row["hname"];
		$cntn1=$row["cntn1"]; 
		$cntn2=$row["cntn2"]; 
		$location=$row["location"]; 
		$addr=$row["addr"]; 
		$waddr=$row["waddr"]; 
		$email=$row["email"]; 
		$special=$row["special"]; 
		$licen=$row["licen"]; 
		$seplty=$row["seplty"]; 
		$typ=$row["typ"]; 
		$jdate=$row["jdate"]; 
		$photo1=$row["photo1"]; 
		$photo2=$row["photo2"]; 
		$photo3=$row["photo3"]; 
		$exp=$row["exp"]; 
		$username=$row["username"]; 
		$password=$row["password"]; 
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
							Hospital Information
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="data_save/doctor_save.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Hospital Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Hospital ID</label>
                                            <input type="text" class="form-control" name="dcid"  required="" value="<?php echo $hostid;?>" readonly>
                                        </div>                                                                                
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control"  value="<?php echo $hname;?>" readonly>
                                          </div>                                                                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="number"  name="cntn1"   class="form-control"  value="<?php echo $cntn1;?>" readonly>  
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                           <input type="number"  name="cntn2"   class="form-control"  value="<?php echo $cntn2;?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Location</label>
                                           <input type="text"  name="qul"   class="form-control"  value="<?php echo $location;?>" readonly>
                                          </div>
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                          <textarea  name="addr" rows="3"   class="form-control" readonly><?php echo $addr;?></textarea>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Web Address</label>
                                          	<input type="url"  name="cont"   class="form-control"  value="<?php echo $waddr;?>" readonly>
                                          </div>
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Email ID</label>
                                            <input type="email"  name="email"  class="form-control"  value="<?php echo $email;?>" readonly>
                                         </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Specialization</label>
                                            <input type="text"  name="special"  class="form-control"  value="<?php echo $special;?>" readonly>
                                          </div> 
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>License No</label>
                                           	<input type="text"  name="licen"  class="form-control"  value="<?php echo $licen;?>" readonly>
                                        </div> 
                                                          				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Document Information</strong>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Speciality</label>
                                           	<input type="text"  name="licen"  class="form-control"  value="<?php echo $seplty;?>" readonly>
                                     </div>  
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Type</label>
                                           	<input type="text"  name="licen"  class="form-control"  value="<?php echo $typ;?>" readonly>
                                      </div>                                  				
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Join Date</label>
											<input type="text"  name="licen"  class="form-control"  value="<?php echo $jdate;?>" readonly>
									</div>	                               
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Photo</label>
                                            <a href="hospital_photo/<?php echo $photo1;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>	
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Photo</label>
                                            <a href="hospital_photo/<?php echo $photo2;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>License</label>
                                           <a href="hospital_photo/<?php echo $photo3;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Experience</label>
                                           <textarea  name="des"   class="form-control" rows="6" readonly><?php echo $exp;?></textarea>
                                     </div> 
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Username</label>
                                            	<input type="text"  name="licen"  class="form-control"  value="<?php echo $username;?>" readonly>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Password</label>
                                            	<input type="text"  name="licen"  class="form-control"  value="<?php echo "#######";?>" readonly>
                                    </div>                                                  
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <a href="hospital_search.php" class="btn btn-block btn-danger">Back</a>
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
