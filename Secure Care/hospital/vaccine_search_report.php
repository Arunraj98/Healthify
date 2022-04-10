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
                            
                            <form method="post" action="database/vaccine_save.php" enctype="multipart/form-data" autocomplete="off">
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
                                               <input type="text"  name="mrs"   class="form-control" value="<?php echo $mrs; ?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" value="<?php echo $name; ?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                           	 <input type="text"  name="sex"   class="form-control" value="<?php echo $sex; ?>" readonly>
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
                                           <label>Contact No</label>
                                          	<input type="text"  name="cont1"   class="form-control" value="<?php echo $cont1; ?>" readonly>
                                          </div>  
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Blood Group</label>
                                           <input type="text"  name="blgrp"   class="form-control" value="<?php echo $blgrp; ?>" readonly>
                                          </div>                               
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                             <label>Aadhar No</label>
                                              <input type="text"  name="aadharno"   class="form-control" value="<?php echo $aadharno; ?>" readonly>
                                          </div>                                           
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                          	<textarea  name="addr" rows="2"   class="form-control" value="<?php echo $addr; ?>" readonly><?php echo $addr; ?></textarea>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>District</label>
                                            <input type="text"  name="district"   class="form-control" value="<?php echo $district; ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Thaluk</label>
                                           <input type="text"  name="thaluk"   class="form-control" value="<?php echo $thaluk; ?>" readonly>
                                          </div>
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Panchayath</label>
                                            <input type="text"  name="panchayath"   class="form-control" value="<?php echo $panchayath; ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Ward</label>
                                           <input type="text"  name="ward"   class="form-control" value="<?php echo $ward; ?>" readonly>
                                         </div>	                                           
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Treatment Information</strong>
                                    </div>                                                                                                            
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label>Hospital</label>
                                           <input type="text"  name="hdname"   class="form-control" value="<?php echo $hdname; ?>" readonly>
                                    </div> 
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label>Doctor</label>
                                     	<input list="docname" required class="form-control" name="docname">
                                            <datalist id="docname">
                                                <option value="">Select</option> 
                                                 <?php
                                                    $result = $db->prepare("SELECT * FROM doctor where hname='$hdname'");
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
                                      <label>Diseases</label>
                                           <input type="text"  name="diseas"   class="form-control">
                                    </div> 
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label>Date</label>
                                           <input type="text"  name="cdate"   class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
                                    </div>                                                             
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Vaccine</label>
                                           <textarea  name="vaccine"   class="form-control" rows="6" required></textarea>
                                     </div> 
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Description</label>
                                           <textarea  name="descr"   class="form-control" rows="6" required></textarea>
                                     </div> 
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Certificate</label>
                                          <input type="file" class="form-control" name="cert" required>
                                     </div>                                    
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary">
                            	 </div>                         
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 	<a href="vaccine_search.php" class="btn btn-block btn-danger">Back</a>
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
