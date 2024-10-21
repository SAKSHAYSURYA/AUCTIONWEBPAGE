<?php
include 'database.php';
session_start();

$_SESSION['gp'];
$_SESSION['rp'];
$_SESSION['pp'];

$username = "";
$email = "";
$val = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username1"];
    $email = $_POST["email1"];
    $_SESSION['gp1'] = $_POST["bid1"];
    // if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    //     echo '<script>alert("ENTER VALID EMAIL STRUCTURE")</script>';
    // } else {
    //     if ($_SESSION['gp1'] < $_SESSION['gp']) {
    //         echo '<script>alert("YOUR BIDDING SHOULD BE HIGHER THAN OR EQUAL TO THE CURRENT AMOUNT")</script>';
    //     } else {
    $_SESSION['gp'] = $_SESSION['gp1'];
    $val = $_SESSION['gp'];
    echo '<script>alert("THANK TOU FOR THE SUBMISSION")</script>';
}
$SQL_guitar = "INSERT INTO guitar (name1 , email1 , bid1) VALUES ('$username','$email',$val)";
$SQL_item1 = "INSERT INTO itemtable (gcurrentbid) VALUES ($val)";

try {
    mysqli_query($conn, $SQL_guitar);
    mysqli_query($conn, $SQL_item1);
    // echo "thank you for the regestration ";
} catch (mysqli_sql_exception) {
    // echo "could not register user";
}

mysqli_close($conn);
//     }
// }
