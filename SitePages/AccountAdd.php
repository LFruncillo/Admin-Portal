<?php
include_once 'database.php';
if(isset($_POST['save'])) 
{	 
	 $username = mysqli_real_escape_string($conn, $_POST["regusername"]); 
	 $password = password_hash($_POST['regpassword'], PASSWORD_BCRYPT); 
	 $email = mysqli_real_escape_string($conn, $_POST["regemail"]); 
	 $creditamount = '0';
     
	 $sql = "INSERT INTO accountinfo (username,password,email,credit)
     VALUES ('$username','$password','$email','$creditamount')";
     
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