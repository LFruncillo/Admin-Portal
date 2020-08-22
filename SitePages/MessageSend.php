<?php
include_once 'database.php';
if(isset($_POST['send'])) 
{	 
	 $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]); 
     $email = mysqli_real_escape_string($conn, $_POST["email"]); 
     $message = mysqli_real_escape_string($conn, $_POST["message"]); 

	 $sql = "INSERT INTO supporttickets (FullName,Email,Message)
     VALUES ('$fullname','$email','$message')";
     
	 if (mysqli_query($conn, $sql)) {
		echo "Support ticket sent, you will receive a response within 24 hours !";
		header("Location: LoginScreen.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>