<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "adoption";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM pet1";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Dashboard</title>

    <link rel="stylesheet" href="regdash.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<header>
    <h2><i class="fa-solid fa-paw"></i> Pet Adoption Dashboard</h2>
    <a href="index.php">Home</a>
</header>

<div class="container">

<h1>Registered Users</h1>

<table>

<thead>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Date</th>
    <th>Gender</th>
    <th>password</th>
</tr>
</thead>

<tbody>

<?php

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

        echo "<tr>
                <td>".$row['Name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['Date']."</td>
                <td>".$row['Gender']."</td>
                <td>".$row['Password']."</td>
              </tr>";
    }

}else{

    echo "<tr>
            <td colspan='6'>No Records Found</td>
          </tr>";

}

mysqli_close($con);

?>

</tbody>

</table>

</div>

</body>
</html>