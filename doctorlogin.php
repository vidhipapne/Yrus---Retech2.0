
<?php 
 $name=$_POST['name'];
 $password=$_POST['password'];

$servername = "localhost";
$username = "root";
$pass = "";
$db="appointment";

$conn = mysqli_connect($servername, $username, $pass,$db);
 if(!$conn){
            die("connection failed:".mysqli_connect_error());
            }
              echo "connected successfully";

 echo"<br>"; 
 echo"<br>";

$sql =("SELECT name, password FROM doctorlogin WHERE name= '$name' AND  password='$password'");
$result=$conn->query($sql);

 if ($result->num_rows > 0){           

    while($row = $result->fetch_assoc()) {
      $pass=$row["password"] ;
      if($pass==$password){
      echo   "Successfully logged in";   
  }
}  
   }

else {
     echo "login failed";
   } 

  $comm2="select * from doctorlogin";
  $result=mysqli_query($conn,$comm2);
  $row = mysqli_fetch_array($result);
  if($result){
    echo "<center>Database updated successfully</center>";
  }
      echo "<table border='1'>
      <tr>
      <th>Sno</th>
      <th>Name</th>
      </tr>";
          while($row = mysqli_fetch_array($result)){
            echo "<td>" . $row['name'] . "</td></tr>";
          }
          echo "</table>";
        mysqli_close($conn);
?>
