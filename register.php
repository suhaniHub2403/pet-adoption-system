<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "adoption";


$con = mysqli_connect($server, $username, $password, $dbname);

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
        // echo "Successfully Inserted";
    } else {

        echo "Error: " . $sql . "<br>" . $con->error;
    }

} 
$con->close();

?>

<!DOCTYPE html>
<html lang="en">
 
<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>PetAdopt | Register</title>

<link rel="stylesheet" href="register.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

<div class="container">

<div class="left">

<h1>
<i class="fa-solid fa-paw"></i>
PetAdopt
</h1>

<h2>Create Your Account</h2>

<p>

Join thousands of happy pet lovers and begin your adoption journey today.

</p>

<img src="images/register-pet.png" alt="Pet">

</div>

<div class="right">

<form id="registerForm" action="register.php" method="post">

<h2>Registration</h2>

<div class="input-box">

<i class="fa-solid fa-user"></i>

<input type="text" id="name" name="name" placeholder="Full Name" required>

</div>

<div class="input-box">

<i class="fa-solid fa-envelope"></i>

<input
type="email" id="email" name="email" placeholder="Email Address" required>

</div>

<div class="input-box">

<i class="fa-solid fa-phone"></i>

<input
type="tel" id="phone" name="phone" placeholder="Phone Number" required>

</div>

<div class="input-box">

<i class="fa-solid fa-calendar"></i>

<input type="date" name="date" required>

</div>

<div class="gender">

<label>

<input type="radio" name="gender"  required>

Male

</label>

<label>

<input type="radio" name="gender">

Female

</label>

<label>

<input type="radio" name="gender">

Other

</label>

</div>

<div class="input-box">

<i class="fa-solid fa-lock"></i>

<input
type="password" id="password" name="password" placeholder="Password" required>

<span class="togglePassword">

<i class="fa-solid fa-eye"></i>

</span>

</div>

<div class="input-box">

<i class="fa-solid fa-lock"></i>

<input type="password" id="confirmPassword" name="confirm Password" placeholder="Confirm Password" required>

</div>

<div class="strength">

<div id="strengthBar"></div>

</div>

<label class="terms">

<input type="checkbox" required>

I agree to the Terms & Conditions

</label>

<button type="submit">

<i class="fa-solid fa-user-plus"></i>

Create Account

</button>

<p class="login-text">

Already have an account?

<a href="login.php">Login Here</a>
</p>
<a href="index.php" class="home">
<i class="fa-solid fa-house"></i>
Back to Home
</a>
</form>
</div>
</div>
</body>
</html>