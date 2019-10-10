<?php include('header.php');?>
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<?php include('logoheader.php');?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php include('helpbar.php');?>
	</div>
</div>
<div class="container-fluid">
<div class="col-md-12">
	<h1 class="text-primary" style="font-family: cursive; font-weight: bolder; font-size: 80px; text-align: center;"><?php echo $result = $trans->translate($source,$target,"HELP");?></h1>
</div>
<div class="col-md-12">
	<?php include('helpimg.php')?>
</div>
<div class="col-md-12">
<p style="font-size: 40px; font-family: sans-serif; font-weight: bolder; text-align: center;" class="text-primary"><?php echo $result = $trans->translate($source,$target,"Help is provide by these members about the  project procedure how to access the site");?></p>
</div>
<div class="col-md-12" style="margin-top: 10px;">
	<?php include('helplist.php')?>
</div>
	<div class="col-md-12">
		<p class="text-primary bg-primary" style="text-align: center; font-size: 20px;"><?php echo $result = $trans->translate($source,$target,"© 2019 Copyright:");?></p>
    </div>
</div>
</div>
</body>
</html>