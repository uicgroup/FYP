 <?php include('header.php'); ?>
<div class="container-fluid">
		<?php include('logoheader.php');?>
	<div class="row">
		<div class="col-sm-12">
			<?php include('modulethreenavbar.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php include('sliderofbasiceducation.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<span class="text-primary"><h3><?php echo $result = $trans->translate($source,$target,"Basic Education");?>Basic Education</h3></span>
				<p class="col-md-offset-1"><?php echo $result = $trans->translate($source,$target,"By accessing this single platform a Pakistani mothers can provide basic education to their child");?></p>
			</div>
		</div>
	</div>
<div class="row">
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/bismillah-910299_960_720.png" class="img-thumbnail" style="width: 100%; height: 250px; border: 2px solid blue;">
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
				<a href="islam.php" class="btn btn-primary btn-block" role="button" style="margin: 10px 5px 10px 5px; " target="_blank"><?php echo $result = $trans->translate($source,$target,"Islamic Stories");?></a>
			</div>
			<div class="col-md-6">
				<a href="islamiclar.php" class="btn btn-primary btn-block" role="button"  style="margin: 10px 5px 10px 0px;"target="_blank"><?php echo $result = $trans->translate($source,$target,"Islamic Learning");?></a>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/af057657607829.59dcbbeae4478.png" class="img-thumbnail hei" style="width: 100%; height: 250px; height: 250px; border: 2px solid blue;">
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
				 <a href="abcgame.php" class="btn btn-primary btn-block" role="button" style="margin: 10px 5px 10px 0px; "target="_blank"><?php echo $result = $trans->translate($source,$target,"Abc with Music");?></a>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/maxresdefault (2).jpg" class="img-thumbnail hei" style="width: 100%; height: 250px; height: 250px; border: 2px solid blue;">
		</div>
		<div class="col-md-12">
			<a href="math.php" class="btn btn-primary btn-block" role="button" style="margin: 10px 5px 10px 0px;"target="_blank"><?php echo $result = $trans->translate($source,$target,"Counting 123 And Tables");?></a>			
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12">
			<img src="images/us-iphone-2-learn-urdu-for-kids.jpeg" class="img-thumbnail hei" style="width: 100%; height: 250px; height: 250px; border: 2px solid blue;">
		</div>
		<div class="col-md-12">
			<a href="urdustories.php" class="btn btn-primary btn-block" role="button" style="margin: 10px 5px 10px 0px; " target="_blank"><?php echo $result = $trans->translate($source,$target,"Urdu Fun");?></a>			
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

