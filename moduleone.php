<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<!-- Meta tag is used here -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- CSS LINK -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="container bg">
<div class="row">
	<!-- DIV COL ONE -->
<div class="col-sm-4 col-md-4"></div>
<!-- DIV COL TWO -->
<div class="col-sm-4 col-md-4">
	<form class="log" action="success.php" method="POST" >
		<h1 class="he1">CREATE YOUR ACCOUNT</h1>
		<img class="img img-reponsive img-circle im1" src="images/Custom-Icon-Design-Pretty-Office-8-User-blue.ico">
		<!-- DIV ONE -->
		<div class="form-group">
			<label>USER NAME:</label>
			<input type="text" name="username" class="form-control" placeholder="USER NAME">
		</div>
		<!-- DIV TWO -->
		<div class="form-group">
			<label>PASSWORD:</label>
			<input type="password" name="password" class="form-control" placeholder="PASSWORD">
		</div>
		<!-- DIV THREE -->
		<div class="form-group">
			<label>CONFIRMED_PASSWORD</label>
			<input type="password" name="CONFIRMED_PASSWORD" class="form-control" placeholder="CONFIRMED PASSWORD">
		</div>
		 <div class="form-group">
			<label>AGE</label>
			<select class="form-control" name="age">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<!--DIV FIVE -->
		<div class="form-group">
				<label>GENDER</label>
				<select class="form-control" name="gender">
				   <option>MALE</option>
				   <option>FEMALE</option>
				</select>
			</div>
            
			 
			 <button type="submit"  name="submit" class="btn btn-primary btn-block butn">SIGN UP</button>
			 <button type="submit" name="update">UPDATE ACCOUNT</button>
	</form>
</div>


<!-- DIV COL THREE -->
<div class="col-sm-4 col-md-4"></div>
</div>
</div>
</body>
</html>
