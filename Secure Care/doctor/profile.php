<?php
 	 require("auth.php");
  	include('../db_connect/db.php');	
    $mdcdocid=$_SESSION['SESS_DOC_ID'];
	$result = $db->prepare("select * from  doctor where mdcdocid='$mdcdocid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$mdcdocid=$row["mdcdocid"];
		$mrs=$row["mrs"];
		$name=$row["name"];
		$sex=$row["sex"];
		$dob=$row["dob"];
		$age=$row["age"];
		$qul=$row["qul"];
		$addr=$row["addr"];
		$cont=$row["cont"];
		$email=$row["email"];
		$special=$row["special"];
		$licen=$row["licen"];
		$exp=$row["exp"];
		$jdate=$row["jdate"];
		$bsalary=$row["bsalary"];
		$aadharno=$row["aadharno"];
		$designa=$row["designa"];
		$des=$row["des"];
		$username=$row["username"];
		$password=$row["password"];
		$hname=$row["hname"];
		
		$photo1=$row["photo1"];
		$photo2=$row["photo2"];
		$photo3=$row["photo3"];
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
							Profile Information
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="database/profile_update.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Doctor ID</label>
                                            <input type="text" class="form-control" name="mdcdocid"  value="<?php echo $mdcdocid;?>" readonly>
                                        </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Mr/Mrs</label>                                             
                                                 <input type="text" class="form-control" name="mrs"  value="<?php echo $mrs;?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" value="<?php echo $name;?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Sex</label>
                                            <input type="text" class="form-control" name="sex"  value="<?php echo $sex;?>" readonly>                                         
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date Of Birth</label>
                                          	<input type="text"  name="dob"   class="form-control"  value="<?php echo $dob;?>" readonly> 
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="number"  name="age"   class="form-control" value="<?php echo $age;?>"> 
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Qualification</label>
                                           <input type="text"  name="qul"   class="form-control"  value="<?php echo $qul;?>"> 
                                          </div>
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                          <textarea  name="addr" rows="4"   class="form-control"><?php echo $addr;?></textarea>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="text"  name="cont"   class="form-control" value="<?php echo $cont;?>"> 
                                          </div>
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Email ID</label>
                                                <input type="email"  name="email"  class="form-control" value="<?php echo $email;?>"> 
                                         </div>
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Specialization</label>
                                                <input type="text"  name="special"  class="form-control" value="<?php echo $special;?>"> 
                                         </div> 
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>License</label>
                                               <input type="text"  name="licen"  class="form-control" value="<?php echo $licen;?>" readonly> 
                                        </div> 
                                                          				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Join Information</strong>
                                    </div>
                                        
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label style="float:left">Experience</label>
                                           <input type="text"  name="exp"  class="form-control" value="<?php echo $exp;?>"> 
                                    </div>
                                    									
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Join Date</label>
										<input type="date"  name="jdate"  class="form-control"  value="<?php echo $jdate;?>" readonly> 
									</div>	
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Basic Salary</label>
                                            <input type="text"  name="bsalary"  class="form-control"  value="<?php echo $bsalary;?>" readonly> 
                                    </div>	
                                    							
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Aadhar No</label>
                                            	<input type="text"  name="aadharno"  class="form-control"  value="<?php echo $aadharno;?>" readonly>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <label>Desgination</label>
                                           <input type="text"  name="designa"  class="form-control"  value="<?php echo $designa;?>">
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Photo</label>
                                           <a href="../admin/doctor_photo/<?php echo $photo1;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>	
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Certificate</label>
                                            <a href="../admin/doctor_photo/<?php echo $photo1;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Certificate</label>
                                            <a href="../admin/doctor_photo/<?php echo $photo1;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Description</label>
                                           <textarea  name="des"   class="form-control" rows="4"><?php echo $des;?></textarea>
                                     </div> 
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Username</label>
                                            	<input type="text"  name="username"  class="form-control" value="<?php echo $username;?>" readonly>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Password</label>
                                            	<input type="password"  name="password"  class="form-control" value="<?php echo $password;?>" readonly>
                                    </div>    
                                     <div class="col-md-12 col-sm-6 col-xs-12">
                                            <label>Hospital</label>
                                            <input type="text"  name="hname"  class="form-control" value="<?php echo $mdcdocid;?>" readonly>
                                    </div>                                                
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                 	<input type="submit" value="Update" class="btn btn-block btn-primary">
                            	 </div>
                                                            
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <a href="index.php" class="btn btn-block btn-danger">Back</a>
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
