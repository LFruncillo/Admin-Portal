<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body
            {
                background-color: rgba(0,0,0,0.0) !important;
            }
        </style>
            <link rel="stylesheet" href=".css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <title>Contact Us</title>
            <h2>Contact Us</h2>
    </head>
    <body>
        <form  action="MessageSend.php" method="post">
            <input name="fullname" placeholder="Full Name" type="text">
            <input name="email" placeholder="Email" type="text">
            <input name="message" placeholder="Message" type="text">
            <input type="submit" name="send" value="Send">
        </form>

    </body>
        <!-- JS, Popper.js, and jQuery -->
        <link rel="script" href="https://code.jquery.com/jquery.min.js">
        <script src="AccountPortal.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>