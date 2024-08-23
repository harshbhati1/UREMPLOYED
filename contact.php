<html>
<head>
<body>
<?php  

$servername = "localhost";
$username = "contactweb";
$password = "contactweb123";
$dbname = "website";
$name=$_POST["name"];//receiving name field value in $name variable  

$email=$_POST["email"];//receiving name field value in $name variable
$phone=$_POST["phone"];//receiving password field value in $password variable  
$content=$_POST["content"];//receiving password field value in $password variable  
  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, phone, content) VALUES ('$name', '$email', '$phone', '$content')";

if (mysqli_query($conn, $sql)) {
  
  header("Location:/harsh/index.htm");
  exit();
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Welcome: $name, your response is: $content";  
?>  
</body
</html>
   