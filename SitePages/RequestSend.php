<?php
include_once 'database.php';
if(isset($_POST['submit'])) 
{	 
	 $username = mysqli_real_escape_string($conn, $_POST["requsername"]); 
	 $email = mysqli_real_escape_string($conn, $_POST["reqemail"]); 
     $amount = mysqli_real_escape_string($conn, $_POST["reqcredit"]); 
     $status = ('Pending'); 
     
	 $sql = "INSERT INTO paymentrequests (username,email,amount,status)
     VALUES ('$username','$email','$amount','$status')";
     
	 if (mysqli_query($conn, $sql)) {
		echo "Request Sent!";
		header("Location: AccountPortal.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>