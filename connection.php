
<?php
$host = "Localhost";
$user = "root";
$password = "";
$db_name = "stardiet";

$conn = mysqli_connect($host, $user, $password, $db_name);

if ($conn->connect_error) {
    echo "connection Error".$conn->connect_error;
}
?>
