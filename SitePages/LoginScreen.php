<html>
    <head>
        <style>
            body
            {
                background-color: rgba(0,0,0,0.0) !important;
            }
        </style>
            <link rel="stylesheet" href="AccountCSS.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body>     
        <form action="AccountLogin.php" method="post">
            <p>Admin Login</p>
            <input id="username" class="user-name" type="text" value="" placeholder="Username" name="logusername" required>
            <input id="password" class="pass-word" type="password" value="" placeholder="Password" name="logpassword" required>
            <input class="btn btn-dark" type="submit" name="submit" value="Login">
        </form>

        <a href="AccountRegistration.php">Don't have an account? Register here!</a>


        
    </body>
    <!-- JS, Popper.js, and jQuery -->
    <script src="AccountPortal.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>