<?php
$servername="localhost";
$username="root";
$password="";
$dbname="comments";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 if (isset($_POST['submit'])) 
 {
 	$username=mysqli_escape_string($conn,$_POST['name']);
 	$comment=mysqli_escape_string($conn,$_POST['comment']);
 	$sql="INSERT INTO userfeedback(name,COMMENT) VALUES('$username','$comment')";
 	$data=mysqli_query($conn,$sql);
}
echo "New comment successfully entered";
// if ($total==1) {
//      echo "New comment enter successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
 

mysqli_close($conn);
?>