<?php
include_once 'database.php';
if(isset($_POST['set'])) 
{	 
	 /* Values to be updated in database */
	 $username = mysqli_real_escape_string($conn, $_POST["setusername"]); 
	 $type = mysqli_real_escape_string($conn, $_POST["setaccount"]); 
     
	 /* Query that updates values in the database for the specified account */
     $change = "UPDATE accountinfo SET type = 'Admin' WHERE username = '$username'";
     
	 /* Checks if connection and query were successful and redirects. If not
	 then an error is displayed to user. */
	 if (mysqli_query($conn, $change)) {
		echo "Pay Sent!";
		header("Location: AdminAccountPortal.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $change . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>