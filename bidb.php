<?php
include 'PHPCODEball.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidwise Solutions</title>
    <link href='https://fonts.googleapis.com/css?family=Spartan' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <section id="header">
        <a href=""><img src="\DBMS MINI PROJECT\images\logo\bidwise-high-resolution-logo-transparent2.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="bid.php">BID</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </section>


    <div class="center">
        <h1 class="toppad ">FILL THE BELOW TO BID</h1>
        <form method="post" action="bidb.php">
            <div class="listbs">
                <label class="choo">
                    <center><b>Item name : </b>
                </label>
                Ronaldo signed ball
            </div>
            <div class="name">
                <input type="text" name="username2" required>
                <span></span>
                <label><b>Username</b></label>
            </div>

            <div class="name">
                <input type="text" name="email2" required>
                <span></span>
                <label><b>Email</b></label>
            </div>


            <div class="name">
                <input type="number" name="bid2" required>
                <span></span>
                <label><b>Bid amount</b></label>
            </div>


            <input type="submit" value="SUBMIT">

        </form>
    </div>

    <script src=" code.js">
    </script>
</body>

</html>