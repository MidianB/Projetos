  
<?php
$servername = "localhost";
$database = "mimosdasol";
$password = "";
$username = "root";

$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn)
 {
     die("A conexão ao BD falhou" . mysqli_connect_error());

 }
 
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

print_r( $result->fetch_all(MYSQLI_ASSOC));
         
      
      
?>