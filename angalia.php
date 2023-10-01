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
    <title>WAKALA MKUU | HOME</title>
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
            <li><a href="agiza.php">CART</a></li>
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="angalia.php">Angalia</a></li>
            <li><a href="https://samochu.rf.gd">Developer</a></li>
            <li><a href="kutoka.php">Logout</a></li>
        </ul>
    </nav>
    </div>
                
                
        <br>
        
        <marquee>Habari Wakuu. karibu katika website yetu ya Wakala Mkuu. Hapatutakujuza mambo mbali mbali kuhusu wakala</marquee>
        
        <br><br><br><br>

<div class="cart">
        <h2>Your Cart</h2>
        <?php 
        //session_start();
        
        if (empty($_SESSION['cart'])) : ?>
            <p>Your cart is empty.</p>
        <?php else : ?>
            <ul>
                <?php foreach ($_SESSION['cart'] as $item) : ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
