<?php include('header.php');?>
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<?php include('logoheader.php');?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php include('modulefournav.php');?>
	</div>
</div>
<div class="row">
		<div class="col-md-12">
			<?php include('sliderofentertainment.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<span class="text-primary"><h3><?php echo $result = $trans->translate($source,$target,"ENTERTAINMENTS");?></h3></span>
				<p class="col-md-offset-1"><?php echo $result = $trans->translate($source,$target,"Entertain their them through videos of cartoon, Stories, Rhymes, which is according to our norms and values");?> </p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="col-md-12">
				<img src="images/2nd_4kids_logo.png" class="img-thumbnail" style="border: 2px solid blue;">
			<a href="entertain.php" class="btn btn-primary btn-block" role="button" style="margin-top: 5px;" target="_blank"><?php echo $result = $trans->translate($source,$target,"CLICK HERE FOR QUAID SAY BTAIN VEDIOS");?></a>
			</div>

			
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<img src="images/gie5XAejT.jpg" class="img-thumbnail hei" style="border: 2px solid blue;">
				<a href="fair.php" class="btn btn-primary btn-block" role="button" style="margin-top: 5px;" target="_blank"><?php echo $result = $trans->translate($source,$target,"CLICK HERE FOR RACING CAR  VEDIOS");?></a>
			</div>
			
		</div>
	</div>
	<div class="row">
    	<div class="col-md-12">
    		<?php include('feedbackform.php');?>
    	</div>
    </div>
    <?php include('footer.php');?>
</div>


<!-- SECOND CONTAINER -->

