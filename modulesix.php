
<?php include('header.php');?>
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<?php include('logoheader.php');?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php include('modulesixbar.php');?>
	</div>
</div>
<div class="row">
		<div class="col-md-12">
			<?php include('slidenavbarsix.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<span class="text-primary"><h3><?php echo $result = $trans->translate($source,$target,"Mother Corner");?></h3></span>
				<p class="col-md-offset-1"><?php echo $result = $trans->translate($source,$target,"We are providing  Diet, Baby Care and Health Videos for babies");?> </p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-12">
				<img src="images/7c63189c846b6c49c1cae0eef4c1b64f.jpg" class="img-thumbnail" style="border: 2px solid blue;">
				<a href="babydiet.php" class="btn btn-primary btn-block" role="button" style="margin-top: 5px; "><?php echo $result = $trans->translate($source,$target,"CLICK HERE FOR BABY DIET VEDIOS");?></a>
			</div>




			
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<img src="images/BF_Wipes_3D_preview__91224.1495009193.500.750.jpg" class="img-thumbnail hei" style="border: 2px solid blue;width: 100%;height: 455px;">
				<a href="mother.php" class="btn btn-primary btn-block" role="button" style="margin-top: 5px;"><?php echo $result = $trans->translate($source,$target,"CLICK HERE FOR CLEANESS VEDIOS");?></a>
			</div>
			
		</div>
		
	</div>
	<div class="row">
    	<div class="col-md-12">
    		<?php include('feedbackform.php');?>
    	</div>
    </div>
</div>

<?php include('footer.php');?>