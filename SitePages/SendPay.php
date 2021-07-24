<?php
include_once 'database.php';
if(isset($_POST['pay'])) 
{	 
	 /* Values to be updated in the database */
	 $username = mysqli_real_escape_string($conn, $_POST["payusername"]); 
	 $email = mysqli_real_escape_string($conn, $_POST["payemail"]); 
     $amount = mysqli_real_escape_string($conn, $_POST["paycredit"]); 
     $status = ('Completed'); 
     
	 /* Query that updates the values in the database for the specified account */
     $pay = "UPDATE paymentrequests SET status = 'Completed' WHERE username = '$username'";
     
	 /* Checks if connection and query was successful and redirects. If not then
	 an error is displayed to the user. */
	 if (mysqli_query($conn, $pay)) {
		echo "Pay Sent!";
		header("Location: AdminAccountPortal.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $pay . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>