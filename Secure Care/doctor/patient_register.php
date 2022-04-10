<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$mdcdocid=$_SESSION['SESS_DOC_ID'];
  	$result = $db->prepare("select * from  doctor where mdcdocid = '$mdcdocid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$dname=$row["name"];
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
							Add New Patient
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
                                            <input type="text" class="form-control" name="mdcpatid"  required="" value="<?php echo"MDCPAT".rand(98745896,1); ?>" readonly>
                                        </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Mr/Mrs</label>
                                                <select class="form-control"  name="mrs"  required>
                                                    <option value="">Select</option>
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                </select>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" required title="CAPS ONLY" pattern="[a-zA-Z]*">
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                            <select class="form-control"  name="sex"  required>
                                                    <option value="">Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                             </select>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date Of Birth</label>
                                          	<input type="date"  name="dob"   class="form-control" required max="<?php echo date("Y-m-d");?>">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="text"  name="age"   class="form-control" pattern="[0-9]*">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Qualification</label>
                                           <input type="text"  name="qul"   class="form-control">
                                          </div>
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                          <textarea  name="addr" rows="4"   class="form-control" required></textarea>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="text"  name="cont1"   class="form-control" required maxlength="10" minlength="10" pattern="[0-9]*">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Emergency Contact No</label>
                                          	<input type="text"  name="cont2"   class="form-control" required maxlength="10" minlength="10" pattern="[0-9]*">
                                          </div>
                                         <div class="col-md-12 col-sm-6 col-xs-12">
                                                <label>Email ID</label>
                                                <input type="email"  name="email"  class="form-control" required>
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
                                        <input list="district" required class="form-control" name="district" >
                                            <datalist id="district">
                                                <option value="">Select</option> 
                                                 <?php
                                                    $result = $db->prepare("SELECT distinct(name) FROM district");
                                                    $result->execute();
                                                    $row_count =  $result->rowcount();
                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                    {
                                                    echo '<option>'.$rows['name'].'</option>';
                                                    }
                                                ?>	                                         					
                                            </datalist>
                                      </div>
                                      <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Thaluk</label>
                                        <input list="thaluk" required class="form-control" name="thaluk" >
                                            <datalist id="thaluk">
                                                <option value="">Select</option> 
                                                 <?php
                                                    $result = $db->prepare("SELECT distinct(thaluk) FROM patient");
                                                    $result->execute();
                                                    $row_count =  $result->rowcount();
                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                    {
                                                    echo '<option>'.$rows['thaluk'].'</option>';
                                                    }
                                                ?>	                                         					
                                            </datalist>
                                      </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Panchayath</label>
                                        <input list="panchayath" required class="form-control" name="panchayath">
                                            <datalist id="panchayath">
                                                <option value="">Select</option> 
                                                 <?php
                                                    $result = $db->prepare("SELECT distinct(name) FROM panchayath");
                                                    $result->execute();
                                                    $row_count =  $result->rowcount();
                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                    {
                                                    echo '<option>'.$rows['name'].'</option>';
                                                    }
                                                ?>	                                         					
                                            </datalist>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Ward</label>
                                            <input type="text"  name="ward"  class="form-control" required>
                                     </div>								
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Join Date</label>
										<input type="date"  name="jdate"  class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
									</div>	    
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Blood Group</label>
                                        <select class="form-control"  name="blgrp"  required>
                                                <option value="">Select</option>
                                                <option>AB+</option>
                                                <option>O-</option>
                                                <option>O+</option>
                                                <option>AB-</option>
                                                <option>A+</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                         </select>
                                      </div>                               
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Aadhar No</label>
                                            	<input type="text"  name="aadharno"  class="form-control" required>
                                    </div>                                     
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Photo</label>
                                            <input type="file"  name="photo1"  class="form-control" required>
                                    </div>	
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Description</label>
                                           <textarea  name="descp"   class="form-control" rows="7" required></textarea>
                                     </div>                                     
                                     <div class="col-md-12 col-sm-6 col-xs-12">
                                            <label>Doctor</label>
                                            <input type="text"  name="hdname"  class="form-control" value="<?php echo $dname;?>" readonly>
                                    </div>                                                
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary" id="save1">
                            	 </div>
                                 
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Reset" class="btn btn-block btn-danger" id="cls1">
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
