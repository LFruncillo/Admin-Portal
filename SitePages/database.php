<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name="adminportal";
    $conn = mysqli_connect( $servername, $username, $password, $db_name ) or die('Not connected : Ah sh*t ' . mysqli_connect_error());
?>