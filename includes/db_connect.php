$host = "0.0.0.0:3306";
$Name = "root";
$pass = "root";
$data = "Wakala";

$conn = mysqli_connect($host, $Name, $pass, $data);

if (!$conn){
    die("Hujaunganishwa na kitunza kumbukumbu: " . "<br>" . mysqli_connect_error());
}
