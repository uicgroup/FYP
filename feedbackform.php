<form class="log"  action="feedback.php" method="post">
	<h2 class="text-primary"><?php echo $result = $trans->translate($source,$target,"FEED BACK");?><h2>
	<div class="form-group">
		<label style="font-size:18px;"><?php echo $result = $trans->translate($source,$target,"NAME:");?></label>
		<input type="text" name="name" id="name" placeholder="NAME" class="form-control">
	</div>
	<div class="form-group">
		<label style="font-size:18px;"><?php echo $result = $trans->translate($source,$target,"COMMENTS:");?></label>
		<textarea rows="2" cols="25" name="comment" id="comment" class="form-control">						
						</textarea>
	</div>
					<button type="submit" class="btn btn-primary btn-block" name="submit"><?php echo $result = $trans->translate($source,$target,"Submit Feedback");?></button>
</form>