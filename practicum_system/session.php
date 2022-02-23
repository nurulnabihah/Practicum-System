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
   
    <title>Previous Record</title>

</head>
<style>
    body {
        background-image: url('images/uum1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .blur {
  background: rgba(255, 255, 255, 0.2); 
  backdrop-filter: blur(8px); 
  height: 100vh;
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
        text-decoration: underline;
    }

    b:active {
        color: #0099ff;
        background-color: transparent;
        text-decoration: underline;
    }
    .btn{
        margin:center;
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
    }

    button{
        padding: 6px 10px;
        margin-top: 48px;
        margin-left: 616px;
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
    <li><b><u><a style="font-size:16px"  href="admin page.php">  PAMS  </a></u></b></li>
        <li><a href="admin page.php">HOME</a></li>
        <li><a class="active" href="practicumRecord4.php">PREVIOUS RECORD</a></li>
        <li><a href="register3.php">REGISTER</a></li>
        <li><a href="studentData.php">STUDENT DATA</a></li>
        <li><a href="login.php" >LOGOUT</a></li>
    </ul>

    <div class="topnav">
        <div class="search-container">
            <form>
                <input type="text" placeholder="Enter student name or matric number.." name="search">
                <button type="submit" onclick="check(this.form)"><i class="fa fa-search"></i>SEARCH</button>
            </form>
        </div>
    </div>

    <table id=t01 style="width:80%">
        <tr>
            <th>Matric No</th>
            <th>Student Name</th>
            <th>UUM Supervisor Name</th>
            <th>Company Supervisor Name</th>
            <th>Company Name</th>
        </tr>

        <?php
        $i=1;

            // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');


// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
$linkSession = $_POST['linkSession'];
if ($_POST['linkSession']== 'A192')

        $query = "SELECT * FROM studentdetail WHERE session='A192'";
$result = mysqli_query($db, $query);
  mysqli_close($db);
        while($row = mysqli_fetch_array($result))
        {
            echo'
            <tr>
            <td>'.$row["matricNo"].'</td>
            <td>'.$row["name"].'</td>
            <td>'.$row["uumSName"].'</td>
            <td>'.$row["companySName"].'</td>
            <td>'.$row["companyName"].'</td>
           </tr>
           ';
        }$i++;
        ?>
        
    </table>
    </div>
</body>

</html>