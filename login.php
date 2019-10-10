<?php

?>
<html >
      <?php   include("head.php"); ?>
<body>
	<div class="jumbotron jumbotron-main" id="home">
		<div id="particles-js">
		<canvas class="particles-js-canvas-el" width="1349" height="100%" style="width: 100%; height: 99%;"></canvas></div>
		<div class="container center-vertically-holder">
					<?php
 		   if(isset($_REQUEST['success_message'])) 
 		   {

 		   	?>
 		   	<div class="alert alert-danger" id="success_message">
 		   	<strong>Alert!</strong><?php  echo $_REQUEST['success_message'];?>
 		   	</div>
 		   	 <?php
 		   	 
 		   }
 		 ?>
			<div class="center-vertically">
			
				<div class="col-sm-offset-2 col-md-8">
					<h1 class="text-center"><strong><i class="glyphicon glyphicon-user text-primary"></i>Kids Care Platform</strong><hr style="width:  100%; background-color: white;"><hr style="width:  100%;background-color: white;"></h1>
				</div>
				<div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 text-center">
						<?php  include('formfields.php');?>
				</div>
			</div>
		</div>
	</div>
	 <?php include("loginscripts.php") ?>
</body>
</html>