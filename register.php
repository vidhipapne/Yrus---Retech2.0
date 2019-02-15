<?php 
 
$servername = "localhost";
$username = "root";
$pass = "";
$db="appointment";

$name = $_POST['name'];
$password = $_POST['password'];

$conn = mysqli_connect($servername, $username, $pass,$db);
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 
else
    echo "connected ";
 echo"<br>";
 $sql = "INSERT INTO register(name,password)
  VALUES ('$name','$password');";

 $command="INSERT INTO doctorlogin(name ,password)
                        VALUES ('$name','$password');";


if ($conn->query($command) === TRUE) {
        echo "New record created successfully in doctor login";
        echo "<br><br>";
  
        }
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<br><br>";
  
        }
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
?>
