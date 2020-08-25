<?php
include_once 'database.php';
if(isset($_POST['save'])) 
{	 
	 $username = mysqli_real_escape_string($conn, $_POST["regusername"]); 
	 $password = password_hash($_POST['regpassword'], PASSWORD_BCRYPT); 
	 $email = mysqli_real_escape_string($conn, $_POST["regemail"]); 
	 $creditamount = '0';
	 $type = 'User';
	 $record = 'Good';
     
	 $sql = "INSERT INTO accountinfo (type,username,password,email,credit,record)
     VALUES ('$type','$username','$password','$email','$creditamount','$record')";
     
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