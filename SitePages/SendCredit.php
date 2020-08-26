<?php
include_once 'database.php';
if(isset($_POST['send'])) 
{	 
	 $username = mysqli_real_escape_string($conn, $_POST["sendusername"]); 
	 $email = mysqli_real_escape_string($conn, $_POST["sendemail"]); 
     $amount = mysqli_real_escape_string($conn, $_POST["sendcredit"]); 
     
     $send = "UPDATE accountinfo SET credit = credit + $amount WHERE username = '$username'";
     
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