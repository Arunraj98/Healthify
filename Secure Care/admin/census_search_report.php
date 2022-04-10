<?php
 	 require("auth.php");
  	include('../db_connect/db.php');	
    $censusname=$_POST["censusname"];
	$result = $db->prepare("select * from  census where name='$censusname'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$censuspid=$row["censuspid"];
		$name=$row["name"];
		$inchaprsn=$row["inchaprsn"];
		$cntn1=$row["cntn1"];
		$cntn2=$row["cntn2"];
		$email=$row["email"];
		$addr=$row["addr"];
		$wbaddr=$row["wbaddr"];
		$jdate=$row["jdate"];
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
							Panchayath Informations
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="database/district_save.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Panchayath Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Panchayath ID</label>
                                            <input type="text" class="form-control" name="censuspid" value="<?php echo $censuspid ?>" readonly>
                                        </div>                                                                                
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" value="<?php echo $name ?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Incharge Person</label>
                                           <input type="text"  name="inchaprsn"   class="form-control" value="<?php echo $inchaprsn ?>" readonly>
                                          </div>                                                                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="number"  name="cntn1"   class="form-control" value="<?php echo $cntn1 ?>" readonly> 
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                           <input type="number"  name="cntn2"   class="form-control" value="<?php echo $cntn2 ?>" readonly>
                                          </div>                                                                                                                   
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Email ID</label>
                                            <input type="email"  name="email"  class="form-control" value="<?php echo $email ?>" readonly>
                                         </div>                                                                                                                                     				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Panchayath Information</strong>
                                    </div>
                                   	 <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Address</label>
                                      	<textarea  name="addr" rows="4"   class="form-control" readonly><?php echo $addr ?></textarea>
                                      </div>                                       				
									  <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Web Address</label>
										<input type="url"  name="wbaddr"  class="form-control" value="<?php echo $wbaddr ?>" readonly>
									</div>	  
                                     <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Join Date</label>
										<input type="text"  name="jdate"  class="form-control"value="<?php echo $jdate ?>" readonly>
									</div>	                                                                                                  
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Username</label>
                                            	<input type="text"  name="username"  class="form-control" value="<?php echo $username ?>" readonly>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Password</label>
                                            	<input type="password"  name="password"  class="form-control" value="<?php echo $password ?>" readonly>
                                    </div>                                                  
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">                                                           
                                  <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
                                 	<a href="census_search.php" class="btn btn-block btn-danger">Back</a>
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
