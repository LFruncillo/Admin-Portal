<?php
session_start();
include_once 'database.php'; 
if(isset($_POST['submit']))
{

/* Checks whether the inputs are empty */
if(empty($_POST["logusername"]) || empty($_POST["logpassword"])) 
	{
		echo 'Both fields are required.'; 
	} else {
		/* Values to be selected from database and password verification for logging in */
		$username = mysqli_real_escape_string($conn, $_POST["logusername"]);
		$password = mysqli_real_escape_string($conn, $_POST["logpassword"]);
		$query = "SELECT * FROM accountinfo WHERE username = '$username'"; 
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
				if(password_verify($password, $row["password"]))
				{
					$_SESSION["username"] = $username; 
					echo "Logged in";
					header("location:AccountPortal.php");
				}
				else
				{
					echo 'Wrong details.';
				}
			}
		}
	}
}
?>  