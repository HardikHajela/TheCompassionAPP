<?php
//OO
$servername = "localhost";
$username = "hajela_tcapp";
$password = "UwindsorRocks";
$dbname = "hajela_tcapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Test1
VALUES (7, 'Name', '2000-1-15');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br><br> ";

$sql = "Select * from Test1;";
$result = $conn ->query($sql);

if($result->num_rows > 0){
  echo "Rocords Found<br>";
while($row = $resullt->fetch_assoc()) {
echo"1";
echo "<br> id: " . $row["ID"] . "Name: " . $row["Name"] . "Date: " . $row["Datee"] . "<br>";
} }

else{ echo "No Data Found"; }

$conn->close();
?>