<?php include('header.php');?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php include('logoheader.php'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php include('modulefivenav.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php include('slideskidsclubs.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<span class="text-primary"><h3><?php echo $result = $trans->translate($source,$target,"KIDS CLUBS:");?></h3></span>
				<p class="col-md-offset-1"><?php echo $result = $trans->translate($source,$target,"We  are providing information regarding kids club their membership methods, activity, sport, games and membership rules & fee");?> </p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="images/Understanding-the-Worth-of-Extra-Curricular-Activities-in-your-academic-progress8.jpg" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="images/Understanding-the-Worth-of-Extra-Curricular-Activities-in-your-academic-progress8.jpg" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="images/Understanding-the-Worth-of-Extra-Curricular-Activities-in-your-academic-progress8.jpg" class="img-thumbnail">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form  action="maps.php">
				<button class="btn btn-primary btn-block" type="submit"><?php echo $result = $trans->translate($source,$target,"INFORMATION ABOUT KIDS CLUBS");?></button>	
			</form>
		</div>
	</div>
    <div class="row">
    	<div class="col-md-12">
    		<?php include('feedbackform.php');?>
    	</div>
    </div>
    
</div>
<?php include('footer.php');?>
