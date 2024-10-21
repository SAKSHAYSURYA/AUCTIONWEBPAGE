<?php
include 'database.php';
session_start();

$_SESSION['gp'];
$_SESSION['rp'];
$_SESSION['pp'];

$username2 = "";
$email2 = "";
$val2 = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username2 = $_POST["username2"];
    $email2 = $_POST["email2"];
    $_SESSION['rp1'] = $_POST["bid2"];

    if (filter_var($email2, FILTER_VALIDATE_EMAIL) == false) {
        echo '<script>alert("ENTER VALID EMAIL STRUCTURE")</script>';
    } else {
        if ($_SESSION['rp1'] < $_SESSION['rp']) {
            echo '<script>alert("YOUR BIDDING SHOULD BE HIGHER THAN OR EQUAL TO THE CURRENT AMOUNT")</script>';
        } else {
            $_SESSION['rp'] = $_SESSION['rp1'];
            $val2 = $_SESSION['rp'];
            echo '<script>alert("THANK TOU FOR THE SUBMISSION")</script>';
        }

        $SQL_ball = "INSERT INTO rball ( name2 , email2 , bid2) VALUES ('$username2','$email2',$val2)";
        $SQL_item2 = "INSERT INTO itemtable (bcurrentbid) VALUES ($val2)";
        try {
            mysqli_query($conn, $SQL_ball);
            mysqli_query($conn, $SQL_item2);

            // echo "thank you for the regestration ";
        } catch (mysqli_sql_exception) {
            // echo "could not register user";
        }

        mysqli_close($conn);
    }
}
