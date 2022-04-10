  <style>
   #tm{font-size:35px;letter-spacing:0px; color:#FFF; font-family:"Courier New"; font-weight: bold;}
  </style>
  <script>
	var myVar = setInterval(myTimer, 1000);
	function myTimer() {var d = new Date();document.getElementById("tm").innerHTML = d.toLocaleTimeString();}
  </script>  
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HEALTHIFY</span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
           <li class="dropdown notifications-menu">
			<span id="tm"></span>
          </li>
            <li class="dropdown user user-menu">
            <a href="#">                        
            </a>          
         </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>