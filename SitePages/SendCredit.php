<?php
include_once 'database.php';
if(isset($_POST['send'])) 
{	 
	/* Values to be updated in the database */
	 $username = mysqli_real_escape_string($conn, $_POST["sendusername"]); 
	 $email = mysqli_real_escape_string($conn, $_POST["sendemail"]); 
     $amount = mysqli_real_escape_string($conn, $_POST["sendcredit"]); 
	
     /* Query that updates the account info for the specified account */
     $send = "UPDATE accountinfo SET credit = credit + $amount WHERE username = '$username'";
     
	 /* Checks if connection and query were successful and redirects. If not then
	 an error is displayed to user */
	 if (mysqli_query($conn, $send)) {
		echo "Request Sent!";
		header("Location: AdminAccountPortal.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $send . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>