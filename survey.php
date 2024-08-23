<html>
<head>
<body>
<?php  

$servername = "localhost";
$username = "survey";
$password = "1234567";
$dbname = "website";
$name=$_POST["name"];//receiving name field value in $name variable 
$dob=$_POST["dob"];//receiving name field value in $name variable 
$email=$_POST["email"];//receiving name field value in $name variable
$gender=$_POST["gender"];//receiving password field value in $password variable  
$hlu=$_POST["hlu"];//receiving password field value in $password variable 
$try=$_POST["try"];//receiving name field value in $name variable 
$care=$_POST["care"];//receiving name field value in $name variable
$steps=$_POST["steps"];//receiving name field value in $name variable
$steps1=$_POST["steps1"];//receiving name field value in $name variable
$steps2=$_POST["steps2"];//receiving name field value in $name variable
$steps3=$_POST["steps3"];//receiving name field value in $name variable
$steps4=$_POST["steps4"];//receiving name field value in $name variable
$steps5=$_POST["steps5"];//receiving name field value in $name variable
$steps6=$_POST["steps6"];//receiving name field value in $name variable
$steps7=$_POST["steps7"];//receiving name field value in $name variable
$steps8=$_POST["steps8"];//receiving name field value in $name variable
$steps9=$_POST["steps9"];//receiving name field value in $name variable
$steps10=$_POST["steps10"];//receiving name field value in $name variable
$time=$_POST["time"];//receiving name field value in $name variable
$look=$_POST["look"];//receiving name field value in $name variable
$wish=$_POST["wish"];//receiving name field value in $name variable
$wish1=$_POST["wish1"];//receiving name field value in $name variable
$wish2=$_POST["wish2"];//receiving name field value in $name variable
$wish3=$_POST["wish3"];//receiving name field value in $name variable
$wish4=$_POST["wish4"];//receiving name field value in $name variable
$wish5=$_POST["wish5"];//receiving name field value in $name variable
$income=$_POST["income"];//receiving name field value in $name variable
$info=$_POST["info"];//receiving name field value in $name variable
$info1=$_POST["info1"];//receiving name field value in $name variable
$info2=$_POST["info2"];//receiving name field value in $name variable
$info3=$_POST["info3"];//receiving name field value in $name variable
$info4=$_POST["info4"];//receiving name field value in $name variable
$info5=$_POST["info5"];//receiving name field value in $name variable
$free=$_POST["free"];//receiving name field value in $name variable
$free1=$_POST["free1"];//receiving name field value in $name variable
$free2=$_POST["free2"];//receiving name field value in $name variable
$free3=$_POST["free3"];//receiving name field value in $name variable
$free4=$_POST["free4"];//receiving name field value in $name variable
$free5=$_POST["free5"];//receiving name field value in $name variable
$free6=$_POST["free6"];//receiving name field value in $name variable
$free7=$_POST["free7"];//receiving name field value in $name variable
$obstacle=$_POST["obstacle"];//receiving name field value in $name variable
$obstacle1=$_POST["obstacle1"];//receiving name field value in $name variable
$obstacle2=$_POST["obstacle2"];//receiving name field value in $name variable
$obstacle3=$_POST["obstacle3"];//receiving name field value in $name variable
$obstacle4=$_POST["obstacle4"];//receiving name field value in $name variable
$obstacle5=$_POST["obstacle5"];//receiving name field value in $name variable
$obstacle6=$_POST["obstacle6"];//receiving name field value in $name variable
$obstacle7=$_POST["obstacle7"];//receiving name field value in $name variable
$obstacle8=$_POST["obstacle8"];//receiving name field value in $name variable
$obstacle9=$_POST["obstacle9"];//receiving name field value in $name variable
$obstacle10=$_POST["obstacle10"];//receiving name field value in $name variable
$obstacle11=$_POST["obstacle11"];//receiving name field value in $name variable
$feel=$_POST["feel"];//receiving name field value in $name variable
$sol=$_POST["sol"];//receiving name field value in $name variable
$sol1=$_POST["sol1"];//receiving name field value in $name variable
$sol2=$_POST["sol2"];//receiving name field value in $name variable
$sol3=$_POST["sol3"];//receiving name field value in $name variable
$sol4=$_POST["sol4"];//receiving name field value in $name variable
$sol5=$_POST["sol5"];//receiving name field value in $name variable
$sol6=$_POST["sol6"];//receiving name field value in $name variable
$sol7=$_POST["sol7"];//receiving name field value in $name variable

  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO survey (name, dob, email, gender, hlu, try, care, steps, steps1, steps2, steps3, steps4, steps5, steps6, steps7, steps8, steps9, steps10, time,look, wish, wish1, wish2, wish3, wish4, wish5, income, info, info1, info2, info3, info4, info5, free, free1, free2, free3, free4, free5, free6, free7, obstacle, obstacle1, obstacle2, obstacle3, obstacle4, obstacle5, obstacle6, obstacle7, obstacle8, obstacle9, obstacle10, obstacle11, feel, sol, sol1, sol2, sol3, sol4, sol5, sol6, sol7 ) VALUES ('$name', '$dob', '$email', '$gender', '$hlu', '$try', '$care', '$steps', '$steps1', '$steps2', '$steps3', '$steps4', '$steps5', '$steps6', '$steps7',  '$steps8', '$steps9', '$steps10', '$time', '$look', '$wish', '$wish1', '$wish2', '$wish3', '$wish4', '$wish5', '$income', '$info', '$info1', '$info2', '$info3', '$info4', '$info5','$free', '$free1', '$free2', '$free3', '$free4', '$free5', '$free6', '$free7', '$obstacle', '$obstacle1', '$obstacle2', '$obstacle3', '$obstacle4', '$obstacle5', '$obstacle6', '$obstacle7', '$obstacle8', '$obstacle9', '$obstacle10', '$obstacle11', '$feel', '$sol', '$sol1', '$sol2', '$sol3', '$sol4', '$sol5', '$sol6', '$sol7')";

if (mysqli_query($conn, $sql)) {
  
  header("Location:/harsh/index.htm");
  exit();
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Welcome: $name, your response is:";  
?>  
</body
</html>