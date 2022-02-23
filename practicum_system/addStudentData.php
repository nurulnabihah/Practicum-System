<?php
// connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');


// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["add"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $session = $csv[0];
  $name = $csv[1];
  $matricNo = $csv[2];
  $uumSName = $csv[3];
  $companySName = $csv[4];
  $companyName = $csv[5];
  $sql = "INSERT INTO studentdetail VALUES ('$session','$name','$matricNo','$uumSName','$companySName','$companyName')";
  mysqli_query($db, $sql);
 }
 
 while(($csv = fgetcsv($file_open, 1000, ",")) == false)
 { trigger_error("CSV file only");
}
}
if ( mysqli_query($db, $sql)=== TRUE) {
    echo "New record created successfully";
  } 
  mysqli_close($db);
?>