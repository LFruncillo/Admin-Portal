<?php
include_once 'database.php';
if(isset($_POST['set'])) 
{	 
	 $username = mysqli_real_escape_string($conn, $_POST["setusername"]); 
	 $type = mysqli_real_escape_string($conn, $_POST["setaccount"]); 
     
     $change = "UPDATE accountinfo SET type = 'Admin' WHERE username = '$username'";
     
	 if (mysqli_query($conn, $change)) {
		echo "Pay Sent!";
		header("Location: ControlPanel.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $change . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>