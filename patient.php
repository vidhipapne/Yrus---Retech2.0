
<?php 

 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $age = $_POST['age'];
 $doctor = $_POST['doctor'];


$servername = "localhost";
$username = "root";
$pass = "";
$db="appointment";
$conn = mysqli_connect($servername, $username, $pass,$db);

if (!$conn) {
    die("Connection failed: " . mysql_error());
} 
else
    echo "connected ";
 echo"<br>";


 $sql = "INSERT INTO patient(name,phone,age,doctor)
  VALUES ('$name',$phone,$age,'$doctor');";

 $command="INSERT INTO doctor_details(name)VALUES ('$name');";


if ($conn->query($command) === TRUE) {
   echo "New record created successfully in doctor details login";
        echo "<br><br>";
  
        }
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }

echo "<br>";
if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<br><br>";
  
        }
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }

?>
