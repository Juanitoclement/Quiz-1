<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carrental";
    $usernameloc = $_POST['username'];
    $passwordloc = $_POST['password'];
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        echo "Connected successfully";

    $query = "SELECT * FROM carsharing WHERE Username = '$usernameloc' AND Password = '$passwordloc' ";
    header("Location: Availableoffers.php");
 ?>
