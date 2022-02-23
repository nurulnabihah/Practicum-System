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

    <title>Assessment</title>

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
        height: 100% 100%;
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
        color: black;
        background-color: transparent;
        text-decoration: none;
    }

    b:hover {
        color: black;
        background-color: transparent;
    }

    b:active {
        color: black;
        background-color: transparent;
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
    
    .topnav .search-container {
        float: center;
        width: 50.33%;
        margin-right: 16px;
        margin-left: 400px;
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
        }}
</style>

<body>
<div class="blur">
    <ul>
    <li><b><i><a style="font-size:16px" href="companyPage.php"> PAMS </a></i></b></li>
        <li><a href="companyPage.php">HOME</a></li>
        <li><a class="active" href="companyAssessment.php">ASSESSMENT</a></li>
        <li><a href="login.php">LOGOUT</a></li>
    </ul>

    

    <div class="topnav">

            <div class="search-container">

                <form action="companyAssessment.php" method="post">
                    <input type="text" placeholder="Enter student name or matric number.." name="searchNM">
                    <button type="submit" name='search'><i class="fa fa-search"></i>SEARCH</button>
                </form>
            </div>
        </div>

        <form action="companyAssessment.php" method="POST">
            <table id=t01 style="width:80%">
                <tr>
                    <th>Matric No</th>
                    <th>Student Name</th>
                    <th>Update</th>
                </tr>

                <?php
                $i = 1;

                // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');


                // Check connection
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                if (isset($_POST['search'])) {
                    $searchNM = $_POST['searchNM'];
                    $logedInUsername = $_SESSION['company']['fName'];
                    $query = "SELECT * FROM studentdetail WHERE companySName LIKE 
                    '$logedInUsername%' AND name LIKE '%$searchNM%'
     OR matricNo='$searchNM'";
                    $query_run = mysqli_query($db, $query);
                    mysqli_close($db);
                    while ($row = mysqli_fetch_array($query_run)) {
                        echo '
                <tr>
                <td style="text-align: center;">' . $row["matricNo"] . '</td>
                <td style="text-align: center;">' . $row["name"] . '</td>
                <td style="text-align: center;"> <a href="companyAssessment-A.php?matricNo=' . $row["matricNo"] . '" 
                id="matricNo" name="update" >UPDATE
                <i class="fas fa-edit" style="font-size:22px"></a> 
            </td>
               </tr>
               ';
                    }
                } else {
                    $logedInUsername = $_SESSION['company']['fName'];
                    $query = "SELECT * FROM studentdetail WHERE companySName LIKE 
                    '$logedInUsername%' ";
                    $result = mysqli_query($db, $query);
                    mysqli_close($db);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                <tr>
                <td id="matricNo" name="matricNo" style="text-align: center;">' . $row["matricNo"] . '</td>
                <td style="text-align: center;">' . $row["name"] . '</td>
                <td style="text-align: center;"> <a href="companyAssessment-A.php?matricNo=' . $row["matricNo"] . '" 
                id="matricNo" name="update" >UPDATE
                <i class="fas fa-edit" style="font-size:22px"></a>     
                </td>
                   </tr>
               
           ';
                    }
                    $i++;
                }

                ?>

            </table>
        </form>

    </div>
</body>

</html>