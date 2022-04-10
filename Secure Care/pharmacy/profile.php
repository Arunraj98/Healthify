<?php
 	 require("auth.php");
  	include('../db_connect/db.php');	
    $mdcphid=$_SESSION['SESS_PHAR_ID'];
	$result = $db->prepare("select * from  pharmacy where mdcphid='$mdcphid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$mdcphid=$row["mdcphid"];
		$name=$row["name"];
		$cntn1=$row["cntn1"];
		$cntn2=$row["cntn2"];
		$locatn=$row["locatn"];
		$addr=$row["addr"];
		$email=$row["email"];
		$typ=$row["typ"];
		$splty=$row["splty"];
		$jdate=$row["jdate"];
		$licen=$row["licen"];
		$photo1=$row["photo1"];
		$photo2=$row["photo2"];
		$expr=$row["expr"];
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
							Profile Information Update
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="database/profile_update.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Pharmacy Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Pharmacy ID</label>
                                            <input type="text" class="form-control" name="mdcphid" value="<?php echo $mdcphid; ?>" readonly>
                                        </div>                                                                                
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" value="<?php echo $name; ?>" readonly>
                                          </div>                                                                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="number"  name="cntn1"   class="form-control" value="<?php echo $cntn1; ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                           <input type="number"  name="cntn2"   class="form-control" value="<?php echo $cntn2; ?>">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Location</label>
                                           <input type="text"  name="locatn"   class="form-control" value="<?php echo $locatn; ?>">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                           <label>Address</label>
                                           <input type="text"  name="addr"   class="form-control" value="<?php echo $addr; ?>">
                                          </div>                                         
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Email ID</label>
                                            <input type="email"  name="email"  class="form-control" value="<?php echo $email; ?>">
                                         </div>                                                                                                                                     				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Document Information</strong>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Type</label>     
                                             <select class="form-control"  name="typ" >
                                                <option><?php echo $typ; ?></option>
                                                <option>Mr</option>
                                                <option>Mrs</option>
                                            </select>                             
                                     </div>  
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                       <label>Speciality</label>              
                                              <select class="form-control"  name="splty" >
                                                <option><?php echo $splty; ?></option>
                                                <option>Mr</option>
                                                <option>Mrs</option>
                                            </select>                           
                                      </div>                                  				
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Join Date</label>
										<input type="text"  name="jdate"  class="form-control" value="<?php echo $jdate; ?>" readonly>
									</div>	                               
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Photo</label>
                                            <a href="../admin/pharmacy_photo/<?php echo $photo1;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>	
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>License No</label>
                                        <input type="text"  name="licen"  class="form-control" value="<?php echo $licen; ?>" readonly>
                                     </div> 
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>License</label>
                                            <a href="../admin/pharmacy_photo/<?php echo $photo2;?>" target="_blank" class="btn btn-block btn-danger">Download</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Experience</label>
                                           <input type="text"  name="expr"  class="form-control" value="<?php echo $expr; ?>">
                                     </div> 
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Username</label>
                                            	<input type="text"  name="username"  class="form-control" value="<?php echo $username; ?>" readonly>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Password</label>
                                            	<input type="password"  name="password"  class="form-control" value="<?php echo "##########"; ?>" readonly>
                                    </div>                                                  
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Update" class="btn btn-block btn-primary" id="save1">
                            	 </div>
                                 
                            	  <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
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
