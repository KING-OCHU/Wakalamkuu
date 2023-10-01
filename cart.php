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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAKALA MKUU | Cart</title>
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
    <div id="showcase">
    </div>
    <br><br>
    <div class="cart">
        <h2>Your Cart</h2>
        <?php
        
        
        
         if (empty($_SESSION['cart'])) : ?>
            <p>Your cart is empty.</p>
        <?php else : ?>
            <ul>
                <?php foreach ($_SESSION['cart'] as $item) : ?>
                    <li><?php 
                      echo $item; ?>
                      <?php //echo "-"; ?>
                      <?php
                     // echo $Price; ?>
                     <?php echo "<br>"; ?>
                     <?php echo $lipa; 
                      ?></li>
                    
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <br><br><br><br>
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

 .cart{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px blueviolet;
    border-radius: 5px;
    margin-top: 50px;
    width: 70%;
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
    footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    
    bottom: 0;
    width: 100%;
    display: inline-block;
}
</style>
</body>
</html>
