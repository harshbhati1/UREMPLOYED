<html>
<head>
<body>
<?php  

$servername = "localhost";
$username = "signin";
$password = "signin4545";
$dbname = "website";
$name=$_POST["name"];//receiving name field value in $name variable  

$email=$_POST["email"];//receiving name field value in $name variable
$pass=$_POST["pass"];//receiving password field value in $password variable  
  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO signin (name, email, password) VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
  
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Welcome: $name, your response is: $pass";  
?>  
</body
</html>
   