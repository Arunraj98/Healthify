<?php
include('../db_connect/db.php');	
require("auth.php");
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
							Add New Insurance
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="database/insurance_save.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Insurance Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Insurance ID</label>
                                            <input type="text" class="form-control" name="mdcinsid"  required="" value="<?php echo"MDCIN".rand(9874475896,1); ?>" readonly>
                                        </div>                                                                                
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" required title="CAPS ONLY" pattern="[a-zA-Z]*">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Company</label>
                                           <input type="text"  name="cmpny"   class="form-control" required pattern="[a-zA-Z]*">
                                          </div>                                                                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          	<input type="text"  name="cntn1"   class="form-control"  required maxlength="10" minlength="10" pattern="[0-9]*">  
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                           <input type="text"  name="cntn2"   class="form-control" required maxlength="10" minlength="10" pattern="[0-9]*">
                                          </div>                                                                                                                   
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Email ID</label>
                                            <input type="email"  name="email"  class="form-control" required>
                                         </div>                                                                                                                                     				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Company Information</strong>
                                    </div>
                                   	 <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Address</label>
                                      	<textarea  name="addr" rows="4"   class="form-control" required></textarea>
                                      </div>                                       				
									  <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Web Address</label>
										<input type="url"  name="wbaddr"  class="form-control" required>
									</div>	  
                                     <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Join Date</label>
										<input type="text"  name="jdate"  class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
									</div>	                                                                                                  
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Username</label>
                                            	<input type="text"  name="username"  class="form-control" required>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Password</label>
                                            	<input type="password"  name="password"  class="form-control" required>
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
