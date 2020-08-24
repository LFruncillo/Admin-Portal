<?php
include_once 'database.php';
if(isset($_POST['pay'])) 
{	 
	 $username = mysqli_real_escape_string($conn, $_POST["payusername"]); 
	 $email = mysqli_real_escape_string($conn, $_POST["payemail"]); 
     $amount = mysqli_real_escape_string($conn, $_POST["paycredit"]); 
     $status = ('Completed'); 
     
     $pay = "UPDATE paymentrequests SET status = 'Completed' WHERE username = '$username'";
     
	 if (mysqli_query($conn, $pay)) {
		echo "Pay Sent!";
		header("Location: AccountPortal.php"); /* Redirect browser */
  		exit();
	 } else {
		echo "Error: " . $pay . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>