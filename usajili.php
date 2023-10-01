<?php
//require_once "includes/db_connect.php";

$host = "0.0.0.0:3306"; 
$Name = "root"; 
$pass = "root"; 
$data = "Wakala"; 

$conn = mysqli_connect($host, $Name, $pass, $data); 

if (!$conn){
   die("Hujaunganishwa na kitunza kumbukumbu: " . "<br>" . mysqli_connect_error()); }

// Get user input data from form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["name"];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    // Execute SQL statement and show result
    if (mysqli_query($conn, $sql)) {
        // Registration successful
        // Redirect to home.php or any other desired location after successful registration
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// No need to redirect here, it's outside the 'POST' request block
// Redirecting should only happen after a successful registration
// Redirect to home.php or any other desired location after successful registration
// header("Location: index.php");
// exit();

// Close database connection
mysqli_close($conn);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Shop - Registration</title>
    <link rel="stylesheet" href="https://samtest.rf.gd/assets/css/style.css">
    
</head>
<body>

<div class="login-form">
    <h2>Register</h2>
    <form action="usajili.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="name" placeholder="Enter Username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter Email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Enter Password" name="password" required><br>

        <button type="submit" class="btn-1" value="Register">Register</button>
    </form>
</div>

<div class="sign-up">
    <a href="index.php">login</a>
</div>


<style>
/* styles.css *

/* General Styles *
/* Reset default margins and paddings */
html, body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Set a background color and font styles */
body {
    font-family: Arial, sans-serif;
    background-color: orange;
}

/* Style the login form container */
.login-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 20px blue;
    border-radius: 5px;
    margin-top: 50px;
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.login-form label {
    display: block;
    margin-bottom: 10px;
    color: #333;
}

.login-form input[type="text"],
.login-form input[type="email"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 20px;
}

.login-form button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.btn-1:hover{
    background: oranged;
}

/* Style the sign-up link */
.sign-up {
    text-align: center;
    margin-top: 10px;
}

.sign-up a {
    color: #333;
    text-decoration: none;
}

.sign-up a:hover {
    text-decoration: underline;
}







body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header */
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

header h1 {
    margin: 0;
}

/* Forms *
form {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
input[type="number"],
input[type='email'] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button[type="submit"] {
    background-color: rgb(130, 191, 226);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.button1:hover {
    background-color: chartreuse;
}

/* Tables *
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

/* Links *
a {
    color: rgb(98, 236, 132);
    text-decoration: none;
}

a:hover {
    color: rgb(202, 147, 238);
}
*/

</style>
</body>
</html>

