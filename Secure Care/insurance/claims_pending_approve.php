<?php
  require("auth.php");
  include('../db_connect/db.php');	
	$inscmpid=$_GET['inscmpid'];
  	$result = $db->prepare("select * from  insuranceapply where inscmpid = '$inscmpid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$mdcpatid=$row["mdcpatid"];
			$name=$row["pname"];
			$sex=$row["sex"];
			$age=$row["age"];
			$cont1=$row["cont1"];
			$hdname=$row["hdname"];
			$docname=$row["docname"];
			$aadharno=$row["aadharno"];
			$cdate=$row["cdate"];
			$diseas=$row["diseas"];
			
			$cmpny=$row["cmpny"];
			$iccntn1=$row["iccntn1"];
			$descpd=$row["descpd"];
			$amount=$row["amount"];
			$diseas=$row["diseas"];
			
			$dat=$row["dat"];
			$tm=$row["tm"];
			
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
							Claims Approve
                        </div>
							<div class="panel-body">     
                            <form method="post" action="database/claims_apply.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Patient Information</strong>
                                        </div>
                                    
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                              <label>UNIQUE ID</label>
                                               <input type="hidden" name="inscmpid" value="<?php echo $inscmpid;?>">
                                               
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
                                           <input type="text"  name="cont1"   class="form-control" value="<?php echo $cont1;?>" readonly>
                                          </div>                                                                                                                   
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Hospital</label>
                                            <input type="text"  name="hdname"  class="form-control" value="<?php echo $hdname;?>" readonly>
                                         </div> 
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Doctor</label>
                                            <input type="text"  name="docname"  class="form-control" value="<?php echo $docname;?>" readonly>
                                         </div> 
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Aadhar No</label>
                                            <input type="text"  name="aadharno"  class="form-control" value="<?php echo $aadharno;?>" readonly>
                                         </div> 
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Date</label>
                                            <input type="text"  name="cdate"  class="form-control" value="<?php echo $cdate;?>" readonly>
                                         </div>   
                                                                                                                                                                                                                  				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Company Information</strong>
                                    </div>
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Name</label>
                                        <input type="text"  name="cmpny"  class="form-control" value="<?php echo $cmpny;?>" readonly>
                                     </div>  
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Contact No</label>
                                        <input type="text"  name="iccntn1"  class="form-control" value="<?php echo $iccntn1;?>" readonly>
                                     </div>                                                                                                                                            
                                   	 <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Diseases Description</label>
                                      	<textarea  name="descpd" rows="2"   class="form-control" readonly><?php echo $descpd;?></textarea>
                                      </div>
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Amount</label>
                                        <input type="text"  name="amount"  class="form-control" value="<?php echo $amount;?>">
                                     </div>  
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Diseases</label>
                                        <input type="text"  name="diseas"  class="form-control" value="<?php echo $diseas;?>" readonly>
                                     </div>                                         				
                                     <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Date</label>
										<input type="date"  name="dat"  class="form-control" value="<?php echo $dat;?>">
									</div>	 
                                     <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Time</label>
										<input type="time"  name="tm"  class="form-control" value="<?php echo $tm;?>">
									</div>	   
                                     <div class="col-md-12 col-sm-6 col-xs-12">
										<label style="float:left">Status</label>
										<select name="stat" class="form-control">
                                        	<option value="">Select</option>
                                            <option>Approve</option>
                                            <option>Cancel</option>
                                        </select>
									</div>                                                                                                 
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Apply" class="btn btn-block btn-primary" id="save1">
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
