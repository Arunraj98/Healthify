<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$uniqueid=$_POST['uniqueid'];
  	$result = $db->prepare("select * from  patient where mdcpatid = '$uniqueid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$mdcpatid=$row["mdcpatid"];
			$mrs=$row["mrs"];
			$name=$row["name"];
			$sex=$row["sex"];
			$dob=$row["dob"];
			$age=$row["age"];
			$qul=$row["qul"];
			$addr=$row["addr"];
			$cont1=$row["cont1"];
			$cont2=$row["cont2"];
			$email=$row["email"];
			$district=$row["district"];
			$thaluk=$row["thaluk"];
			$panchayath=$row["panchayath"];
			$ward=$row["ward"];
			$jdate=$row["jdate"];
			$blgrp=$row["blgrp"];
			$aadharno=$row["aadharno"];
			$descp=$row["descp"];
			$hdname=$row["hdname"];
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
							Patient Information 
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="database/patient_save.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>UNIQUE ID</label>
                                            <input type="text" class="form-control" name="mdcpatid" value="<?php echo $mdcpatid; ?>" readonly>
                                        </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Mr/Mrs</label>                                             
                                                <input type="text" class="form-control" name="mrs" value="<?php echo $mrs; ?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" value="<?php echo $name; ?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>                                           
                                             <input type="text" class="form-control" name="sex" value="<?php echo $sex; ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date Of Birth</label>
                                          	<input type="date"  name="dob"   class="form-control" value="<?php echo $dob; ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="number"  name="age"   class="form-control" value="<?php echo $age; ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Qualification</label>
                                           <input type="text"  name="qul"   class="form-control" value="<?php echo $qul; ?>" readonly>
                                          </div>
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                          <textarea  name="addr" rows="4"   class="form-control" readonly><?php echo $addr; ?></textarea>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="text"  name="cont1"   class="form-control" value="<?php echo $cont1; ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Emergency Contact No</label>
                                          	<input type="text"  name="cont2"   class="form-control" value="<?php echo $cont2; ?>" readonly>
                                          </div>
                                         <div class="col-md-12 col-sm-6 col-xs-12">
                                                <label>Email ID</label>
                                                <input type="email"  name="email"  class="form-control" value="<?php echo $email; ?>" readonly>
                                         </div>
                                       
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Join Information</strong>
                                    </div>                                                                         
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>District</label>                                      
                                             <input type="text" class="form-control" name="district" value="<?php echo $district; ?>" readonly>
                                      </div>
                                      <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Thaluk</label>                                       
                                            <input type="text" class="form-control" name="thaluk" value="<?php echo $thaluk; ?>" readonly>
                                      </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Panchayath</label>                                      
                                            <input type="text" class="form-control" name="panchayath" value="<?php echo $panchayath; ?>" readonly>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Ward</label>
                                            <input type="text"  name="ward"  class="form-control" value="<?php echo $ward; ?>" readonly>
                                     </div>								
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Join Date</label>
										<input type="text"  name="jdate"  class="form-control" value="<?php echo $jdate; ?>" readonly>
									</div>	    
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Blood Group</label>                                       
                                         <input type="text" class="form-control" name="blgrp" value="<?php echo $blgrp; ?>" readonly>
                                      </div>                               
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Aadhar No</label>
                                            <input type="text"  name="aadharno"  class="form-control" value="<?php echo $aadharno; ?>" readonly>
                                    </div>                                     
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Photo</label>
                                            <a href="patient_photo/<?php echo $photo;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>	
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Description</label>
                                           <textarea  name="descp"   class="form-control" rows="7" readonly><?php echo $descp; ?></textarea>
                                     </div>                                     
                                     <div class="col-md-12 col-sm-6 col-xs-12">
                                            <label>Hospital</label>
                                            <input type="text"  name="hdname"  class="form-control" value="<?php echo $hdname;?>" readonly>
                                    </div>                                                
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">                            
                            	 <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
                                 <a href="patient_search.php"  class="btn btn-block btn-danger">Back</a>
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
