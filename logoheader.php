<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
	<title></title>
</head>

<body>
	<div class="row">
			<div class="col-md-3">
				<img src="images/depositphotos_114832996-stock-illustration-kids-care-logo-healthy-fun.jpg" class="img img-reponsive img-circle im1" style="width: 20%;">
			</div>
			<div class="col-md-3">
				<div id="contact"><button type="button" class="btn btn-info btn" style="margin-left:90%; margin-top: 50px;" data-toggle="modal" data-target="#contact-modal"><?php echo $result = $trans->translate($source,$target,"Edit Profile");?></button></div>
			</div>
			<div class="col-md-3">
				
			<div id="contact"><button type="button" class="btn btn-success btn" style="margin-left:70%; margin-top: 50px;" data-toggle="modal" data-target="#contact-modal"><?php echo $result = $trans->translate($source,$target,"Sign Up");?></button></div>
			</div>
			<div class="col-md-3">
				<a href="logout.php" class="arc"><?php echo $result = $trans->translate($source,$target,"Logout");?></a>
		</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h3 style="font-size: 30px; text-align: center; font-weight: 30px;" class="text-primary"><?php echo $result = $trans->translate($source,$target,"KIDS CARE PLATFORM");?></h3>
	</div>
</div>

<!-- <?php 
	include_once('connection.php');
  	    $sql= "Select * from userstable where username='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'";

    	$res = mysqli_query($conn,$sql);
    	$data = mysqli_fetch_array($res);
		$username = $data['username'];
		$password = $data['password'];
		$confirmpassword = $data['confirmpassword'];
		$age = $data['age'];
		$gender = $data['gender'];
?> -->

<div id="contact-modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Sign Up</h3>
			</div>
			<form id="contactForm" action="./registeruser.php" method="POST" name="contact" role="form">
				<div class="modal-body">				
					<div class="form-group">
						<label for="name">UserName</label>
						<input type="text" class="form-control" value="<?php echo $username;?>" name="username" id="username"  placeholder="UserName">
					</div>
					<div class="form-group">
						<label for="Password">Password</label>
				<input type="password" class="form-control" value="<?php echo $password;?>"name="password" id="password" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<label for="confirmpassword">Confirmpassword</label>
						<input type="password" class="form-control" value="<?php echo $confirmpassword;?>" name="confirmpassword" id="confirmpassword"  placeholder="Re enter Password">
					</div>
					<div class="form-group">
						<label for="Age">Age</label>
						  <input type="text" class="form-control" value="<?php echo $age;?>" name="age" id="age"  placeholder="Full AGE">
					</div>	
					<label  for="Gender">Gender</label>
					<div class="form-group">
			<SELECT class="form-control" id="gender" name="gender"><option class="form-control" value="null">Select Gender</option><option class="form-control" value="Male">Male</option><option class="form-control" value="Female">Female</option></SELECT>     
					</div>					
				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button onclick="submitForm()" name="btnregisterform" id="btnregisterform" class="btn btn-success">Submit</button>
					<!- <input type="submit" class="btn btn-success" id="btnregisterform">
				</div>
			</form>
		</div>
	</div>
</div> 
<script>
	
function submitForm()
{
	document.getElementById("contactForm").submit();
	
}
</script>
</body>
</html>