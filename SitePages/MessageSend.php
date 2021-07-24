<?php
include_once 'database.php';
if(isset($_POST['send'])) 
{	 
	 /* Values to be stored in database */
	 $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]); 
     $email = mysqli_real_escape_string($conn, $_POST["email"]); 
     $message = mysqli_real_escape_string($conn, $_POST["message"]); 

	/* Query that inserts values into the specified rows */
	 $sql = "INSERT INTO supporttickets (FullName,Email,Message)
     VALUES ('$fullname','$email','$message')";
     
	 /*Checks if connection and sql query were successful and redirects. If not
	 then an error is displayed to user. */
	 if (mysqli_query($conn, $sql)) {
		echo "Support ticket sent, you will receive a response within 24 hours !";
		header("Location: AccountPortal.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>