<?php
session_start();
//header("location: cart.php");
// Check if the cart session variable exists, if not create an empty cart array
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Handle form submission when user clicks "Add to Cart"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mashine']) && !empty($_POST['mashine'])) {
        $selectedItem = $_POST['mashine'];
        if ($_POST['mashine'] === 'NMB MASHINE'){
            $Price = "250,000 Tsh.";
            $lipa = "Namba ya lipa kwasimu: 12345";
        }
        
        if ($_POST['mashine'] === 'NMB MASHINE'){
            $Price = "250,000 Tsh.";
            $lipa = "Namba ya lipa kwasimu: 12345";
        }
        
        if ($_POST['mashine'] === 'NMB MASHINE'){
            $Price = "250,000 Tsh.";
            $lipa = "Namba ya lipa kwasimu: 12345";
        }
            
        $_SESSION['cart'][] = $selectedItem;
        
    }
}
?>

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $firstName = sanitize($_POST["Fname"]);
    $middleName = sanitize($_POST["Mname"]);
    $lastName = sanitize($_POST["Lname"]);
    $email = sanitize($_POST["email"]);
    $phoneNumber = sanitize($_POST["number"]);
    $nida = sanitize($_POST["nida"]);
    $tinNumber = sanitize($_POST["TinNumber"]);
    $mashine = sanitize($_POST["mashine"]);

    // Database connection parameters
    $servername = "0.0.0.0:3306";
    $username = "root";
    $password = "root";
    $dbname = "Wakala";

    // Create a connection to the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to insert form data into the database table
    $sql = "INSERT INTO Orders (firstName, middleName, lastName, email, phoneNumber, Nida, tinNumber, mashine)
            VALUES ('$firstName', '$middleName', '$lastName', '$email', '$phoneNumber', '$nida', '$tinNumber', '$mashine')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Order placed successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

// Function to sanitize form data
function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAKALA MKUU | MASHINE ORDER</title>
    <link rel="shortcut icon" href="asset/icon.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles.css">
</head>
<body>
    <div class="header">
        <header>
            <h1>WAKALA MKUU</h1>
        </header>

        <nav>
            <!-- Add navigation links here -->
            <ul>
                <li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="cart.php">CART</a></li>
            <li><a href="https://samochu.rf.gd">Developer</a></li>
            <li><a href="kutoka.php">Logout</a></li>
            </ul>
        </nav>
    </div>

    <br>

    <marquee>Habari Wakuu. karibu katika website yetu ya Wakala Mkuu. Hapatutakujuza mambo mbali mbali kuhusu wakala</marquee>

    <br><br><br><br>
    

    <div class="login-form">
        <h2>ORDER MASHINE ZA SUPER AGENT</h2>
        <form action="agiza.php" method="post">
            <label for="username">First Name</label>
            <input type="text" id="username" maxlength="50" name="Fname" placeholder="Enter your First name" required><br>

            <label for="username">Middle Name</label>
            <input type="text" id="username" name="Mname" placeholder="Enter your Middle name" maxlength="50" required><br>

            <label for="username">Last Name</label>
            <input type="text" id="username" name="Lname" placeholder="Enter your Last name" maxlength="50" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" maxlength="90" required><br>

            <label for="comment">Phone Number:</label>
            <input type="tel" name="number" placeholder="Enter your phone number" maxlength="13" required><br>

            <label for="nida">Nida (Nation Identity)</label>
            <input type="number" name="nida" id="" placeholder="Enter your National Identity" maxlength="20" required><br>

            <label for="username">TIN NUMBER</label>
            <input type="number" id="username" name="TinNumber" maxlength="10" placeholder="Enter your TIN NUMBER" required><br>

            <select id="sample" name="mashine">
                <option value="SAMPLE"> Choose Mashine </option>
                <option value="SELCOM MASHINE: 250,000 Tsh. <br> Ili kulipa piga simu: +255747881321"> SELCOM MASHINE</option>
                <option value="NMB MASHINE: 250,000 Tsh. <br>Ili kulipa piga simu: +255747881321"> NMB MASHINE</option>
                <option value="CRDB MASHINE: 250,000 Tsh. <br> Ili kulipa piga simu: +255747881321"> CRDB MASHINE</option>
            </select>

            <button type="submit" value="Add to Cart">Add to Cart</button>
        </form>
    </div>

    <br><br><br><br>

    <!-- Rest of the styles and footer section -->

    

    <style>
        /* Rest of the CSS styles */
    </style>

    <footer>
        <p class="dev">Made by <b><a href="https://samochu.rf.gd">SAM OCHU</a></b> <br>
            Developer from <b><a href="https://samtechnology1.rf.gd">SAM TECHNOLOGY BRAND</a></b>
        </p>
        <br><br>
        <p> 2023&copy; WAKALA MKUU. | All rights reserved.</p>
    </footer>

    <style>
        /* CSS Reset */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
    
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: pink;
    color: blueviolet;
}

header {
    background-color: orangered;
    color: #fff;
    text-align: center;
    padding: 10px;
    top: 0%;
    width: 100%;
   
}

#showcase{
  min-height:450px;
  background:url('./asset/icon.jpg') no-repeat;
  background-position: center;
  background-size: cover;
  text-align:center;
  color:#ffffff;
}

nav {
    /*background-color: rgb(136, 67, 67); */
    padding: 10px;
    position: fixed;
    width: 100%;
    background-color: orange;
}

footer .dev{
    float: left;
}

nav:hover{
    background: rgb(72, 67, 136);
}

header:hover{
    background: rgb(39, 35, 104);
}

nav ul {
    list-style-type: none;
    text-align: center;
}

nav li {
    display: inline;
    margin: 0 10px;
}

nav a {
    text-decoration: none;
    color: #fff;
}

nav a:hover {
    text-decoration: underline;
}

main {
    margin: 20px;
}

.news-section {
    border: 1px solid #ccc;
    padding: 10px;
}

.news-section h2 {
    margin-bottom: 10px;
}

.news-section article {
    margin-bottom: 20px;
}

.news-section h3 {
    margin-bottom: 5px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    
    bottom: 0;
    width: 100%;
    display: inline-block;
}

.nmb{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px purple;
    border-radius: 5px;
    margin-top: 50px;
}

.crdb{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px purple;
    border-radius: 5px;
    margin-top: 50px;
}

/*   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
 *//*
header {
    background-color: rgb(117, 52, 52);
    color: #fff;
    padding: 10px;
    text-align: center;
    
}
 
/*  .slider-container {
    width: 80%;
    margin: 0 auto;
}
/*  /

.slider {
    display: flex;
    overflow: hidden;
    position: relative;
}

/*  *
.slider img {
    width: 100%;
    height: auto;
} */
/*  *
.sentence-slider {
    text-align: center;
    margin-top: 20px;
    padding: 10px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
}

.loading {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
    font-size: 24px;
    font-weight: bold;
} */

/*
 */
 .cart{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px blueviolet;
    border-radius: 5px;
    margin-top: 50px;
    width: 70%;
 }
 
.one{
    margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px blueviolet;
    border-radius: 5px;
    margin-top: 50px;
}

.two{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px hotpink;
    border-radius: 5px;
    margin-top: 50px;
}

.three{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px greenyellow;
    border-radius: 5px;
    margin-top: 50px;
}

.four{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px blue;
    border-radius: 5px;
    margin-top: 50px;
}

.six{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px lightgreen;
    border-radius: 5px;
    margin-top: 50px;
}

.seven{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px purple;
    border-radius: 5px;
    margin-top: 50px;
}

.eight{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px lightsteelblue;
    border-radius: 5px;
    margin-top: 50px;
}

.nb{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px green;
    border-radius: 5px;
    margin-top: 50px;
}

Marquee{
    margin: 0 auto;
    padding: 10px;
    background-color: fuchisia;
    box-shadow: 0 0 10px brown;
    border-radius: 5px;
    margin-top: 30px;
    position: fixed;
    
    }
    
Marquee:hover{
    margin: 0 auto;
    padding: 10px;
    background-color: fuchisia;
    box-shadow: 0 0 10px goldenrod;
    border-radius: 5px;
    margin-top: 30px;
    color: blueviolet;
    cursor: pointer;
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
.login-form input[type="tel"],
.login-form input[type="number"],
.login-form select {
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

.login-form button:hover{
    background-color: orange;
}

.contact{
    float: left;
    width: 100%;
    justify-content: center;
    justify-items: center;
    text-align: center;
    
    color: rgb(170, 21, 21);
    margin: 0 auto;
    padding: 10px;
    background-color: fuchisia;
    box-shadow: 0 0 40px lightsteelblue;
    border-radius: 5px;
    margin-top: 50px;
}

footer p a{
    display: inline-block;
}

.wasap{
    position: styck;
}

.crdb:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px rgb(72, 67, 136);
    border-radius: 5px;
    margin-top: 50px;
}

.nmb:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px rgb(72, 67, 136);
    border-radius: 5px;
    margin-top: 50px;
}

.one:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px orange;
    border-radius: 5px;
    margin-top: 50px;
}
.two:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px rgb(72, 67, 136);
    border-radius: 5px;
    margin-top: 50px;
}
.three:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px orangered;
    border-radius: 5px;
    margin-top: 50px;
}
.four:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px orangered;
    border-radius: 5px;
    margin-top: 50px;
}
.five:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px orangered;
    border-radius: 5px;
    margin-top: 50px;
}
.six:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px orangered;
    border-radius: 5px;
    margin-top: 50px;
}
.seven:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px orangered;
    border-radius: 5px;
    margin-top: 50px;
}
.eight:hover{
    background: rgb(2, 255, 23);
    padding: 20px;
    
    box-shadow: 0 0 40px orangered;
    border-radius: 5px;
    margin-top: 50px;
}
.nb:hover{
   background: rgb(2, 255, 23);
   padding: 20px;
    
    box-shadow: 0 0 40px orangered;
    border-radius: 5px;
    margin-top: 50px;
}

p button{
    background: green;
    border-radius: 5px;
    text-align: center;
    justify-content: center;
    text-algin: center;
    front-size: 20px;
    width: 150px;
    height: 59px;
}

p button:hover{
    background: gold;
}

/*.one{
    background: rgb(252, 135, 2);
}
.two:{
    background: rgb(252, 2, 189);
}
.three{
    background: rgb(252, 135, 2);
}
.four{
    background: rgb(252, 2, 189);
}
.five{
    background: rgb(252, 135, 2);
}
.six{
    background: rgb(252, 2, 189);
}
.seven{
    background: rrgb(252, 135, 2);
}
.eight{
    background: rgb(252, 2, 189);
}
.nb{
   background: rgb(252, 135, 2);
}*/
    </style>
</body>
</html>
