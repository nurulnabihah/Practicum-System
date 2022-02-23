<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
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

    <form action="" method="post">
    <table id=t01 style="width:80%">
        <tr>
            <th rowspan="2">Matric No</th>
            <th rowspan="2">Student Name</th>
            <th colspan="2">UUM Marks</th>
            <th colspan="2">Company Marks</th>
            <th>Total Marks</th>
            <th rowspan="2" colspan="2">View</th>
            <th rowspan="2">Approval</th>
            <th rowspan="2">Status</th>
        </tr>
        <tr>
            <td style="text-align:center">60%</td>
            <td style="text-align:center"><a style="color:red"> 100% </a></td>
            <td style="text-align:center">40%</td>
            <td style="text-align:center"><a style="color:red"> 100% </a></td>
            <td style="text-align:center">100%</td>
        </tr>
        <?php
        $i = 1;

        // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');


        // Check connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
            global $db, $i;
            
            
                $query = "SELECT * FROM student";
                $result = mysqli_query($db, $query);
                
                while ($row = mysqli_fetch_array($result)) {
                    $uumMarks=$row["uumMarks"];
                    $companyMarks=$row["companyMarks"];
                    $matric = $row["studMatricNo"];
                    $total=$row["totalMarks"];
                    
                    $totalMarks=0.0;
                    $totalMarks = (float)$uumMarks + (float)$companyMarks;
                    
                     $roundGrand = number_format((float)$totalMarks, 2, '.', '');
                     
                     $insert = mysqli_query($db,"UPDATE student SET totalMarks='$roundGrand' WHERE studMatricNo=$matric");
                     
                     
                    echo '
            <tr>
            <td name="matric" style="text-align:center">' . $row["studMatricNo"] . '</td>
            <td style="text-align:center">' . $row["studName"] . '</td>
            <td style="text-align:center">' . $row["uumMarks"] . '</td>
            <td style="text-align:center; color:red;">' . $row["uumHundred"] . '</td>
            <td style="text-align:center">' . $row["companyMarks"] . '</td>
            <td style="text-align:center; color:red;">' . $row["companyHundred"] . '</td>
            <td style="text-align:center">' . $row["totalMarks"] . '</td>
            
            <td style="text-align:center">
            <a style="text-decoration: none;" href="viewUUM-A.php?matricNo=' . $row["studMatricNo"] . '" 
            id="matricNo" name="update" >UUM Marks
            <i class="fas fa-edit" style="font-size:22px"></a>
            </td>
<td style="text-align:center">
            <a style="text-decoration: none;" href="viewCompany-A.php?matricNo=' . $row["studMatricNo"] . '" 
            id="matricNo" name="update" >Company Marks
            <i class="fas fa-edit" style="font-size:22px"></a>
            </td>
            <td style="text-align:center"><button  name="approval" id="approval" ><a style="text-decoration: none;" 
            href="endorsement2.php?matricNo=' . $row["studMatricNo"] . '">
            
            Approval</a></button> </td>
            
            <td style="text-align:center">' . $row["status"] . '</td>
           </tr>
           ';
}
                $i++;
                mysqli_close($db);
               echo ' </table>
               </form>';
        ?>

    

</div>
</body>

</html>
