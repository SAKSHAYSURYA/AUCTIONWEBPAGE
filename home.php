<?php
session_start();
$_SESSION['gp'] = $_SESSION['gp'] ?? 1000;
$_SESSION['rp'] = $_SESSION['rp'] ?? 199;
$_SESSION['pp'] = $_SESSION['pp'] ?? 9999;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidwise Solutions</title>
    <link href='https://fonts.googleapis.com/css?family=Spartan' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <section id="header">
        <a href=""><img src="/DBMS MINI PROJECT/images/logo/bidwise-high-resolution-logo-transparent2 - Copy.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="bid.php">BID</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </section>
    <section id="frontpage">
        <style>
            #frontpage {
                background-image: url("/DBMS MINI PROJECT/images/homepagebg.png");
                height: 400px;
                width: 1070;
                background-size: cover;
                padding: 0 80px;
                display: flex;
                flex-direction: column;
                align-items: flex-end;
            }

            #frontpage h1 {
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 30px;
                color: white;
                padding-right: 40px;
            }

            #frontpage p {
                font-size: 15px;
                color: white;
                padding-right: 260px;
            }
        </style>
        <h1>BID BEFORE THE TIME FLIES</h1>
        <p>Look for the items below...</p>
    </section>

    <section id="item1" class="section-p1">
        <h2>Items for now</h2>
        <div class="item-container">
            <div class="pro">
                <img src="\DBMS MINI PROJECT\images\greenworld.png">
                <div class="desc">
                    <span>Greenworld signed guitar</span>
                    <h5>
                        current price:
                    </h5>
                    <h4>$<?php echo $_SESSION['gp']; ?>
                    </h4>
                </div>
                <h3 class="padd"><b>Closing at : 12/04/2024</b></h3>
                <a href="bidg.php">
                    <button class="bidc">BID</button>
                </a>
            </div>

            <div class="pro">
                <img src="\DBMS MINI PROJECT\images\cr7.jpg">
                <div class="desc">
                    <span>Ronaldo signed ball</span>
                    <h5>
                        current price:
                    </h5>
                    <h4>$<?php echo $_SESSION['rp']; ?></h4>
                </div>
                <h3 class="padd"><b>Closing at : 19/04/2024</b></h3>
                <a href="bidb.php">
                    <button class="bidc">BID</button>
                </a>
            </div>

            <div class="pro">
                <img src="\DBMS MINI PROJECT\images\Paul-Newman-RolexDaytona.jpg">
                <div class="desc">
                    <span>paul-newman-rolex</span>
                    <h5>
                        current price:
                    </h5>
                    <h4>$<?php echo $_SESSION['pp']; ?></h4>
                </div>
                <h3 class="padd"><b>Closing at : 9/04/2024</b></h3>
                <a href="bidc.php">
                    <button class="bidc">BID</button>
                </a>
            </div>

            <div class="pro">
                <img src="\DBMS MINI PROJECT\images\1960.jpg">
                <div class="desc">
                    <span>1960's wallet</span>
                    <h5>
                        SOLD:
                    </h5>
                    </h5>
                    <h4>$4000</h4>
                </div>
                <h3 class="padd"><b>Closed at : 01/04/2024</b></h3>
                <a href="bid.php">
                    <button class="bidc" disabled><s>BID</s></button>
                </a>
            </div>
        </div>
    </section>



    <script src=" code.js">
    </script>
</body>

</html>