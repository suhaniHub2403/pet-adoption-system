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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
 
    $sql = "INSERT INTO pet1 (Name, email, phone, Date, Gender, Password) VALUES ('$name', '$email', '$phone', '$date', '$gender', '$password')";

    if ($con->query($sql) === true) {
        echo "Successfully Inserted";
    } else {

        echo "Error: " . $sql . "<br>" . $con->error;
    }

} 
$con->close();

?>