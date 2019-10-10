 <?php include('header.php'); ?>
<div class="container-fluid">
		<?php include('logoheader.php');?>
	<div class="row">
		<div class="col-sm-12">
			<?php include('moduletwonabar.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php include('slideshomepage.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<span class="text-primary"><h3><?php echo $result = $trans->translate($source,$target,"Mission Statement");?></h3></span>
				<p class="col-md-offset-1"><?php echo $result = $trans->translate($source,$target,"In this project we are developing a web based platform for thewifeose mothers who face different types of problems regarding their babies in daily life like Diet, Health and Education. In this world everyone wants quick solutions to their problem. We are developing a platform where a mother or a working housewife can find every solution of her children’s problems regarding baby on single platform and save her precious time in hectic life");?></p>
			</div>
		</div>
	</div>
<div class="row">
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/bismillah-910299_960_720.png" class="img-thumbnail" style="width: 100%; height: 250px; border: 2px solid blue;">
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/af057657607829.59dcbbeae4478.png" class="img-thumbnail hei" style="width: 100%; height: 250px; height: 250px; border: 2px solid blue;">
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/maxresdefault (2).jpg" class="img-thumbnail hei" style="width: 100%; height: 250px; height: 250px; border: 2px solid blue;">
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/us-iphone-2-learn-urdu-for-kids.jpeg" class="img-thumbnail hei" style="width: 100%; height: 250px; height: 250px; border: 2px solid blue;">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php include('feedbackform.php');?>
	</div>
</div>
</div>
<?php include('footer.php'); ?>
