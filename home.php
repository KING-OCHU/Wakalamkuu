<?php
/*
// Add your dashboard logic here, e.g., fetching user data from the database
session_start();

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit(); 
} */
?>
<?php
  /*  // Retrieve and print data from the database
    $servername = "0.0.0.0:3306";
    $username = "root";
    $password = "root";
    $database = "Wakala";

  // Create a database connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  //  echo "Your connected to Database";
  //  echo "<br>";
} */
?>

<?php /*
// Retrieve data from the database
$query = "SELECT `Id`, `username`, `email`, `maoni` FROM `Comment`";
$result = $conn->query($query);

// Check if query execution was successful
if ($result) {
    // Fetch associative array of the retrieved data
    $rows = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
} */
?>

<?php

/*
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
    $username = $_POST["username"];
    $email = $_POST['email'];
    $maoni = $_POST['maoni'];

    $sql = "INSERT INTO Comment (username, email, maoni) VALUES ('$username', '$email', '$maoni')";

    // Execute SQL statement and show result
    if (mysqli_query($conn, $sql)) {
        // Registration successful
        // Redirect to home.php or any other desired location after successful registration
        echo "<script>alert('Your comment sent successfully!');</script>";
       // header("Location: home.php");
       // exit();
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
*/
?>

<?php
/*
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
*/
?>


<?php
//0672083472
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
    
    <main>
        


<br>

<div class="one">
    <h2><b>Habari Wakuu</b></h2>
Mimi nahusika na upatikanaji wa LINE ZA UWAKALA  na naomba leo nitoe elimu kidogo juu ya FIELD hii ya uwakala baada ya hizi TOZO MPYA
</div>
<br>
<div class="two">
Kwanza kabisa hizi TOZO hazimgusi WAKALA kwa 100% kwa kuwa wakala ni kama mtoa huduma na mlengwa mkuu ni yule FINAL CUSTUMER yaani Mlengwa ni MTEJA WA MWISHO TU
</div>
<br>
<div class="three">
Kwa kuwa mimi nahusika na upatikanaji wa TILL ZA UWAKALA naomba niwatoe HOFU wale wote wanao taka kujikita kwenye FURSA HII
</div>
<br>
<div class="four">
Kiukweli HII kazi INALIPA SANA na ndio maana inazidi kukuwa  SIKU HADI SIKU
</div>
<br>
<div class="six">
Kwanza inatakiwa uwe na LINE ZA UWAKALA kisha tafuta ENEO LENYE USHAWISHI wa BIASHARA hii
</div>

<div class="one">
Anza uwakala sasa. <br>
Salaam wapambanaji..
<br>
Leo nawaletea FURSA hii kubwa na ya kuvutia ya BIASHARA YA UWAKALA wa miamala kwa njia ya simu maarufu kama BIASHARA YA TIGOPESA 
<br>
Hii ni biashara inayolipa sana hasa kwa wapambanaji wenye NJAA  ya maisha na ni SIMPLE kufanyika since hai hitaji mambo mengi
<br>
Hii kazi ilikuwa na ugumu hapo AWALI hasa kipindi kile ambapo WAPAMBANAJI  wana APPLY ili wapate KADI ili waanze biashara na kwa Bahati mbaya au nzuri hukutana na kuzunguswa kwa upatikanaji wa line hizo
<br>
Sisi tumekuja kutatua CHANGAMOTO hiyo in FIRST place kwa kuwaletea huduma kwa urahisi zaidi na UHAKIKA & USALAMA Kwa 100%
<br>
Sasa utapata LINE za uwakala  NDANI YA 24Hrs na Kuanza kazi mapema nawewe Ujiingizie kamisheni ya uhakika..
<br>
Sasa utapata line ya uwakala ya TIGOPESA 120,000 AIRTEL MONEY 90,000 M-PESA 120,000  & HALOPESA 50,000
<br>
<h2><b>HIZI NI FAIDA ZA KUFANYA KAZI NA SISI</b></h2>

i) Line zote zitasoma jina lako
<br>
ii) Mteja(wakala) atawekewa float kulingana na kiasi 
<br>
iii) Mteja (Wakala) Ataunganishwa na wakala wake mkuu na kupewa elimu juu ya biashara hii
<br>
iv)Line zako zitafanya kazi POPOTE & MUDA wote huku ukipokea report ya KAMISHENI yako kila siku
</div>
<br>
<br>
<div class="seven">
<h2><b>LINE ZA SUPER AGENT ZINAPATIKANA.</b></h2> 

M-PESA 150,000 <br>
TIGOPESA 150,000 <br>
HALOPESA 150,000 <br>
AIRTELMONEY 150,000 <br><br>

<h2><b>MAHITAJI</b></h2>
1.TIN NUMBER <br>
2.NUMBER YA NIDA <br>
3.LESENI YA BIASHARA <br>
4.LINE MPYA ISIYOFUNGULIA ACOUNT <br>
5.PASSPORT SIZE <br>


</div>
<div class="nb">
NB:IWAPO UTAFANYA HII KAZI KWA MAKINI LAZIMA COMMISION ISOME NONO KWA MWEZI
</div>
<br>
<div class="eight">
<h3><b>SELCOM</b></h3>
Selcom ni kampuni inayojishughulisha na kusaidia miamala au huduma za kifedha kufanyika katika sehemu moja kama kwenye mashine zetu,(POS), SELCOM PAYPOINT, SELCOM CARD.
Huduma hizo za kurahisha miamala ambayo wakala wetu wa SELCOM anaweza kumsaidia mteja kuifanya ni kama:
*Kuwanunulia wateja Vocha Airtel,Vodacom,Tigo,Halotel,TTCL n,k <br>
*Kulipia Vingamuzi kama DSTV,STAR TIMES,AZAM,ZUKU n.k<br>
*Kulipia LUKU<br>
*Kufanya malipo ya kiserikali kwa Control number<br>
*Kuwa wakala wa kbenki kama NMB,TPB,AKIBA,NBC n.k kwa kuunganishwa kwenye mashine
Na huduma nyingine kem-kem.<br><br>
<h3><b>HUDUMA KATIKA MASHINE YA SELCOM</b></h3>
Kila muamala utakaofanya una kamisheni na hizo hapo ni baadhi tu ya faida za kumiliki mashine zetu za Selcom.Faida ya kutumia Selcom Paypoint App ni kuweza kufanya miamala mbalimbali kama vile kununua LUKU, muda wa maongezi (Airtel, Vodacom, TTCL, Zantel na Tigo), kulipia DAWASCO, NHC, AfriSmart, vifurushi vya internet (Smile & UhuruOne) na vifurushi vya ving'amuzi vya DSTV, BoxOffice, Azam TV, ZUKU, Startimes na vingine vingi popote pale ulipo na muda wowote. 
<br><br>
Mashine ya Selcom 250,000<br><br>

Selcom Lite kwa njia ya simu *150*50# 50,000/=
<br><br><br>

<p class="oder-btn">
<a href="agiza.php"><button> ORDER SELCOM MACHINE</button></a>
   </p>
   
</div>


<div class="nmb">
    <h2><b>WAKALA WA NMB</b></h2>
    Wakala wa NMB ni sawasawa na wakala yoyote wa Mitandao ya simu tofauti sasa huyu ni wa BENK na anafanya karibu miamala yote na shughuli zote ambazo BENK inafanya Tumemchagua wakala ili aweze kutusaidia kwenda kule sehemu ambazo hatupo na Aweze kusaidia wateja wetu na pia kusaidia wateja wengine waweze kufanya huduma nyingine kama kulipia MALIPO YA SELIKALI,VING'AMUZI,BILI ZA MAJI,LUKU,KUWEKA PESA,KUTOA PESA NK hizo zote huduma zinapatikana kwa wakala wa
NMB
<br><br>
<b>VIGEZO VYA KUWA WAKALA
WA KANK YA NMB<b> <br>

👉Leseni ya Biashara<br>
👉kitambulisho chochote <br>
👉Pasport size Mbili<br>
👉Namba ya Nida<br>
👉Hela ya Mashine 250,000<br>
👉Mtaji si chini Tsh milioni mbili 2M<br>
👉Gharama ya kutengenezewa 250,000/=<br>
<br><br>

<i>NMB KARIBU YAKO *150*66#</i>
<br><br><br>
    <h3><b>Faida za kuwa NMB Wakala</b></h3>
Kufanya biashara na Taasisi kubwa inayoongoza kwa utoaji huduma za kifedha Tanzania na Afrika Mashariki kwa ujumla
Kupata malipo mazuri kutokana na kutoa huduma kwa wateja wa NMB
Ongezeko la wigo la wateja katika biashara yako kwani kila mteja  wa NMB atalazimika kutembelea biashara yako
Kuleta ufanisi katika biashara yako kwa usimamizi wa pesa kwani utakua unawatumikia wateja wa NMB ambao hutoa pesa taslim mara kwa mara kwa hivyo kupunguza hatari ya kutokua na pesa taslim<br>
Kuongeza uwezo kupitia mafunzo ya bure kutoka Benki ya NMB katika masuala ya kijasiriamali, huduma za kibenki, na mbinu mbalimbali za kuzuia utakatishaji fedha na udanganyifu wa kifedha.

<p class="oder-btn">
<a href="agiza.php"><button> ORDER NMB MACHINE</button></a>
   </p>
    
</div>

<div class="crdb">
   <h2><b>WAKALA WA BANK YA CRDB</b></h2>
    Wakala wa CRDB ni sawasawa na wakala yoyote wa Mitandao ya simu tofauti sasa huyu ni wa BENK na anafanya karibu miamala yote na shughuli zote ambazo BENK inafanya Tumemchagua wakala ili aweze kutusaidia kwenda kule sehemu ambazo hatupo na Aweze kusaidia wateja wetu na pia kusaidia wateja wengine waweze kufanya huduma nyingine kama kulipia MALIPO YA SELIKALI,VING'AMUZI,BILI ZA MAJI,LUKU,KUWEKA PESA,KUTOA PESA NK hizo zote huduma zinapatikana kwa wakala wa
CRDB
<br><br><br>
<h2><b>VIGEZO VYA KUWA WAKALA
WA BANK YA CRDB</b></h2>

👉Leseni ya Biashara<br>
👉kitambulisho chochote <br>
👉Pasport size Mbili<br>
👉Namba ya Nida<br>
👉Hela ya Mashine 250,000<br>
👉Mtaji si chini Tsh milioni mbili 2M<br>
👉Gharama ya kutengenezewa 250,000/=<br>
<br><br>
<i>CRDB ULIPO TUPO *150*03#</i>

<br><br><br>

<h2><b>Faida za kuwa CRDB Wakala</b></h2>
Kufanya biashara na Taasisi kubwa inayoongoza kwa utoaji huduma za kifedha Tanzania na Afrika Mashariki kwa ujumla
Kupata malipo mazuri kutokana na kutoa huduma kwa wateja wa CRDB
Ongezeko la wigo la wateja katika biashara yako kwani kila mteja  wa CRDB atalazimika kutembelea biashara yako
Kuleta ufanisi katika biashara yako kwa usimamizi wa pesa kwani utakua unawatumikia wateja wa CRDB ambao hutoa pesa taslim mara kwa mara kwa hivyo kupunguza hatari ya kutokua na pesa taslim
Kuongeza uwezo kupitia mafunzo ya bure kutoka Benki ya CRDB katika masuala ya kijasiriamali, huduma za kibenki, na mbinu mbalimbali za kuzuia utakatishaji fedha na udanganyifu wa kifedha. <br><br>
<p class="oder-btn">
<a href="agiza.php"><button> ORDER CRDB MACHINE</button></a>
   </p> 
</div>
<br><br>
<!--  
<div class="comment">
    <h2>Comments</h2>
    
    <br><br>
    <hr>
    <!--  <img src="asset/icon.jpg" width="45" height="40" alt=""></img>  --></img> <?php foreach ($rows as $row) { ?>
<p><?php echo $row['username']; ?>
<p><?php //echo $row['email']; ?></p>
<p class="comments"><?php echo $row['maoni']; ?></p>
<hr>
<br><br>
<hr>
<!--  <img src="asset/icon.jpg" width="45" height="40" alt=""></img>  -->
    <?php } ?>
    </div>
    <br><br>
</div>
    
    <br><br>
    <div class="login-form">
    <h2>Leave comment</h2>
    <form action="comment.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your Name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your Email" required><br>
        
        <label for="comment">Comment:</label>
        <textarea name="maoni" placeholder="Enter your comment here..." required></textarea>

        <button type="submit" value="Login">Send</button>
    </form>
</div>

    <br><br> -->
    <div class="contact">
        Jiunge nasi Telegram
<a href="https://t.me/Wakaladigital">Wakaladigital</a>
<br>
Call <a href="+255747881321">+255747881321</a>
<br>
WhatsApp <a href="https://wa.me/255747881321">+255747881321</a>
        </div>
    <br><br>

<br><br><br><br>



    </main> 

    <footer>
    <p class="dev">Made by <b><a href="https://samochu.rf.gd">SAM OCHU</a></b> <br>
          Developer from <b><a href="https://samtechnology1.rf.gd">SAM TECHNOLOGY BRAND</a></b>
        </p>
        <br><br>
        <p> 2023&copy; WAKALA MKUU. | All rights reserved.</p>
    </footer>

    <style>
        .comment{
               margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px purple;
    border-radius: 5px;
    margin-top: 50px;
        }
        
        .commentsf {
        margin: auto;
    padding: auto;
    background-color: fuchisia;
    box-shadow: 0 0 40px purple;
    border-radius: 5px;
    margin-top: 10px;
    overflow: auto;
    text-overflow: auto;
}

.comments{
    box-shadow: 0 0 40px purple;
    border-radius: 5px;
    overflow: scroll;
    text-overflow: scroll;
}
        
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
