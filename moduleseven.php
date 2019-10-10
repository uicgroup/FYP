<?php include('header.php');?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php include('logoheader.php'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php include('modulesevenbar.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php include('sidenavbarseven.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<span class="text-primary"><h3><?php echo $result = $trans->translate($source,$target,"SCHOOLS INFORMATION");?></h3></span>
				<p class="col-md-offset-1"><?php echo $result = $trans->translate($source,$target,"Mothers can see best schools in their area.for their babies");?></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="images/back-to-school-logo-eps-vector_csp29730787.jpg" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="images/back-to-school-logo-eps-vector_csp29730787.jpg" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="images/back-to-school-logo-eps-vector_csp29730787.jpg" class="img-thumbnail">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form  action="schools.php">
				<button class="btn btn-primary btn-block" type="submit"><?php echo $result = $trans->translate($source,$target,"INFORMATION ABOUT SCHOOLS");?></button>	
			</form>
		</div>
	</div>    
</div>
<?php include('footer.php');?>
