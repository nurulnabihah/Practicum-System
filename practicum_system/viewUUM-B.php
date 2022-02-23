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
    
    input { cursor: not-allowed; }

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
        color: #0099ff;
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
    <li><b><i><a style="font-size:16px" href="committeePage.php"> PAMS </a></i></b></li>
        <li><a href="committeePage.php">HOME</a></li>
        <li><a class="active" href="endorsement.php">ENDORSEMENT</a></li>
        <li><a href="login.php">LOGOUT</a></li>
    </ul>
    <ul>
            <?php
            echo'
            <li><a href="viewUUM-A.php?matricNo=' . $matricNo . '">SECTION A</a></li>
            <li><a class="active" href="viewUUM-B.php?matricNo=' . $matricNo . '">SECTION B</a></li>
            <li><a href="viewUUM-C.php?matricNo=' . $matricNo . '">SECTION C</a></li>
            <li><a href="viewUUMTotal.php?matricNo=' . $matricNo . '">TOTAL</a></li>
            '; ?>
        </ul>

    <div class="container1">
        <p class="ex1">
            SECTION B: INDIVIDUAL ASSESSMENT (20%)
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
            global  $sql, $result, $matricNo;


            // Check connection
            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $checkC = "SELECT * FROM totalc WHERE matricNo=$matricNo";
            $result = mysqli_query($db, $checkC);
            while ($row = mysqli_fetch_assoc($result)) {
                $q18 = $row["q18"];
                $q19 = $row["q19"];
                $q20 = $row["q20"];
            ?>
                <tr>
                    <td>
                       <b> Understanding of organization governance </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q18" name="q18" <?php if ($q18 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0">
                        <label for="q18">Poor understanding of the organization governance</label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q18" name="q18" <?php if ($q18 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q18">Limited understanding of the organization governance
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q18" name="q18" <?php if ($q18 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q18">Fair understanding of the organization governance
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q18" name="q18" <?php if ($q18 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q18">Good understanding of the organization governance
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q18" name="q18" <?php if ($q18 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q18">Excellent understanding of the organization governance and can explain off hands
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                      <b>  Knowledge of key business principles and practices</b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q19" name="q19" <?php if ($q19 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0" required>
                        <label for="q19">Do not understand the important information from a business point of view
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q19" name="q19" <?php if ($q19 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q19">Poor understanding what is Important from a business point of view
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q19" name="q19" <?php if ($q19 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q19">Often need guidance in understanding what is important from a business point of view
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q19" name="q19" <?php if ($q19 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q19">Good understanding of the important information from a business point of view and
                            able to use it to solve relevant problems
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q19" name="q19" <?php if ($q19 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q19">Excellent understanding of the important information; able to use it to solve
                            relevant problems and identify new business opportunities
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                       <b> Ability to apply knowledge into practices</b>

                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q20" name="q20" <?php if ($q20 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0" required>
                        <label for="q20">Do not demonstrate skills in applying knowledge to practical problems
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q20" name="q20" <?php if ($q20 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q20">Demonstrates minimal skills in applying knowledge to practical problems
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q20" name="q20" <?php if ($q20 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q20">Demonstrates moderate skills in applying knowledge to practical problems
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q20" name="q20" <?php if ($q20 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q20">Demonstrates reasonable skills in applying knowledge to practical problems
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q20" name="q20" <?php if ($q20 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q20">Demonstrates excellent skills in applying knowledge to practical problems
                        </label>
                    </td>
                </tr>

                <tr>
                    <td> <b>Sub-total </b></td>

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
                            ' . $row["q18"] . " + " . $row["q19"] . " + " . $row["q20"];
                        '
                            </td>
                            </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                                ' . $row["q18"] . " + " . $row["q19"] . " + " . $row["q20"];
                        '
                                </td>
                                </tr>';
                    }
                    $checkTotalC = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                    $result = mysqli_query($db, $checkTotalC);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $totalC = $row["totalC"];
?>
            <tr>
                <td><b>Total C % </b></td>

                <?php
                        if (isset($_POST['calculateC'])) {
                            echo '    <td colspan="5" style =display:none> 
                            ' . number_format((float)$row["totalC"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                        } else {
                            echo '    <td colspan="5" style="color:red;"> 
                            ' . number_format((float)$row["totalC"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                        }
                    }
        ?>
        </table>

    </form>
<?php } ?>

<form action="" method="post">
    <table id=t01 style="width:80%" method="post">
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
            <td colspan="6" style="text-align: center;">Problem Solving (10%)
            </td>
        </tr>

        <?php
        // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
        global $sql, $result, $matricNo, $defaultB;


        // Check connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $checkD = "SELECT * FROM totald WHERE matricNo=$matricNo";
        $result = mysqli_query($db, $checkD);
        while ($row = mysqli_fetch_assoc($result)) {
            $q21 = $row["q21"];
            $q22 = $row["q22"];
            $q23 = $row["q23"];
            $q24 = $row["q24"];
        ?>

            <tr>
                <td>
                   <b> Problem Identification </b>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q21" name="q21" <?php if ($q21 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q21">Not able to explain a problem, even with assistance.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q21" name="q21" <?php if ($q21 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q21">Able to partially explain a problem with maximum assistance.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q21" name="q21" <?php if ($q21 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q21">Able to explain a problem with minimum assistance

                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q21" name="q21" <?php if ($q21 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q21">Independently able to explain a problem without assistance.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q21" name="q21" <?php if ($q21 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q21">Able to provide explanation of problem clearly and accurately.
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Analysis </b>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q22" name="q22" <?php if ($q22 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q22">Not able to organize and analyze gathered requirements and fails to define
                        the factors that contribute to the problem/issue or explain the root of the problem.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q22" name="q22" <?php if ($q22 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q22">Finds difficulty in organizing and analyzing gathered requirements and
                        finds difficulty in explaining the factors that neither contribute to the problem/issue nor
                        explains the root of the problem.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q22" name="q22" <?php if ($q22 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q22">Able to organize and analyze gathered requirements, but does not clearly
                        describe the factors that contribute to the problem/issue or clearly explain the root of the
                        problem.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q22" name="q22" <?php if ($q22 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q22">Able to organize and analyze gathered requirements, describe some factors
                        that contribute to the problem/issue or explain the possible roots of the problem
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q22" name="q22" <?php if ($q22 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q22">Able to organize and analyze gathered requirements, clearly describe the
                        factors that contribute to the problem/issue or explain the root of the problem.
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                   <b> Application </b>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q23" name="q23" <?php if ($q23 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q23">Not able to apply any new idea or knowledge to a given problem.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q23" name="q23" <?php if ($q23 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q23">Barely able to apply new idea
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q23" name="q23" <?php if ($q23 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q23">Limited ability to apply new idea or knowledge.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q23" name="q23" <?php if ($q23 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q23">Able to apply new idea or knowledge to a given problem with assistance from lecturer
                        or student.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q23" name="q23" <?php if ($q23 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q23">Able to apply new idea or knowledge to a given problem independently.
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                   <b> Decision Making </b>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q24" name="q24" <?php if ($q24 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q24">Not able to make decisions based on comparison and contrast between
                        information, ideas and solutions even with assistance.
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q24" name="q24" <?php if ($q24 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q24">Able to make some decisions based on comparison and contrast between
                        information, ideas and available solution with maximum assistance
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q24" name="q24" <?php if ($q24 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q24">Able to make decisions based on comparison and contrast between information,
                        ideas and available solutions with some help
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q24" name="q24" <?php if ($q24 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q24">Able to make decisions based on comparison and contrast between information, ideas
                        and available solutions
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q24" name="q24" <?php if ($q24 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q24">Able to make effective and excellent decisions based on comparison and
                        contrast between information, identify problems and available solutions.
                    </label>
                </td>
            </tr>

            <tr>
                <td><b>Sub-total </b></td>

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
                            ' . $row["q21"] . " + " . $row["q22"] . " + " . $row["q23"] . " + " . $row["q24"];
                    '
                            </td>
                            </tr>';
                } else {
                    echo '    <td colspan="5" style="color:red;"> 
                                ' . $row["q21"] . " + " . $row["q22"] . " + " . $row["q23"] . " + " . $row["q24"];
                    '
                                </td>
                                </tr>';
                }
                $checkTotalD = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkTotalD);
                while ($row = mysqli_fetch_assoc($result)) {
                    $totalD = $row["totalD"];
?>

        <tr>
            <td><b>Total D %</b></td>

            <?php
                    if (isset($_POST['calculateD'])) {
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalD"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                        ' . number_format((float)$row["totalD"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    }
                }
    ?>
    </table>

</form>
<?php } ?>

<form action="" method="post">
    <table id=t01 style="width:80%" method="post">
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
        global $sql, $result, $matricNo, $defaultB;


        // Check connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $checkE = "SELECT * FROM totale WHERE matricNo=$matricNo";
        $result = mysqli_query($db, $checkE);
        while ($row = mysqli_fetch_assoc($result)) {
            $q25 = $row["q25"];
            $q26 = $row["q26"];
            $q27 = $row["q27"];
            $q28 = $row["q28"];
            $q29 = $row["q29"];
            $q30 = $row["q30"];
        ?>

            <tr>
                <td rowspan="3"> <b>Self-expression </b></td>
                <td style="font-weight:normal">
                    <input type="radio" id="q25" name="q25" <?php if ($q25 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q25">Not confident in doing a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q25" name="q25" <?php if ($q25 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q25">Limited selfconfidence in doing a task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q25" name="q25" <?php if ($q25 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q25">Sometimes demonstrate selfconfidence
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q25" name="q25" <?php if ($q25 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q25">Frequently demonstrate selfconfidence
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q25" name="q25" <?php if ($q25 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q25">Always display selfconfidence
                    </label>
                </td>
            </tr>

            <tr>
                <td style="font-weight:normal">
                    <input type="radio" id="q26" name="q26" <?php if ($q26 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q26">Too self centred
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q26" name="q26" <?php if ($q26 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q26">Self centred
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q26" name="q26" <?php if ($q26 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q26">Sometimes accept other people's perception of self
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q26" name="q26" <?php if ($q26 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q26">Frequently accept other people’s perception of self with an open heart
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q26" name="q26" <?php if ($q26 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q26">Always accept other people’s perception of self with an open heart
                    </label>
                </td>
            </tr>

            <tr>
                <td style="font-weight:normal">
                    <input type="radio" id="q27" name="q27" <?php if ($q27 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q27">Not aware of self ability and potential
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q27" name="q27" <?php if ($q27 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q27">Able to realize the self ability and potential when raised by others
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q27" name="q27" <?php if ($q27 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q27">Sometimes accept and give praise and feedback
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q27" name="q27" <?php if ($q27 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q27">Frequently accept and give praise and feedback
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q27" name="q27" <?php if ($q27 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q27">Always accept and give praise an constructive, rational feedback
                    </label>
                </td>
            </tr>

            <tr>
                <td rowspan="2"><b>Interaction with others</b></td>
                <td style="font-weight:normal">
                    <input type="radio" id="q28" name="q28" <?php if ($q28 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q28">No interest to participate in conversations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q28" name="q28" <?php if ($q28 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q28">Less interest to participate in conversations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q28" name="q28" <?php if ($q28 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q28">Take part in conversations when initiated by others
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q28" name="q28" <?php if ($q28 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q28">Take the initiative to start a conversation
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q28" name="q28" <?php if ($q28 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q28">Start, maintain and end a conversation in a friendly manner
                    </label>
                </td>
            </tr>

            <tr>
                <td style="font-weight:normal">
                    <input type="radio" id="q29" name="q29" <?php if ($q29 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q29">No eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q29" name="q29" <?php if ($q29 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q29">Less eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q29" name="q29" <?php if ($q29 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q29">Limited eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q29" name="q29" <?php if ($q29 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q29">Appropriate eye contact
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q29" name="q29" <?php if ($q29 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q29">Maintain good eye contact
                    </label>
                </td>
            </tr>

            <tr>
                <td><b>Etiquette</b></td>
                <td style="font-weight:normal">
                    <input type="radio" id="q30" name="q30" <?php if ($q30 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q30">Need guidance to be ethical when carrying out responsibilities to the society
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q30" name="q30" <?php if ($q30 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q30">Lack of ethics when carrying out responsibilities to the society
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q30" name="q30" <?php if ($q30 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q30">Ethical when carrying out responsibilities to the society, but sometimes put self
                        interest first
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q30" name="q30" <?php if ($q30 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q30">Frequently ethical when carrying out responsibilities to the society
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q30" name="q30" <?php if ($q30 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q30">Always ethical and promote being ethical when carrying out responsibilities to the
                        society
                    </label>
                </td>
            </tr>

            <tr>
                <td><b>Sub-total </b></td>
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
                            ' . $row["q25"] . " + " . $row["q26"] . " + " . $row["q27"] . " + " . $row["q28"] . " + " . $row["q29"] . " + " . $row["q30"];
                    '
                            </td>
                            </tr>';
                } else {
                    echo '    <td colspan="5" style="color:red;"> 
                            ' . $row["q25"] . " + " . $row["q26"] . " + " . $row["q27"] . " + " . $row["q28"] . " + " . $row["q29"] . " + " . $row["q30"];
                    '
                            </td>
                            </tr>';
                }
                $checkTotalE = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkTotalE);
                while ($row = mysqli_fetch_assoc($result)) {
                    $totalE = $row["totalE"];
?>

        <tr>
            <td><b>Total E % </b></td>

            <?php
                    if (isset($_POST['calculateE'])) {
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalE"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                        ' . number_format((float)$row["totalE"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    }
                }
    ?>
    </table>

</form>
<?php } ?>

<form action="" method="post">
    <table id=t01 style="width:80%" method="post">
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
        global $sql, $result, $matricNo, $defaultB;


        // Check connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $checkF = "SELECT * FROM totalf WHERE matricNo=$matricNo";
        $result = mysqli_query($db, $checkF);
        while ($row = mysqli_fetch_assoc($result)) {
            $q31 = $row["q31"];
            $q32 = $row["q32"];
            $q33 = $row["q33"];
            $q34 = $row["q34"];
            $q35 = $row["q35"];
        ?>

            <tr>
                <td>
                    <b>Appearance </b>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q31" name="q31" <?php if ($q31 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q31">Show appearance, not appropriate to situations or wear improper attire at all times
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q31" name="q31" <?php if ($q31 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q31">Show appearance, less appropriate to situations or wear improper attire most of the time
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q31" name="q31" <?php if ($q31 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q31">Show appearance, appropriate to situations and wear proper attire in general
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q31" name="q31" <?php if ($q31 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q31">Show appearance, appropriate to situations and most of the time wear proper attire
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q31" name="q31" <?php if ($q31 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q31">Always show appearance, appropriate to situations and wear proper attire at all times
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                   <b> Proactive & Volunteerism </b>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q32" name="q32" <?php if ($q32 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q32">Demonstrate no interest to offer him/herself when offered to perform a certain task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q32" name="q32" <?php if ($q32 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q32">Demonstrate less interest to offer him/herself when offered to perform a certain task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q32" name="q32" <?php if ($q32 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q32">Agree to offer him/herself when offered to perform a certain task (reactive)
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q32" name="q32" <?php if ($q32 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q32">Offer him / herself voluntarily to perform a certain task
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q32" name="q32" <?php if ($q32 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q32">Offer him/herself voluntarily to perform certain task and demonstrate ability to lead a task
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                   <b> Work Ethics </b>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q33" name="q33" <?php if ($q33 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q33">Practice inappropriate working culture such as bad behaviour,
                        not punctual as well as not being efficient, not productive and unethical at work in almost all situations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q33" name="q33" <?php if ($q33 == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label for="q33">Sometime shows appropriate working culture such as inconsistent
                        behaviour, less punctual as well as being less efficient, productive and ethical at
                        work in many situations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q33" name="q33" <?php if ($q33 == '2') {
                                                                echo 'checked';
                                                            } ?> value="2">
                    <label for="q33">Practice good working culture such as good moral, timeliness as
                        well as being efficient, productive and ethical at work in general

                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q33" name="q33" <?php if ($q33 == '3') {
                                                                echo 'checked';
                                                            } ?> value="3">
                    <label for="q33">Practice good working culture such as good moral, timeliness as
                        well as being efficient, productive and ethical at work in most situations
                    </label>
                </td>
                <td style="font-weight:normal">
                    <input type="radio" id="q33" name="q33" <?php if ($q33 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q33">Always practice excellent working culture such as good moral,
                        timeliness as well as being efficient, productive and ethical at work in all situations
                    </label>
                </td>
            </tr>

            <tr>
                <td><b>Attendance to workshop I </b></td>
                <td style="font-weight:normal">
                    <input type="radio" id="q34" name="q34" <?php if ($q34 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q34">Absent
                    </label>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-weight:normal">
                    <input type="radio" id="q34" name="q34" <?php if ($q34 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q34">Attended
                    </label>
                </td>
            </tr>

            <tr>
                <td><b>Attendance to workshop II </b></td>
                <td style="font-weight:normal">
                    <input type="radio" id="q35" name="q35" <?php if ($q35 == '0') {
                                                                echo 'checked';
                                                            } ?> value="0" required>
                    <label for="q35">Absent
                    </label>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-weight:normal">
                    <input type="radio" id="q35" name="q35" <?php if ($q35 == '4') {
                                                                echo 'checked';
                                                            } ?> value="4">
                    <label for="q35">Attended
                    </label>
                </td>
            </tr>

            <tr>
                <td><b>Sub-total </b></td>

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
                            ' . $row["q31"] . " + " . $row["q32"] . " + " . $row["q33"] . " + " . $row["q34"] . " + " . $row["q35"];
                    '
                            </td>
                            </tr>';
                } else {
                    echo '    <td colspan="5" style="color:red;"> 
                            ' . $row["q31"] . " + " . $row["q32"] . " + " . $row["q33"] . " + " . $row["q34"] . " + " . $row["q35"];
                    '
                            </td>
                            </tr>';
                }
                $checkTotalF = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkTotalF);
                while ($row = mysqli_fetch_assoc($result)) {
                    $totalF = $row["totalF"];
?>

        <tr>
            <td><b>Total F % </b></td>

            <?php
                    if (isset($_POST['calculateF'])) {
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalF"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                        ' . number_format((float)$row["totalF"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    }
                }
    ?>
    </table>

</form>
<?php } ?>

<form action="" method="post">
    <table id=t01 style="width:80%" method="post">
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
        global $sql, $result, $matricNo, $defaultB;


        // Check connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $checkG = "SELECT * FROM totalg WHERE matricNo=$matricNo";
        $result = mysqli_query($db, $checkG);
        while ($row = mysqli_fetch_assoc($result)) {
            $q36 = $row["q36"];
            $q37 = $row["q37"];
            $q38 = $row["q38"];
            $q39 = $row["q39"];
        ?>

<tr>
    <td>
        <b>Self Learning </b>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q36" name="q36" <?php if ($q36 == '0') {
                                                    echo 'checked';
                                                } ?> value="0" required>
        <label for="q36">Not able to self learn
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q36" name="q36" <?php if ($q36 == '1') {
                                                    echo 'checked';
                                                } ?> value="1">
        <label for="q36">Limited ability to self learn
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q36" name="q36" <?php if ($q36 == '2') {
                                                    echo 'checked';
                                                } ?> value="2">
        <label for="q36">Sufficient ability to self learn
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q36" name="q36" <?php if ($q36 == '3') {
                                                    echo 'checked';
                                                } ?> value="3">
        <label for="q36">In general, able to self learn
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q36" name="q36" <?php if ($q36 == '4') {
                                                    echo 'checked';
                                                } ?> value="4">
        <label for="q36">Good ability to self learn
        </label>
    </td>
</tr>

<tr>
    <td>
       <b> Interest </b>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q37" name="q37" <?php if ($q37 == '0') {
                                                    echo 'checked';
                                                } ?> value="0" required>
        <label for="q37">Show no interest in exploring issues for a given task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q37" name="q37" <?php if ($q37 == '1') {
                                                    echo 'checked';
                                                } ?> value="1">
        <label for="q37">Show limited interest in exploring issues for a given task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q37" name="q37" <?php if ($q37 == '2') {
                                                    echo 'checked';
                                                } ?> value="2">
        <label for="q37">Demonstrate some interest in exploring issues for a given task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q37" name="q37" <?php if ($q37 == '3') {
                                                    echo 'checked';
                                                } ?> value="3">
        <label for="q37">Demonstrate sufficient interest for exploring issues for a given task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q37" name="q37" <?php if ($q37 == '4') {
                                                    echo 'checked';
                                                } ?> value="4">
        <label for="q37">Readily interested in exploring issues for a given task
        </label>
    </td>
</tr>

<tr>
    <td>
        <b>Initiative </b>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q38" name="q38" <?php if ($q38 == '0') {
                                                    echo 'checked';
                                                } ?> value="0" required>
        <label for="q38">No initiative to complete a task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q38" name="q38" <?php if ($q38 == '1') {
                                                    echo 'checked';
                                                } ?> value="1">
        <label for="q38">Demonstrate limited initiative in completing a task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q38" name="q38" <?php if ($q38 == '2') {
                                                    echo 'checked';
                                                } ?> value="2">
        <label for="q38">Demonstrate moderate initiative in completing a task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q38" name="q38" <?php if ($q38 == '3') {
                                                    echo 'checked';
                                                } ?> value="3">
        <label for="q38">Demonstrate good initiative in completing a task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q38" name="q38" <?php if ($q38 == '4') {
                                                    echo 'checked';
                                                } ?> value="4">
        <label for="q38">Demonstrate excellent initiative in completing a task
        </label>
    </td>
</tr>

<tr>
    <td>
       <b> Effort </b>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q39" name="q39" <?php if ($q39 == '0') {
                                                    echo 'checked';
                                                } ?> value="0" required>
        <label for="q39">No effort to complete task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q39" name="q39" <?php if ($q39 == '1') {
                                                    echo 'checked';
                                                } ?> value="1">
        <label for="q39">Minimal effort to complete task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q39" name="q39" <?php if ($q39 == '2') {
                                                    echo 'checked';
                                                } ?> value="2">
        <label for="q39">Sufficient effort to complete task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q39" name="q39" <?php if ($q39 == '3') {
                                                    echo 'checked';
                                                } ?> value="3">
        <label for="q39">Good effort to complete task
        </label>
    </td>
    <td style="font-weight:normal">
        <input type="radio" id="q39" name="q39" <?php if ($q39 == '4') {
                                                    echo 'checked';
                                                } ?> value="4">
        <label for="q39">Excellent effort to complete task
        </label>
    </td>
</tr>

<tr>
    <td><b>Sub-total</b></td>
    
    <?php
                // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                global $subTotalB, $totalB, $sql;

                // Check connection
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                if (isset($_POST['calculateG'])) {
                    echo '    <td colspan="5" style =display:none> 
                            ' . $row["q36"] . " + " . $row["q37"] . " + " . $row["q38"] . " + " . $row["q39"];
                    '
                            </td>
                            </tr>';
                } else {
                    echo '    <td colspan="5" style="color:red;"> 
                    ' . $row["q36"] . " + " . $row["q37"] . " + " . $row["q38"] . " + " . $row["q39"];
            '
                    </td>
                    </tr>';
                }
                $checkTotalG = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkTotalG);
                while ($row = mysqli_fetch_assoc($result)) {
                    $totalG = $row["totalG"];
                    ?>

<tr>
    <td><b>Total G % </b></td>
    
    <?php
                    if (isset($_POST['calculateG'])) {
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalG"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                        ' . number_format((float)$row["totalG"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    }
                }
    ?>
    </table>

    <div class="topnav">

        <div class="search-container">
            
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:18px;padding-left:18px;" href="viewUUM-C.php?matricNo=' . $matricNo . '" 
            class="next">Next </a> </button>'
            ?>
            <br>
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:3px;padding-left:3px;" href="viewUUM-A.php?matricNo=' . $matricNo . '" 
            class="previous"> Previous</a> </button>'
            ?>
        </div>
    </div>
</form>
<?php } ?>

</div>

</body>

</html>