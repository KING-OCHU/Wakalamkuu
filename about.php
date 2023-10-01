


<?php
// Function to increment website views and store in the database
function count_website_views() {
    // MySQL database connection settings
    $servername = "0.0.0.0:3306";
    $username = "root";
    $password = "root";
    $dbname = "Wakala";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create a table to store website views if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS views (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                views_count INT(11) NOT NULL DEFAULT 0
            )";

    if ($conn->query($sql) === TRUE) {
        // Table created successfully or already exists
    } else {
        echo "Error creating table: " . $conn->error;
        $conn->close();
        return;
    }

    // Retrieve the current views count from the database
    $sql = "SELECT views_count FROM views";
    $result = $conn->query($sql);

    // If no records found, initialize the count to 0
    if ($result->num_rows == 0) {
        $views_count = 0;
    } else {
        $row = $result->fetch_assoc();
        $views_count = $row["views_count"];
    }

    // Increment the count by 1
    $views_count++;

    // Update the database with the new count
    $sql = "UPDATE views SET views_count = $views_count";
    if ($conn->query($sql) === TRUE) {
        // Count updated successfully
    } else {
        echo "Error updating count: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}

// Call the function to increment website views
count_website_views();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAKALA MKUU | ABOUT</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asset/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="asset/styles.css">
</head>
<body>
    <div class="header">
    <header style="background-color: oranged;">
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
    </div><br>

    <marquee>Habari Wakuu. karibu katika website yetu ya Wakala Mkuu. Hapatutakujuza mambo mbali mbali kuhusu wakala</marquee>
 

<br><br><br>
  
  <div id="showcase">
    </div>
  
<div class="mawasiliano">
    <h3><b>Mawasiliano:</b></h3>
    <label for="location"><b>Location:</b> </label>SINGIDA MANYONI <hr> <br>
    <label for="phone number"><b>Phone Number:</b> </label><a href="+255747881321">+255747881321</a> <hr> <br>
    <label for="whatsapp"><b>WhatsApp:</b> </label><a href="https://wa.me/255747881321">+255747881321</a> <hr> <br>
</div>

<div class="da">
     
     <article>

     <h2 ><b>work day</b></h2>
        <p>
        
    <label for="work day"><b> Monday:</b>  </label>7:00am, 15:00pm.<hr> <br>
    <label for="work day"><b> Tuseday:</b> </label>7:00am, 15:00pm.<hr> <br>
    <label for="work day"><b> Wedneday:</b>  </label>7:00am, 15:00pm.<hr> <br>
    <label for="work day"><b> Thursday:</b>  </label>7:00am, 15:00pm.<hr> <br>
    <label for="work day"><b> Friday:</b>  </label>7:00am, 15:00pm.<hr> <br>
    <label for="work day"><b> Satuday:</b>  </label>7:00am, 15:00pm.<hr> <br>
    <label for="work day"><b> Sunday:</b>  </label>7:00am, 15:00pm.
    </article>
</div>
    <footer>
        <p class="dev">Made by <b><a href="https://samochu.rf.gd">SAM OCHU</a></b> <br>
          Developer from <b><a href="https://samtechnology1.rf.gd">SAM TECHNOLOGY BRAND</a></b>
        </p>
        <br><br><br><br>
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
  min-height:420px;
  background:url('../asset/icon.jpg') no-repeat;
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

footer .dev{
    float: left;
}

.da{
    float: left;
    margin: 0 auto;
    padding: 20px;
    background: fuchisia;
    box-shadow: 0 0 40px blueviolet;
    border-radius: 5px;
    margin-top: 50px;
    width: 300px;
}

.mawasiliano{
    float: right;
    margin: 0 auto;
    padding: 20px;
    background: fuchisia;
    box-shadow: 0 0 40px blueviolet;
    border-radius: 5px;
    margin-top: 50px;
    width: 300px;
   /* border-shado: ;*/
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

label{
    display: block;
    margin-bottom: 10px;

}

.login-form input[type="text"],
.login-form input[type="email"],
.login-form textarea {
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
    </style>
</body>
</html>
