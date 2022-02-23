<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

// connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
global $subTotalA, $totalA, $sql, $result, $matricNo;


// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$matricNo = $_GET['matricNo'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

    <title>Endorsement</title>

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
    p.ex1 {
        padding: 80px;
        margin: 10px 10px 10px 10px;
        background-color: #000000;
        color: #FFFFFF;
    }


    .container {
        margin-left: 15px;
        margin-top: 80px;
        width: 80%
    }

    select {
        width: 29%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
    }

    input[type=text],
    input[type=password] {
        width: 70%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    text {
        color: White;
    }

    .container1 {
        padding: 16px;
    }

    b:link {
        color: white;
        background-color: transparent;
        text-decoration: none;
    }

    b:visited {
        color: #0099ff;
        background-color: transparent;
        text-decoration: none;
    }

    b:hover {
        color: #0099ff;
        background-color: transparent;
        text-decoration: none;
    }

    b:active {
        color: #0099ff;
        background-color: transparent;
        text-decoration: none;
    }
    
    form {
border: 0px solid #f1f1f1;
        background:#000000;
        width: 420px;
        height: 19em;
        margin: 0 auto;
        text-align: center;
        padding: 50px 0 50px 0;
        }
    table,
    th,
    td {
        margin-left: 120px;
        margin-top: 80px;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }

    th {
        text-align: center;
    }

    #t01 {
        width: 100%;
        background-color: white;
        color: black;
        margin-top: 50px;
    }

    .topnav .search-container {
        float: center;
        width: 50.33%;
        margin-right: 16px;
        margin-left: 600px;
        margin-top: 50px;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .topnav .search-container button {
        float: center;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: red;
        cursor: pointer;
    }

    .topnav .search-container button:hover {
        background: #ccc;
    }

    @media screen and (max-width: 600px) {
        .topnav .search-container {
            float: none;
        }

        .topnav a,
        .topnav input[type=text],
        .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }

        .topnav input[type=text] {
            border: 1px solid #ccc;
        }
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>

<body>
    <div class="blur">
    <ul>
        <li><b><i><a style="font-size:16px"  href="comitteePage.php">  PAMS  </a></i></b></li>
        <li><a href="committeePage.php">HOME</a></li>
        <li><a class="active" href="endorsement.php">ENDORSEMENT</a></li>
        <li><a href="login.php" >LOGOUT</a></li>
    </ul>

<br>
    <form method="post" action="endorsement2.php">
        <div class="container1">
            <input type="hidden" id="matric" name="matric" value= <?php echo $matricNo; ?>>
            <a style="color:white;font-size:20px;">Please give your approval</a> <br><br><br>
            <a style="color:white;font-size:17px;text-align:center;">Approve:</a><br><br>
            <button name="approve" id="approve" style="padding:8px 18px 8px 18px;">Approve</button><br><br>
            <a style="color:white;font-size:17px;text-align:center;">Pending:</a><br><br>
                    <textarea name="feedback" id="feedback" rows="4" cols="50">Please give your feedback before pending
                    </textarea><br><br>
                    <button name="reject" id="reject" style="padding:8px 18px 8px 18px;">Pending</button>
                    
                    </form>
            
        <?php
               
                // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');


        // Check connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        
                if(isset($_POST['approve'])){
                    $matric=$_POST['matric'];
                 $insert = mysqli_query($db,"UPDATE student SET status='Approve' WHERE studMatricNo=$matric");
                 header('location: endorsement.php');
                }
                
                if(isset($_POST['reject'])){
                    $matric=$_POST['matric'];
                    $feedback=$_POST['feedback'];
                 $insert = mysqli_query($db,"UPDATE student SET status='Pending', feedback='$feedback' WHERE studMatricNo=$matric");
                 header('location: endorsement.php');
                }
        ?>
        
</div>
</body>

</html>
