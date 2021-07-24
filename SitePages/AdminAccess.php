<?php
session_start();
include_once 'database.php';
if(isset($_POST['Go'])) 
{	    
    /* Unknown error, worked properly when tested previousily. Project no
    longer being worked on so will be left as it is. */
    $query = mysqli_query("SELECT * FROM accountinfo WHERE type = Admin");
    
    if(mysqli_query($conn, $query)) {
        header("location:ControlPanel.php");
    }
    else
    {
        Echo 'Access Denied';
    }
}
?>