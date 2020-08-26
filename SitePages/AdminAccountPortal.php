<?php
    session_start();
    echo "Welcome, " .$_SESSION['username'];
?>

<html>
    <head>
        <style>
            body
            {
                background-color: rgba(0,0,0,0.0) !important;
            }
        </style>
            <link rel="stylesheet" href=".css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            
    </head>
    <body>
        <div class="Options-Dropdown">
            <button class="btn btn-secondary btn-dark btn-secondary dropdown-toggle" type="button" id="OptionsMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Options
            </button>
            <div class="dropdown-menu" aria-labelledby="OptionsMenuButton">
                <a class="dropdown-item" onclick="ToggleDiv('CreateNotes')" href="#">Create Note</a>
                <a class="dropdown-item" onclick="ToggleDiv('CreateMessages')" href="#">Create Message</a>
            </div>
        </div>
        
        <form id="CreateNotes" name="addtext" onsubmit="download(this['name'].value, this['text'].value)">

            <textarea rows="10" cols="70" name="text" placeholder="Type your text here:"></textarea>
            <br>
            <input type="text" name="name" value="" placeholder="File Name">
            <input type="submit" onClick="addTextHTML();" value="Save As HTML">
            <input type="submit" onClick="addTexttxt();" value="Save As TXT">
        </form>
        <a href="RequestForm.php">Request Payment</a>
        <br>
        <a href="ContactForm.php">Need some assistance? Contact us here!</a>
        <br>
        <form action="AdminAccess.php" method="post">
            <input class="btn btn-dark" type="submit" name="Go" value="Control Panel">
        </form>

    </body>
    <!-- JS, Popper.js, and jQuery -->
    <script src="AccountPortal.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>