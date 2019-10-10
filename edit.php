<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['edit'])){
$sql= "Select * from userstable where username='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'";
    	$res = mysqli_query($conn,$sql);
    	$data = mysqli_fetch_array($res);
		$id = $data['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		

		$sql = "UPDATE userstable SET username = '$username', password = '$password' WHERE id = '$id'";
echo $sql;
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: viewrequest.php');

?>