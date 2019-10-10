<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>CONTACT PAGE</title>
	<?php include('header.php')?>
</head>
<body>
<div class="container-fluid">
	

<div class="row">
	<div class="col-md-12">
		<?php include('logoheader.php')?>
	</div>

<div class="col-md-12">
	<?php include('maincontactnav.php')?>
</div>
<div class="col-md-12">
	<h1 class="text-primary" style="font-family: cursive; font-weight: bolder; font-size: 80px; text-align: center;"><?php echo $result = $trans->translate($source,$target,"CONTACTS");?></h1>
</div>
<div class="col-md-12">
	<?php include('contactimg.php')?>
</div>
<div class="col-md-12" style="margin-top: 10px;">
	<?php include('contactlist.php')?>
</div>
	<div class="col-md-12">
		<p class="text-primary bg-primary" style="text-align: center; font-size: 20px;"><?php echo $result = $trans->translate($source,$target,"© 2019 Copyright:");?></p>
    </div>
</div>
</div>
</body>
</html>