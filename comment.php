<?php
session_start();

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
    $maoni = $_POST["maoni"];

    $sql = "INSERT INTO Comment (username, email, maoni) VALUES ('$username', '$email', '$maoni')";

    // Execute SQL statement and show result
    if (mysqli_query($conn, $sql)) {
        // Registration successful
        // Redirect to home.php or any other desired location after successful registration
        echo "<script>alert('comment successfully sent');</script>";
        //header("Location: home.php");
        //exit();
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

<?php
//0672083472
?>
