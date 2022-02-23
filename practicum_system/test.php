

<?php
global $sql, $purpose;
// connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');


// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

  $purpose = isset($purpose) ? $purpose : '';

$sql = "INSERT INTO uumassessment (totalA)
VALUES ('$purpose')";
mysqli_query($db, $sql);

if (mysqli_query($db,$sql) === TRUE) {
  echo "New record created successfully";
} 

mysqli_close($db);
?>