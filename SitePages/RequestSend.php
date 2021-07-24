<?php
include_once 'database.php';
if(isset($_POST['submit'])) 
{	 
	 /* Values to be inserted into database */
	 $username = mysqli_real_escape_string($conn, $_POST["requsername"]); 
	 $email = mysqli_real_escape_string($conn, $_POST["reqemail"]); 
     $amount = mysqli_real_escape_string($conn, $_POST["reqcredit"]); 
     $status = ('Pending'); 
     
	 /* Query that inserts values into specified rows */
	 $sql = "INSERT INTO paymentrequests (username,email,amount,status)
     VALUES ('$username','$email','$amount','$status')";
     
	 /* Checks if connection and sql query were successful and redicts. If not
	 then an error is displayed to user. */
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