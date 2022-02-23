<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

    <title>Home</title>

</head>
<style>
body {
  background-image: url('images/uum1.jpg');
background-repeat: no-repeat;
background-attachment: fixed; 
background-size: 100% 100%;
}
 .blur {
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(8px);
        height: 97vh;
    }
</style>
<body>
<div class="blur">
    <ul >
    <li><b><i><a style="font-size:16px" href="committeePage.phpp"> PAMS </a></i></b></li>
        <li><a class="active" href="committeePage.php">HOME</a></li>
        <li><a href="endorsement.php">ENDORSEMENT</a></li>
        <li><a href="login.php">LOGOUT</a></li>
    </ul>
    
    <div class="container" style="width:100vh;height:50vh;">
        <div class=row>
        <b><a style="font-size:24px;">
                        Welcome

                        <?php
                        $logedInUsername = $_SESSION['committe']['fName'];
                        echo $logedInUsername;
                        ?>
                    </a><b>
            
            
        </div>


</div>
</div>
</body>

</html>