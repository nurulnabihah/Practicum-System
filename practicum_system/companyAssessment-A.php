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
        height: 100% 100%;
    }

    p.ex1 {
        float: center;
        padding: 8px;
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
        color: white;
        background-color: transparent;
    }

    b:active {
        color: #0099ff;
        background-color: transparent;
        text-decoration: underline;
    }

    button {
        padding: 16px 10px;
        margin-bottom: 10px;
        float: center;
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
        <li><b><i><a style="font-size:16px" href="companyPage.php"> PAMS </a></i></b></li>
            <li><a href="companyPage.php">HOME</a></li>
            <li><a class="active" href="companyAssessment.php">ASSESSMENT</a></li>
            <li><a href="login.php">LOGOUT</a></li>
        </ul>
        <ul>
            <?php
            echo'
            <li><a class="active" href="companyAssessment-A.php?matricNo=' . $matricNo . '">SECTION A</a></li>
            <li><a href="companyAssessment-B.php?matricNo=' . $matricNo . '">SECTION B</a></li>
            <li><a href="companyAssessmentTotal.php?matricNo=' . $matricNo . '">TOTAL</a></li>
            '; ?>
        </ul>
        <div class="container1">
            <p class="ex1">
                This evaluation contributes 40% of the total marks for practicum.
            </p>
        </div>

        <?php

        $sql = "SELECT 
        matricNo, name, companyName, session, uumSName, companySName
    FROM
        studentdetail
        WHERE matricNo=$matricNo
        ";

        $result = mysqli_query($db, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $matricNo = $row["matricNo"];
            $organization = $row["companyName"];
            $session = $row["session"];
            $uumSName = $row["uumSName"];
            $companySName = $row["companySName"];

            $result1 = mysqli_query($db, "INSERT INTO student (studMatricNo,studName,offName,lectName,session)
                    VALUES ('$matricNo', '$name', '$companySName' , '$uumSName', '$session')");
        ?>

            <form action="" method="POST">
                <table id=t01 style="width:40%">
                    <tr>
                        <td>Matric No. :</td>
                        <td><?php echo $matricNo; ?></td>
                    </tr>
                    <tr>
                        <td>Student Name :</td>
                        <td><?php echo $name; ?></td>

                    </tr>
                    <tr>
                        <td>Organization :</td>
                        <td><?php echo $organization; ?></td>
                </table>

            <?php } ?>

            <div text-align="center" style="display:none">
                <input text-align="center" type="submit" name="search" value="Search">
            </div>
            </form>

            <div class="container1">
                <p class="ex1">
                    INSTRUCTION <br>
                    Please give marks for the following items.<b>
                        <br>
                        SECTION A: INDIVIDUAL ASSESSMENT (20%)</p>
            </div>

            <form action="" method="post">
                <table id=t01 style="width:80%">
                    <tr>
                        <th>Sub-attributes</th>
                        <th>0 <br>
                            Poor</th>
                        <th>1 <br>
                            Weak</th>
                        <th>2 <br>
                            Fair</th>
                        <th>3 <br>
                            Good</th>
                        <th>4 <br>
                            Excellent</th>
                    </tr>

                    <tr>
                        <td colspan="6" style="text-align: center;">Knowledge (3%)
                        </td>
                    </tr>

                    <?php
                    // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                    global $subTotalA, $totalA, $sql, $result, $matricNo, $defaultB;


                    // Check connection
                    if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $result = mysqli_query($db, "INSERT INTO companyassessment (matricNo,totalA,totalB,
                    totalC,totalD,totalE,totalF,totalG,totalH,grandTotal)
                    VALUES ('$matricNo', '0', '0', '0', '0', '0', '0', '0', '0','0')");

                    $result = mysqli_query($db, "INSERT INTO ctotala (matricNo,q1,q2,q3)
                    VALUES ('$matricNo', '0', '0', '0')");

                    $checkA = "SELECT * FROM ctotala WHERE matricNo=$matricNo";
                    $result = mysqli_query($db, $checkA);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $q1 = $row["q1"];
                        $q2 = $row["q2"];
                        $q3 = $row["q3"];
                    ?>

                        <tr>
                            <td>
                                Understanding of organization governance
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q1">Poor understanding of the organization governance</label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q1">Limited understanding of the organization governance
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q1">Fair understanding of the organization governance
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '3') {
                                                                            echo 'checked';
                                                                        } ?>value="3">
                                <label for="q1">Good understanding of the organization governance
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q1">Excellent understanding of the organization governance and can explain off hands
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Knowledge of key business principles and practices
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q2">Do not understand the important information from a business point of view
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q2">Poor understanding what is Important from a business point of view
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q2">Often need guidance in understanding what is important from a business point of view
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q2">Good understanding of the important information from a business point of view and
                                    able to use it to solve relevant problems
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q2">Excellent understanding of the important information; able to use it to solve
                                    relevant problems and identify new business opportunities
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Ability to apply knowledge into practices

                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q3">Do not demonstrate skills in applying knowledge to practical problems
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q3">Demonstrates minimal skills in applying knowledge to practical problems
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q3">Demonstrates moderate skills in applying knowledge to practical problems
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q3">Demonstrates reasonable skills in applying knowledge to practical problems
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q3">Demonstrates excellent skills in applying knowledge to practical problems
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>Sub-total</td>

                            <?php

                            // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                            global $subTotalA, $totalA, $sql, $q1, $q3, $q2, $q4, $q5, $q6, $q7, $q8, $q9;

                            // Check connection
                            if (!$db) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            if (isset($_POST['calculateA'])) {
                                echo '    <td colspan="5" style =display:none> 
                                ' . $row["q1"] . " + " . $row["q2"] . " + " . $row["q3"];
                                '
                                </td>
                                </tr> ';
                            } else {
                                echo '    <td colspan="5"> 
                            ' . $row["q1"] . " + " . $row["q2"] . " + " . $row["q3"];
                                '
                            </td>
                            </tr> ';
                            }
                            $checkTotalA = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                            $result = mysqli_query($db, $checkTotalA);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $totalA = $row["totalA"];


                                if (isset($_POST['calculateA'])) {
                                    $q1 = $_POST['q1'];
                                    $q2 = $_POST['q2'];
                                    $q3 = $_POST['q3'];
                                    $A = "UPDATE ctotala 
                                SET q1 = '$q1', 
                                q2 = '$q2', 
                                q3 = '$q3'
                                WHERE matricNo = $matricNo";
                                    $insert = mysqli_query($db, $A);

                            ?>


                                    <td colspan="5"> <?php

                                                        echo  $q1 .  " + " . $q2 . " + " . $q3;
                                                        ?>
                                    </td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <td>Total A %</td>

                        <?php
                                if (isset($_POST['calculateA'])) {
                                    echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalA"], 2, '.', '');
                                    '
                     </td>
                      </tr>';
                                } else {
                                    echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalA"], 2, '.', '');
                                    '
                     </td>
                      </tr>';
                                }
                                if (isset($_POST['calculateA'])) {
                                    $q1 = $_POST['q1'];
                                    $q2 = $_POST['q2'];
                                    $q3 = $_POST['q3'];

                                    $totalA = (($q1 + $q2 + $q3) * 3) / 12;

                                    $roundA = number_format((float)$totalA, 2, '.', '');

                                    $sql = "UPDATE companyassessment 
                                        SET totalA = '$roundA' WHERE matricNo = '$matricNo' ";
                                    $insert = mysqli_query($db, $sql);
                                    $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                        ?>

                            <td colspan="5"><?php echo number_format((float)$totalA, 2, '.', '') ?>
                            </td>
                    </tr>
            <?php }
                            } ?>


                </table>

                <div class="topnav">

                    <div class="search-container">
                        <button type='submit' name="calculateA" id="calculateA">
                            Calculate</button>
                    </div>
                </div>

            </form>
        <?php } ?>

        <form action="" method="post">
            <table id=t01 style="width:80%">
                <tr>
                    <th>Sub-attributes</th>
                    <th>0 <br>
                        Poor</th>
                    <th>1 <br>
                        Weak</th>
                    <th>2 <br>
                        Fair</th>
                    <th>3 <br>
                        Good</th>
                    <th>4 <br>
                        Excellent</th>
                </tr>

                <tr>
                    <td colspan="6" style="text-align: center;">Verbal communication (4%)
                    </td>
                </tr>

                <?php
               // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                global $subTotalA, $totalA, $sql, $result, $matricNo, $defaultB;


                // Check connection
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $result = mysqli_query($db, "INSERT INTO ctotalb (matricNo,q4,q5,q6)
                VALUES ('$matricNo', '0', '0', '0')");

                $checkB = "SELECT * FROM ctotalb WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkB);
                while ($row = mysqli_fetch_assoc($result)) {
                    $q4 = $row["q4"];
                    $q5 = $row["q5"];
                    $q6 = $row["q6"];
                ?>

                    <tr>
                        <td>
                            Clear delivery of ideas
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q4" name="q4" <?php if ($q4 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q4">Not able to deliver ideas clearly and require major improvements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q4" name="q4" <?php if ($q4 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q4">Able to deliver ideas and require further improvements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q4" name="q4" <?php if ($q4 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q4">Able to deliver some ideas and require minor improvements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q4" name="q4" <?php if ($q4 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q4">Able to deliver ideas fairly clearly
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q4" name="q4" <?php if ($q4 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q4">Able to deliver various ideas with great clarity
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Confident delivery of ideas
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q5" name="q5" <?php if ($q5 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q5">Not able to deliver ideas confidently
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q5" name="q5" <?php if ($q5 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q5">Able to deliver ideas with limited confidence and require further improvements.
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q5" name="q5" <?php if ($q5 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q5">Able to deliver ideas with some confidence but still require minor improvements

                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q5" name="q5" <?php if ($q5 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q5">Able to deliver ideas fairly confidently
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q5" name="q5" <?php if ($q5 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q5">Able to deliver ideas confidently
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Effective & articulate delivery of ideas
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q6" name="q6" <?php if ($q6 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q6">Not able to deliver ideas
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q6" name="q6" <?php if ($q6 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q6">Able to deliver ideas
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q6" name="q6" <?php if ($q6 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q6">Able to deliver ideas with limited effect and require further improvements

                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q6" name="q6" <?php if ($q6 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q6">Able to deliver ideas fairly effectively and require minor improvements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q6" name="q6" <?php if ($q6 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q6">Able to deliver ideas effectively and articulately
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Sub-total</td>

                        <?php
                       // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                        global $subTotalB, $totalB, $sql;

                        // Check connection
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        if (isset($_POST['calculateB'])) {
                            echo '    <td colspan="5" style =display:none> 
                            ' . $row["q4"] . " + " . $row["q5"] . " + " . $row["q6"];
                            '
                            </td>
                            </tr>';
                        } else {
                            echo '    <td colspan="5"> 
                        ' . $row["q4"] . " + " . $row["q5"] . " + " . $row["q6"];
                            '
                        </td>
                        </tr>';
                        }
                        $checkTotalB = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                        $result = mysqli_query($db, $checkTotalB);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalB = $row["totalB"];

                            if (isset($_POST['calculateB'])) {
                                $q4 = $_POST['q4'];
                                $q5 = $_POST['q5'];
                                $q6 = $_POST['q6'];
                                $B = "UPDATE ctotalb 
                                SET q4 = '$q4', 
                                q5 = '$q5', 
                                q6 = '$q6'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $B);
                        ?>


                                <td colspan="5"> <?php echo  $q4 .  " + " . $q5 . " + " . $q6; ?>
                                </td>
                    </tr>

                <?php } ?>

                <tr>
                    <td>Total B %</td>

                    <?php
                            if (isset($_POST['calculateB'])) {
                                echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalB"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            } else {
                                echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalB"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            }
                            if (isset($_POST['calculateB'])) {
                                $q4 = $_POST['q4'];
                                $q5 = $_POST['q5'];
                                $q6 = $_POST['q6'];

                                $totalB = (($q4 + $q5 + $q6) * 4) / 12;

                                $roundB = number_format((float)$totalB, 2, '.', '');

                                $sql = "UPDATE companyassessment 
                                        SET totalB = '$roundB' WHERE matricNo = '$matricNo' ";
                                $insert = mysqli_query($db, $sql);
                                $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalB, 2, '.', '') ?>
                        </td>
                </tr>
        <?php }
                        } ?>

            </table>

            <div class="topnav">

                <div class="search-container">
                    <button type='submit' name="calculateB" id="calculateB">
                        Calculate</button>
                </div>
            </div>

        </form>
    <?php } ?>

    <form action="" method="post">
        <table id=t01 style="width:80%">
            <tr>
                <th>Sub-attributes</th>
                <th>0 <br>
                    Poor</th>
                <th>1 <br>
                    Weak</th>
                <th>2 <br>
                    Fair</th>
                <th>3 <br>
                    Good</th>
                <th>4 <br>
                    Excellent</th>
            </tr>

            <tr>
                <td colspan="6" style="text-align: center;">Write communication (3%)
                </td>
            </tr>

            <?php
                // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                global $subTotalA, $totalA, $sql, $result, $matricNo, $defaultB;


                // Check connection
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $result = mysqli_query($db, "INSERT INTO ctotalc (matricNo,q7)
                VALUES ('$matricNo', '0')");

                $checkC = "SELECT * FROM ctotalc WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkC);
                while ($row = mysqli_fetch_assoc($result)) {
                    $q7 = $row["q7"];
                ?>

            <tr>
                <td>
                    Clearly written academic discourse
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q7" name="q7" <?php if ($q7 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q7">Not able to write ideas
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q7" name="q7" <?php if ($q7 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q7">Able to write ideas with limited clarity and require major improvements
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q7" name="q7" <?php if ($q7 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q7">Able to write ideas regardless of substance but require minor improvements (still
                        unstructured)
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q7" name="q7" <?php if ($q7 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q7">Able to write ideas with substance but limited in structure
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q7" name="q7" <?php if ($q7 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q7">Able to write ideas with good substance, clear and structured
                    </label>
                </td>
            </tr>

            <tr>
                        <td>Sub-total</td>

                        <?php
                        // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                        global $subTotalB, $totalB, $sql;

                        // Check connection
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        if (isset($_POST['calculateC'])) {
                            echo '    <td colspan="5" style =display:none> 
                            ' . $row["q7"];'
                            </td>
                            </tr>';
                        } else {
                            echo '    <td colspan="5"> 
                            ' . $row["q7"];'
                        </td>
                        </tr>';
                        }
                        $checkTotalC = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                        $result = mysqli_query($db, $checkTotalC);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalC = $row["totalC"];

                            if (isset($_POST['calculateC'])) {
                                $q7 = $_POST['q7'];
                                $C = "UPDATE ctotalc 
                                SET q7 = '$q7'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $C);
                        ?>


                                <td colspan="5"> <?php echo  $q7; ?>
                                </td>
                    </tr>

                <?php } ?>


            <tr>
                <td>Total C %</td>
                
                <?php
                            if (isset($_POST['calculateC'])) {
                                echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalC"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            } else {
                                echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalC"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            }
                            if (isset($_POST['calculateC'])) {
                                $q7 = $_POST['q7'];

                                $totalC = ($q7 * 3) / 4;

                                $roundC = number_format((float)$totalC, 2, '.', '');

                                $sql = "UPDATE companyassessment 
                                        SET totalC = '$roundC' WHERE matricNo = '$matricNo' ";
                                $insert = mysqli_query($db, $sql);
                                $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalC, 2, '.', '') ?>
                        </td>
                </tr>
        <?php }
                        } ?>

            </table>

            <div class="topnav">

                <div class="search-container">
                    <button type='submit' name="calculateC" id="calculateC">
                        Calculate</button>
                </div>
            </div>

        </form>
    <?php } ?>

    <form action="" method="post">
        <table id=t01 style="width:80%">
            <tr>
                <th>Sub-attributes</th>
                <th>0 <br>
                    Poor</th>
                <th>1 <br>
                    Weak</th>
                <th>2 <br>
                    Fair</th>
                <th>3 <br>
                    Good</th>
                <th>4 <br>
                    Excellent</th>
            </tr>

            <tr>
                <td colspan="6" style="text-align: center;">Social Skill & Responsibility (3%)
                </td>
            </tr>

            <?php
                // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                global $subTotalA, $totalA, $sql, $result, $matricNo, $defaultB;


                // Check connection
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $result = mysqli_query($db, "INSERT INTO ctotald (matricNo,q8,q9,q10,q11,q12,q13)
                VALUES ('$matricNo', '0', '0', '0', '0', '0', '0')");

                $checkD = "SELECT * FROM ctotald WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkD);
                while ($row = mysqli_fetch_assoc($result)) {
                    $q8 = $row["q8"];
                    $q9 = $row["q9"];
                    $q10 = $row["q10"];
                    $q11 = $row["q11"];
                    $q12 = $row["q12"];
                    $q13 = $row["q13"];
                ?>

            <tr>
                <td rowspan="3">Self-expression</td>
                <td style="font-weight:normal">
                    <input type="radio" id="q8" name="q8" <?php if ($q8 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q8">Not confident in doing a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q8" name="q8" <?php if ($q8 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q8">Limited selfconfidence in doing a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q8" name="q8" <?php if ($q8 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q8">Sometimes demonstrate selfconfidence
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q8" name="q8" <?php if ($q8 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q8">Frequently demonstrate selfconfidence
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q8" name="q8" <?php if ($q8 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q8">Always display selfconfidence
                    </label>
                </td>
            </tr>

            <tr>
                <td style="font-weight:normal">
                    <input type="radio" id="q9" name="q9" <?php if ($q9 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q9">Too self centred
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q9" name="q9" <?php if ($q9 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q9">Self centred
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q9" name="q9" <?php if ($q9 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q9">Sometimes accept other people's perception of self
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q9" name="q9" <?php if ($q9 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q9">Frequently accept other people’s perception of self with an open heart
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q9" name="q9" <?php if ($q9 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q9">Always accept other people’s perception of self with an open heart
                    </label>
                </td>
            </tr>

            <tr>
                <td style="font-weight:normal">
                    <input type="radio" id="q10" name="q10" <?php if ($q10 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q10">Not aware of self ability and potential
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q10" name="q10" <?php if ($q10 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q10">Able to realize the self ability and potential when raised by others
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q10" name="q10" <?php if ($q10 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q10">Sometimes accept and give praise and feedback
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q10" name="q10" <?php if ($q10 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q10">Frequently accept and give praise and feedback
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q10" name="q10" <?php if ($q10 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q10">Always accept and give praise an constructive, rational feedback
                    </label>
                </td>
            </tr>

            <tr>
                <td rowspan="2">Interaction with others</td>
                <td style="font-weight:normal">
                    <input type="radio" id="q11" name="q11" <?php if ($q11 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q11">No interest to participate in conversations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q11" name="q11" <?php if ($q11 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q11">Less interest to participate in conversations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q11" name="q11" <?php if ($q11 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q11">Take part in conversations when initiated by others
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q11" name="q11" <?php if ($q11 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q11">Take the initiative to start a conversation
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q11" name="q11" <?php if ($q11 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q11">Start, maintain and end a conversation in a friendly manner
                    </label>
                </td>
            </tr>

            <tr>
                <td style="font-weight:normal">
                    <input type="radio" id="q12" name="q12" <?php if ($q12 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q12">No eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q12" name="q12" <?php if ($q12 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q12">Less eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q12" name="q12" <?php if ($q12 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q12">Limited eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q12" name="q12" <?php if ($q12 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q12">Appropriate eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q12" name="q12" <?php if ($q12 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q12">Maintain good eye contact
                    </label>
                </td>
            </tr>

            <tr>
                <td>Etiquette</td>
                <td style="font-weight:normal">
                    <input type="radio" id="q13" name="q13" <?php if ($q13 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q13">Need guidance to be ethical when carrying out responsibilities to the society
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q13" name="q13" <?php if ($q13 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q13">Lack of ethics when carrying out responsibilities to the society
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q13" name="q13" <?php if ($q13 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q13">Ethical when carrying out responsibilities to the society, but sometimes put self
                        interest first
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q13" name="q13" <?php if ($q13 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q13">Frequently ethical when carrying out responsibilities to the society
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q13" name="q13" <?php if ($q13 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q13">Always ethical and promote being ethical when carrying out responsibilities to the
                        society
                    </label>
                </td>
            </tr>

            <tr>
                <td>Sub-total</td>
                
                <?php
                        // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                        global $subTotalB, $totalB, $sql;

                        // Check connection
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        if (isset($_POST['calculateD'])) {
                            echo '    <td colspan="5" style =display:none> 
                            ' . $row["q8"] . " + " . $row["q9"] . " + " . $row["q10"] . 
                            " + " . $row["q11"] . " + " . $row["q12"] . " + " . $row["q13"];
                            '
                            </td>
                            </tr>';
                        } else {
                            echo '    <td colspan="5"> 
                            ' . $row["q8"] . " + " . $row["q9"] . " + " . $row["q10"] . 
                            " + " . $row["q11"] . " + " . $row["q12"] . " + " . $row["q13"];
                            '
                            </td>
                            </tr>';
                        }
                        $checkTotalD = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                        $result = mysqli_query($db, $checkTotalD);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalD = $row["totalD"];

                            if (isset($_POST['calculateD'])) {
                                $q8 = $_POST['q8'];
                                $q9 = $_POST['q9'];
                                $q10 = $_POST['q10'];
                                $q11 = $_POST['q11'];
                                $q12 = $_POST['q12'];
                                $q13 = $_POST['q13'];
                                $D = "UPDATE ctotald 
                                SET q8 = '$q8', 
                                q9 = '$q9', 
                                q10 = '$q10',
                                q11 = '$q11', 
                                q12 = '$q12', 
                                q13 = '$q13'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $D);
                        ?>


                                <td colspan="5"> <?php echo  $q8 .  " + " . $q9 . " + " . $q10 .  
                                " + " . $q11 . " + " . $q12 . " + " . $q13; ?>
                                </td>
                    </tr>

                <?php } ?>

            <tr>
                <td>Total D %</td>
                
                <?php
                            if (isset($_POST['calculateD'])) {
                                echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalD"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            } else {
                                echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalD"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            }
                            if (isset($_POST['calculateD'])) {
                                $q8 = $_POST['q8'];
                                $q9 = $_POST['q9'];
                                $q10 = $_POST['q10'];
                                $q11 = $_POST['q11'];
                                $q12 = $_POST['q12'];
                                $q13 = $_POST['q13'];

                                $totalD = (($q8 + $q9 + $q10 + $q11 + $q12 + $q13) * 3) / 24;

                                $roundD = number_format((float)$totalD, 2, '.', '');

                                $sql = "UPDATE companyassessment 
                                        SET totalD = '$roundD' WHERE matricNo = '$matricNo' ";
                                $insert = mysqli_query($db, $sql);
                                $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalD, 2, '.', '') ?>
                        </td>
                </tr>
        <?php }
                        } ?>

            </table>

            <div class="topnav">

                <div class="search-container">
                    <button type='submit' name="calculateD" id="calculateD">
                        Calculate</button>
                </div>
            </div>

        </form>
    <?php } ?>

    <form action="" method="post">
        <table id=t01 style="width:80%">
            <tr>
                <th>Sub-attributes</th>
                <th>0 <br>
                    Poor</th>
                <th>1 <br>
                    Weak</th>
                <th>2 <br>
                    Fair</th>
                <th>3 <br>
                    Good</th>
                <th>4 <br>
                    Excellent</th>
            </tr>

            <tr>
                <td colspan="6" style="text-align: center;">Values, Attitudes & Professionalism (4%)
                </td>
            </tr>

            <?php
               // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                global $subTotalA, $totalA, $sql, $result, $matricNo, $defaultB;


                // Check connection
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $result = mysqli_query($db, "INSERT INTO ctotale (matricNo,q14,q15,q16)
                VALUES ('$matricNo', '0', '0', '0')");

                $checkE = "SELECT * FROM ctotale WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkE);
                while ($row = mysqli_fetch_assoc($result)) {
                    $q14 = $row["q14"];
                    $q15 = $row["q15"];
                    $q16 = $row["q16"];
                ?>

            <tr>
                <td>
                    Appearance
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q14" name="q14" <?php if ($q14 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q14">Show appearance, not appropriate to situations or wear improper attire at all times
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q14" name="q14" <?php if ($q14 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q14">Show appearance, less appropriate to situations or wear improper attire most of the time
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q14" name="q14" <?php if ($q14 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q14">Show appearance, appropriate to situations and wear proper attire in general
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q14" name="q14" <?php if ($q14 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q14">Show appearance, appropriate to situations and most of the time wear proper attire
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q14" name="q14" <?php if ($q14 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q14">Always show appearance, appropriate to situations and wear proper attire at all times
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    Proactive & Volunteerism
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q15" name="q15" <?php if ($q15 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q15">Demonstrate no interest to offer him/herself when offered to perform a certain task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q15" name="q15" <?php if ($q15 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q15">Demonstrate less interest to offer him/herself when offered to perform a certain task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q15" name="q15" <?php if ($q15 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q15">Agree to offer him/herself when offered to perform a certain task (reactive)
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q15" name="q15" <?php if ($q15 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q15">Offer him / herself voluntarily to perform a certain task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q15" name="q15" <?php if ($q15 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q15">Offer him/herself voluntarily to perform certain task and demonstrate ability to lead a task
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    Work Ethics
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q16" name="q16" <?php if ($q16 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q16">Practice inappropriate working culture such as bad behaviour,
                        not punctual as well as not being efficient, not productive and unethical at work in almost all situations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q16" name="q16" <?php if ($q16 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q16">Sometime shows appropriate working culture such as inconsistent
                        behaviour, less punctual as well as being less efficient, productive and ethical at
                        work in many situations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q16" name="q16" <?php if ($q16 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q16">Practice good working culture such as good moral, timeliness as
                        well as being efficient, productive and ethical at work in general

                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q16" name="q16" <?php if ($q16 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q16">Practice good working culture such as good moral, timeliness as
                        well as being efficient, productive and ethical at work in most situations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q16" name="q16" <?php if ($q16 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q16">Always practice excellent working culture such as good moral,
                        timeliness as well as being efficient, productive and ethical at work in all situations
                    </label>
                </td>
            </tr>

            <tr>
                <td>Sub-total</td>
                
                <?php
                       // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                        global $subTotalB, $totalB, $sql;

                        // Check connection
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        if (isset($_POST['calculateE'])) {
                            echo '    <td colspan="5" style =display:none> 
                            ' . $row["q14"] . " + " . $row["q15"] . " + " . $row["q16"];
                            '
                            </td>
                            </tr>';
                        } else {
                            echo '    <td colspan="5"> 
                        ' . $row["q14"] . " + " . $row["q15"] . " + " . $row["q16"];
                            '
                        </td>
                        </tr>';
                        }
                        $checkTotalE = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                        $result = mysqli_query($db, $checkTotalE);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalE = $row["totalE"];

                            if (isset($_POST['calculateE'])) {
                                $q14 = $_POST['q14'];
                                $q15 = $_POST['q15'];
                                $q16 = $_POST['q16'];
                                $E = "UPDATE ctotale 
                                SET q14 = '$q14', 
                                q15 = '$q15', 
                                q16 = '$q16'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $E);
                        ?>


                                <td colspan="5"> <?php echo  $q14 .  " + " . $q15 . " + " . $q16; ?>
                                </td>
                    </tr>

                <?php } ?>

            <tr>
                <td>Total E %</td>
                
                <?php
                            if (isset($_POST['calculateE'])) {
                                echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalE"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            } else {
                                echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalE"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            }
                            if (isset($_POST['calculateE'])) {
                                $q14 = $_POST['q14'];
                                $q15 = $_POST['q15'];
                                $q16 = $_POST['q16'];

                                $totalE = (($q14 + $q15 + $q16) * 4) / 12;

                                $roundE = number_format((float)$totalE, 2, '.', '');

                                $sql = "UPDATE companyassessment 
                                        SET totalE = '$roundE' WHERE matricNo = '$matricNo' ";
                                $insert = mysqli_query($db, $sql);
                                $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalE, 2, '.', '') ?>
                        </td>
                </tr>
        <?php }
                        } ?>

            </table>

            <div class="topnav">

                <div class="search-container">
                    <button type='submit' name="calculateE" id="calculateE">
                        Calculate</button>
                </div>
            </div>

        </form>
    <?php } ?>

    <form action="" method="post">
            <table id=t01 style="width:80%">
                <tr>
                    <th>Sub-attributes</th>
                    <th>0 <br>
                        Poor</th>
                    <th>1 <br>
                        Weak</th>
                    <th>2 <br>
                        Fair</th>
                    <th>3 <br>
                        Good</th>
                    <th>4 <br>
                        Excellent</th>
                </tr>

            <tr>
                <td colspan="6" style="text-align: center;">Lifelong Learning (3%)
                </td>
            </tr>

            <?php
               // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                global $subTotalA, $totalA, $sql, $result, $matricNo, $defaultB;


                // Check connection
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $result = mysqli_query($db, "INSERT INTO ctotalf (matricNo,q17,q18,q19,q20)
                VALUES ('$matricNo', '0', '0', '0', '0')");

                $checkF = "SELECT * FROM ctotalf WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkF);
                while ($row = mysqli_fetch_assoc($result)) {
                    $q17 = $row["q17"];
                    $q18 = $row["q18"];
                    $q19 = $row["q19"];
                    $q20 = $row["q20"];
                ?>

            <tr>
                <td>
                    Self Learning
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q17" name="q17" <?php if ($q17 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q17">Not able to self learn
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q17" name="q17" <?php if ($q17 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q17">Limited ability to self learn
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q17" name="q17" <?php if ($q17 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q17">Sufficient ability to self learn
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q17" name="q17" <?php if ($q17 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q17">In general, able to self learn
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q17" name="q17" <?php if ($q17 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q17">Good ability to self learn
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    Interest
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q18" name="q18" <?php if ($q18 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0">
                    <label for="q18">Show no interest in exploring issues for a given task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q18" name="q18" <?php if ($q18 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q18">Show limited interest in exploring issues for a given task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q18" name="q18" <?php if ($q18 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q18">Demonstrate some interest in exploring issues for a given task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q18" name="q18" <?php if ($q18 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q18">Demonstrate sufficient interest for exploring issues for a given task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q18" name="q18" <?php if ($q18 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q18">Readily interested in exploring issues for a given task
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    Initiative
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q19" name="q19" <?php if ($q19 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q19">No initiative to complete a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q19" name="q19" <?php if ($q19 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q19">Demonstrate limited initiative in completing a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q19" name="q19" <?php if ($q19 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q19">Demonstrate moderate initiative in completing a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q19" name="q19" <?php if ($q19 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q19">Demonstrate good initiative in completing a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q19" name="q19" <?php if ($q19 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q19">Demonstrate excellent initiative in completing a task
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    Effort
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q20" name="q20" <?php if ($q20 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q20">No effort to complete task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q20" name="q20" <?php if ($q20 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q20">Minimal effort to complete task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q20" name="q20" <?php if ($q20 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q20">Sufficient effort to complete task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q20" name="q20" <?php if ($q20 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q20">Good effort to complete task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q20" name="q20" <?php if ($q20 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q20">Excellent effort to complete task
                    </label>
                </td>
            </tr>

            <tr>
                <td>Sub-total</td>
                
                <?php
                       // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                        global $subTotalB, $totalB, $sql;

                        // Check connection
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        if (isset($_POST['calculateF'])) {
                            echo '    <td colspan="5" style =display:none> 
                            ' . $row["q17"] . " + " . $row["q18"] . " + " . $row["q19"] . " + " . $row["q20"];
                            '
                            </td>
                            </tr>';
                        } else {
                            echo '    <td colspan="5" > 
                            ' . $row["q17"] . " + " . $row["q18"] . " + " . $row["q19"] . " + " . $row["q20"];
                            '
                            </td>
                            </tr>';
                        }
                        $checkTotalF = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                        $result = mysqli_query($db, $checkTotalF);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalF = $row["totalF"];

                            if (isset($_POST['calculateF'])) {
                                $q17 = $_POST['q17'];
                                $q18 = $_POST['q18'];
                                $q19 = $_POST['q19'];
                                $q20 = $_POST['q20'];
                                $F = "UPDATE ctotalf 
                                SET q17 = '$q17', 
                                q18 = '$q18', 
                                q19 = '$q19',
                                q20 = '$q20'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $F);
                        ?>


                                <td colspan="5"> <?php echo  $q17 .  " + " . $q18 . 
                                " + " . $q19 . " + " . $q20; ?>
                                </td>
                    </tr>

                <?php } ?>

            <tr>
                <td>Total F %</td>
                
                <?php
                            if (isset($_POST['calculateF'])) {
                                echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalF"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            } else {
                                echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalF"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            }
                            if (isset($_POST['calculateF'])) {
                                $q17 = $_POST['q17'];
                                $q18 = $_POST['q18'];
                                $q19 = $_POST['q19'];
                                $q20 = $_POST['q20'];

                                $totalF = (($q17 + $q18 + $q19 + $q20) * 2) / 16;

                                $roundF = number_format((float)$totalF, 2, '.', '');

                                $sql = "UPDATE companyassessment 
                                        SET totalF = '$roundF' WHERE matricNo = '$matricNo' ";
                                $insert = mysqli_query($db, $sql);
                                $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalF, 2, '.', '') ?>
                        </td>
                </tr>
        <?php }
                        } ?>

            </table>

            <div class="topnav">

                <div class="search-container">
                    <button type='submit' name="calculateF" id="calculateF">
                        Calculate</button>
                        <br>
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:18px;padding-left:18px;;" href="companyAssessment-B.php?matricNo=' . $matricNo . '" 
            class="next"> Next</a> </button>'
            ?>
                </div>
            </div>

        </form>
    <?php } ?>

        </table>

    </div>
    
</body>

</html>