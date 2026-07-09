<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "adoption";

// Database connection
 $con = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `adoption`.`pet`(email, password)
            VALUES ('$email', '$password')";

    if (mysqli_query($con, $sql)) {
        echo "Successfully Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);

?>