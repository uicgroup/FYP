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
<body onload="setTimeout(hello,3000)">
<form action="welcomekidscare.php" method="POST">
		<div class="form-group">
			<input type="text" name="UserName"  id="UserName" class="form-control" placeholder="UserName" style="color:black; font-size: 20px;">
		</div>
		<div class="form-group">
			<input type="password" name="password" id="password" placeholder="**********" class="form-control" style="color:black;font-size: 20px;">
		</div>
		<!-- <div class="form-group" style="margin-top: 30px; margin-bottom: 30px;">
			<a href="forgetPassword.php" class="alert alert-info"><i class="glyphicon glyphicon-edit"></i>&nbsp;Forget Password</a>
		</div> -->
		<div id="late"></div>
		
</form>
<form action="signup.php" method="post">
	    <div class="form-group">
	    	<button type="submit" class="btn btn-primary btn-block" name="signbtn" style="padding: 20px 5px 20px 5px;"><h4><i class="glyphicon glyphicon-registration-mark"></i>&nbsp;Sign Up</h4></button>
	    </div>
</form>

<script type="text/javascript">
	function hello()
	{
		document.getelementbyid("late").innerHTML="<div class=\"form-group\"><button type=\"submit\" name=\"loginbtn\" id=\"loginbtn\" class=\"btn btn-success btn-block\" style=\"padding: 20px 5px 20px 5px;\"><h4><i class=\"glyphicon glyphicon-log-in\"></i>&nbsp;Sign In</h4></button></div>";
	}
</script>

</body>
</html>

