<?php
 	 require("auth.php");
  	include('../db_connect/db.php');	
    $msgid=$_GET["msgid"];
	$result = $db->prepare("select * from  message where msgid='$msgid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{					
			$mhostid=$row["mhostid"];
			$hname=$row["hname"];
			$cntn1=$row["cntn1"];
			$email=$row["email"];
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
							Send Message
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="database/message_update.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>ID</label>
                                            <input type="text" class="form-control" name="mhostid" value="<?php echo $mhostid;?>" readonly>
                                            <input type="hidden" name="msgid" value="<?php echo $msgid;?>">
                                        </div>                                                                                
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="hname"   class="form-control" value="<?php echo $hname;?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                           <input type="text"  name="cntn1"   class="form-control" value="<?php echo $cntn1;?>" readonly>
                                          </div>                                                                                                                   
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Email ID</label>
                                            <input type="email"  name="email"  class="form-control"  value="<?php echo $email;?>" readonly>
                                         </div>                                                                                                                                     				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Reply Information</strong>
                                    </div>
                                   	 <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Reply</label>
                                      	<textarea  name="subj" rows="4"   class="form-control"></textarea>
                                      </div>                                       				
                                     <div class="col-md-12 col-sm-6 col-xs-12">
										<label style="float:left">Date</label>
										<input type="text"  name="dat"  class="form-control" value="<?php echo date("d-m-Y")?>" readonly>
									</div>	                                                                                                  
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Reply" class="btn btn-block btn-primary" id="save1">
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
