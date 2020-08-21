<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['regusername'];
	 $password = password_hash($_POST['regpassword'], PASSWORD_BCRYPT);
     
	 $sql = "INSERT INTO accountinfo (username,password)
     VALUES ('$username','$password')";
     
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("Location: LoginScreen.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>