<?php
// connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
global $subTotalA, $totalA, $sql, $result, $matricNo, $defaultB;


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
        height: 97vh;
    }

    p.ex1 {
        float: center;
        padding: 8px;
        margin: 10px 10px 10px 10px;
        background-color: #000000;
        color: #FFFFFF;
    }

    button {
        padding: 16px 10px;
        margin-bottom: 10px;
        float: center;
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
        float: center;
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
        margin-bottom: 8px;
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
        <li><b><i><a style="font-size:16px" href="committeePage.php"> PAMS </a></i></b></li>
            <li><a href="committeePage.php">HOME</a></li>
            <li><a class="active" href="endorsement.php">ENDORSEMENT</a></li>
            <li><a href="login.php">LOGOUT</a></li>
        </ul>
        <ul>
            <?php
            echo'
            <li><a href="viewCompany-A.php?matricNo=' . $matricNo . '">SECTION A</a></li>
            <li><a href="viewCompany-B.php?matricNo=' . $matricNo . '">SECTION B</a></li>
            <li><a class="active" href="viewCompanyTotal.php?matricNo=' . $matricNo . '">TOTAL</a></li>
            '; ?>
        </ul>

        <div class="container1">
            <p class="ex1">
                <b>Total Marks (40%)</b>
            </p>
        </div>

        <?php

        $sql = "SELECT 
totalA, totalB, totalC, totalD, totalE, totalF, totalG, totalH
FROM
companyassessment
WHERE matricNo=$matricNo
";

        $result = mysqli_query($db, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $totalA = $row["totalA"];
            $totalB = $row["totalB"];
            $totalC = $row["totalC"];
            $totalD = $row["totalD"];
            $totalE = $row["totalE"];
            $totalF = $row["totalF"];
            $totalG = $row["totalG"];
            $totalH = $row["totalH"];
        ?>

            <form action="" method="POST">
                <table id=t01 style="width:80%">
                    <tr>
                        <td rowspan="6" style="text-align:center;">
                            <b>Section A
                                Individual Assessment (20%)
                            </b>
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            A: Knowledge
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalA; ?> / 3%
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal;text-align:center;">
                            B: Verbal communication
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalB; ?> / 4%
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal;text-align:center;">
                            C: Written communication
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalC; ?> / 3%
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal;text-align:center;">
                            D: Social Skill & Responsibility
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalD; ?> / 3%
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal;text-align:center;">
                            E: Values, Attitudes & Professionalism
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalE; ?> / 4%
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal;text-align:center;">
                            F: Lifelong Learning
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalF; ?> / 3%
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="2" style="text-align:center;">
                            <b> Section B
                                Project Assessment (20%)
                            </b>
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            G: Practical – Project Presentation
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalG; ?> / 10%
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal;text-align:center;">
                            H: Problem Solving
                        </td>
                        <td style="font-weight:normal;text-align:center;">
                            <?php echo $totalH; ?> / 10%
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <b>Grand Total</b>
                        </td>

                        <?php
                        $grandTotal = $totalA + $totalB + $totalC +
                            $totalD + $totalE + $totalF + $totalG + $totalH;
                            $grand100 = ($grandTotal * 100) / 40;

                        $roundGrand = number_format((float)$grandTotal, 2, '.', '');
                        
                        $roundGrand100 = number_format((float)$grand100, 2, '.', ''); 
                        ?>

                        <td style="text-align: center;"><b> <?php echo number_format((float)$grandTotal, 2, '.', '') ?> / 40%</b>
                        </td>
                    <?php } ?>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <b>100%</b>
                        </td>
                        <td style="text-align: center;"><b><?php echo number_format((float)$grand100, 2, '.', '') ?>%</b>
                        </td>
                    </tr>


                </table>
            </form>

            

            <div class="topnav">

                <div class="search-container">
                       <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:3px;padding-left:3px;" href="viewCompany-B.php?matricNo=' . $matricNo . '" 
            class="previous"> Previous</a> </button>'
            ?>
                </div>
            </div>

    </div>
</body>

</html>