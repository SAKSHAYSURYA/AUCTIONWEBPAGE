<?php
include 'database.php';
session_start();

$_SESSION['gp'];
$_SESSION['rp'];
$_SESSION['pp'];

$username3 = "";
$email3 = "";
$val3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username3 = $_POST["username3"];
    $email3 = $_POST["email3"];
    $_SESSION['pp1'] = $_POST["bid3"];

    if (filter_var($email3, FILTER_VALIDATE_EMAIL) == false) {
        echo '<script>alert("ENTER VALID EMAIL STRUCTURE")</script>';
    } else {
        if ($_SESSION['pp1'] < $_SESSION['pp']) {
            echo '<script>alert("YOUR BIDDING SHOULD BE HIGHER THAN OR EQUAL TO THE CURRENT AMOUNT")</script>';
        } else {
            $_SESSION['pp'] = $_SESSION['pp1'];
            $val3 = $_SESSION['pp'];
            echo '<script>alert("THANK TOU FOR THE SUBMISSION")</script>';
        }
        $SQL_wat = "INSERT INTO watch ( name3 , email3 , bid3) VALUES ('$username3','$email3',$val3)";
        $SQL_item3 = "INSERT INTO itemtable (wcurrentb) VALUES ($val3)";
        try {
            mysqli_query($conn, $SQL_wat);
            mysqli_query($conn, $SQL_item3);
            // echo "thank you for the regestration ";
        } catch (mysqli_sql_exception) {
            // echo "could not register user";
        }

        mysqli_close($conn);
    }
}
