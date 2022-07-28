<?php
$conn = mysqli_connect('localhost','id19338134_smartmethods','123456789a!A','id19338134_yasseralharbi') or die("Connection failed");
    
$sql = "SELECT id,sensorValue FROM sensors";

$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error in query");
}

while ($row = mysqli_fetch_assoc($result)) {
    echo 'id: ' . $row['id'] . ' sensor Value:'  .  $row['sensorValue'] .'<br/>' ;
}

