<?php

#declare your database variables
$servername = 'localhost';
$database = 'scmdb';
$username = 'root';
$password = '@leps238737';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

print_r($_GET);
 

$locationId = htmlspecialchars($_GET["locationId"]);
$imagePath = htmlspecialchars($_GET["imagePath"]);
$imageName = htmlspecialchars($_GET["imageName"]);
$status = htmlspecialchars($_GET["incendentType"]);

echo $locationId;

$sql = "INSERT INTO intrusiondetails (locationid, intrusion_imagepath, intrusion_fileName, incidentstatus) VALUES ('".$locationId."', '".$imagePath."', '".$imageName."', '".$status."')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>