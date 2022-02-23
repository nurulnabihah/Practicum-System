<?php
$servername = "localhost";
$username   = "saujanae_adminPracticumSystem";
$password   = "oRK8W$A}gg.(";
$dbname     = "saujanae_practicum_system";

$db = new mysqli($servername, $username, $password, $dbname);

        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
?>