<?php    

$conn = mysqli_connect("localhost", "root", "", "admitkard");
         
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
 
$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$contact =  $_REQUEST['contact'];
$course = $_REQUEST['course'];
$country = $_REQUEST['country'];
$dob = $_REQUEST['dob'];
$insert_string = '';
 
foreach ((array) $country as $value) {
    $insert_string .= $value .", ";
}

$sql = "SELECT * FROM admitkard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name " . $row["name"]. " - Email: " . $row["email"]. " - Contact: " . $row["contact"]." - Course: " . $row["course"]." - Country: " . $row["insert_string"]. " - DOB: " . $row["dob"]. "<br>";
  }
} else {
  echo "0 results";
} 
    ?>    