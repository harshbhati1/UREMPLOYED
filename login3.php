<html>
<head>
<body>
<?php  

$servername = "localhost";
$username = "contact";
$password = "sitare4545";
$dbname = "contact1";
$name=$_POST["name"];//receiving name field value in $name variable  

$email=$_POST["email"];//receiving name field value in $name variable
$contact=$_POST["contact"];//receiving password field value in $password variable  
  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO table1 (name, email, contact) VALUES ('$name', '$email', '$contact')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Welcome: $name, your response is: $contact";  
?>  
</body
</html>
   