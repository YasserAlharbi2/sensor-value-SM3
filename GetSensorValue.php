<?php
$conn = mysqli_connect('localhost','id19338134_smartmethods','123456789a!A','id19338134_yasseralharbi') or die("Connection failed");

$sensorValue = $_GET['sensor'];
$query = "INSERT INTO sensors (id, sensorValue) VALUES (NULL, $sensorValue)";

$result = $conn->query($query);
    if ($result === FALSE) {
        
    print("Error");
    
    }else{
        print("The value has been added successfully"); 

}
?>