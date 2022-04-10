<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$uniqueid=$_POST['uniqueid'];
  	$result = $db->prepare("select * from  prescription where mdcpatid = '$uniqueid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$mdcpatid=$row["mdcpatid"];
			$name=$row["name"];
			$sex=$row["sex"];
			$dob=$row["dob"];
			$age=$row["age"];
			$cont1=$row["cont1"];
			$blgrp=$row["blgrp"];			
			$hdname=$row["hdname"];
			$docname=$row["docname"];
			
			$diseas=$row["diseas"];
			$cdate=$row["cdate"];
			$diseasdesc=$row["diseasdesc"];
			$prescriptn=$row["prescriptn"];
		}
	
	 $mdcdocid=$_SESSION['SESS_DOC_ID'];
	$result = $db->prepare("select * from  doctor where mdcdocid='$mdcdocid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{					
		$doctor=$row["name"];
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
                            
                            <form method="post" action="database/doctor_amount.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>UNIQUE ID</label>
                                            <input type="text" class="form-control" name="mdcpatid" value="<?php echo $mdcpatid;?>" readonly>
                                        </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" value="<?php echo $name;?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                           	 <input type="text"  name="sex"   class="form-control" value="<?php echo $sex;?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date Of Birth</label>
                                          	<input type="date"  name="dob"   class="form-control" value="<?php echo $dob;?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="number"  name="age"   class="form-control" value="<?php echo $age;?>" readonly>
                                          </div>    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="text"  name="cont1"   class="form-control" value="<?php echo $cont1;?>" readonly>
                                          </div>  
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Blood Group</label>
                                           <input type="text"  name="blgrp"   class="form-control" value="<?php echo $blgrp;?>" readonly>
                                          </div> 
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Hospital</label>
                                               <input type="text"  name="hdname"   class="form-control" value="<?php echo $hdname;?>" readonly>
                                         </div> 
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Doctor</label>
                                             <input type="text"  name="docname"   class="form-control" value="<?php echo $docname;?>" readonly>
                                        </div>    
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Diseases</label>
                                               <input type="text"  name="diseas"   class="form-control" value="<?php echo $diseas;?>" readonly>
                                        </div> 
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Date</label>
                                               <input type="text"  name="cdate"   class="form-control" value="<?php echo $cdate;?>" readonly>
                                        </div>                              
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Treatment Information</strong>
                                    </div>                                                                                                                                                                                                             
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Diseases Description</label>
                                           <textarea  name="diseasdesc"   class="form-control" rows="4" readonly><?php echo $diseasdesc;?></textarea>
                                     </div>                                      
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Prescription</label>
                                           <textarea  name="prescriptn"   class="form-control" rows="4" readonly><?php echo $prescriptn;?></textarea>
                                     </div>                                         
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Amount</label>
                                       <input type="number"  name="amount"   class="form-control" required>
                                     </div>	
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Date</label>
                                       <input type="date"  name="date"   class="form-control" required>
                                     </div>	
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Dcotor</label>
                                       <input type="text"  name="doctor"   class="form-control" value="<?php echo $doctor;?>" readonly>
                                     </div>	 	                                  
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary">
                            	 </div>                         
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 	<a href="bill_invoice.php" class="btn btn-block btn-danger">Back</a>
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
