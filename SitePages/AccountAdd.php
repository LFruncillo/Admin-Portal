<?php
include_once 'database.php';
if(isset($_POST['save'])) 
{	 
	/* Values to be stored in the database */
	$username = mysqli_real_escape_string($conn, $_POST["regusername"]); 
	$password = password_hash($_POST['regpassword'], PASSWORD_BCRYPT); 
	$email = mysqli_real_escape_string($conn, $_POST["regemail"]); 
	$creditamount = '0';
	$type = 'User';
	$record = 'Good';

    /* sql query will insert values into the database */ 
	$sql = "INSERT INTO accountinfo (type,username,password,email,credit,record)
    VALUES ('$type','$username','$password','$email','$creditamount','$record')";
    
	/* Will check if connection and queries were successful and redirect. If not,
	then the user will have an error displayed to them*/
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