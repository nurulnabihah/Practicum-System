<?php
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
        text-decoration: underline;
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
            <li><a href="companyAssessment-A.php?matricNo=' . $matricNo . '">SECTION A</a></li>
            <li><a class="active" href="companyAssessment-B.php?matricNo=' . $matricNo . '">SECTION B</a></li>
            <li><a href="companyAssessmentTotal.php?matricNo=' . $matricNo . '">TOTAL</a></li>
            '; ?>
        </ul>

        <div class="container1">
            <p class="ex1">
                SECTION B: PROJECT ASSESSMENT (20%)</p>
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
                    <td colspan="6" style="text-align: center;">Practical – Project Presentation (10%)
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
                $result = mysqli_query($db, "INSERT INTO ctotalg (matricNo,q21,q22,q23,q24,q25,q26,q27,q28,q29)
                    VALUES ('$matricNo', '0', '0', '0', '0', '0', '0', '0', '0', '0')");

                $checkG = "SELECT * FROM ctotalg WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkG);
                while ($row = mysqli_fetch_assoc($result)) {
                    $q21 = $row["q21"];
                    $q22 = $row["q22"];
                    $q23 = $row["q23"];
                    $q24 = $row["q24"];
                    $q25 = $row["q25"];
                    $q26 = $row["q26"];
                    $q27 = $row["q27"];
                    $q28 = $row["q28"];
                    $q29 = $row["q29"];
                ?>

                    <tr>
                        <td>
                            <b>Purpose of presentation</b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q21" name="q21" <?php if ($q21 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q21">Incomprehensible
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q21" name="q21" <?php if ($q21 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q21">Vague
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q21" name="q21" <?php if ($q21 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q21">Moderately clear
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q21" name="q21" <?php if ($q21 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q21">Clear
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q21" name="q21" <?php if ($q21 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q21">Very clear
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                           <b> Content </b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q22" name="q22" <?php if ($q22 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q22">No grasp of subject matter
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q22" name="q22" <?php if ($q22 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q22">Lack of understanding of subject matter
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q22" name="q22" <?php if ($q22 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q22">Understand some of the subject matter
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q22" name="q22" <?php if ($q22 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q22">Understand most of the subject matter
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q22" name="q22" <?php if ($q22 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q22">Fully understand the subject matter
                            </label>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Adapt delivery to audience level</b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q23" name="q23" <?php if ($q23 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q23">Not able to deliver appropriately to the audience level
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q23" name="q23" <?php if ($q23 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q23">Able to deliver ideas with limited appropriateness to the target audience and require
                                further improvements.
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q23" name="q23" <?php if ($q23 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q23">Able to deliver ideas appropriately to the target audience
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q23" name="q23" <?php if ($q23 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q23">Able to deliver some ideas appropriately to the target audience well
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q23" name="q23" <?php if ($q23 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q23">Able to fully deliver ideas appropriately
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Voice & pronunciation</b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q24" name="q24" <?php if ($q24 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q24">Mumbles, reading
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q24" name="q24" <?php if ($q24 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q24">Mumbles at certain places, most of the audience has difficulty in hearing the
                                presentation
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q24" name="q24" <?php if ($q24 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q24">Voice is sometimes low, pronounce some words correctly. Some of the audience can hear
                                the presentation
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q24" name="q24" <?php if ($q24 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q24">Voice is clear, pronounced words correctly. Most of the audience can hear the
                                presentation
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q24" name="q24" <?php if ($q24 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q24">Voice is very clear. Pronounced words correctly. Audience can hear the presentation
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                           <b> Eye contact </b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q25" name="q25" <?php if ($q25 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q25">No eye contact. Reading notes.
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q25" name="q25" <?php if ($q25 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q25">Occasional use of eye contact. Frequently reading notes
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q25" name="q25" <?php if ($q25 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q25">Moderate use of eye contact. Still reads notes

                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q25" name="q25" <?php if ($q25 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q25">Maintains eye contact most of the time. Occasionally refers to notes
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q25" name="q25" <?php if ($q25 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q25">Maintain eye contact with audience, do not refer to notes nor having notes at hand
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Understand and respond to questions </b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q26" name="q26" <?php if ($q26 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q26">Not able to understand and respond to a question
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q26" name="q26" <?php if ($q26 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q26">Partly understand the questions but not able to accurately answer the question
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q26" name="q26" <?php if ($q26 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q26">Able to understand and briefly answer questions

                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q26" name="q26" <?php if ($q26 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q26">able to respond to questions reasonably well
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q26" name="q26" <?php if ($q26 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q26">Able to fully understand and respond to questions satisfactorily with explanations
                                and appropriate examples
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Project demo </b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q27" name="q27" <?php if ($q27 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q27">project is not functional
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q27" name="q27" <?php if ($q27 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q27">Most of the features are not functional
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q27" name="q27" <?php if ($q27 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q27">Half of the project is functional but not effective (to the objectives of the system)
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q27" name="q27" <?php if ($q27 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q27">project is functional but some parts can be improved
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q27" name="q27" <?php if ($q27 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q27">project is perfectly functional
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Beneficial to organization </b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q28" name="q28" <?php if ($q28 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q28">project is not beneficial
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q28" name="q28" <?php if ($q28 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q28">Only a few functions are beneficial
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q28" name="q28" <?php if ($q28 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q28">Parts of the project are beneficial – only to certain categories of users

                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q28" name="q28" <?php if ($q28 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q28">project is beneficiall but some parts can be improved
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q28" name="q28" <?php if ($q28 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q28">Project is beneficial to organization and all categories of specified users
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Ready for implementation </b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q29" name="q29" <?php if ($q29 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q29">project is not ready to be implemented
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q29" name="q29" <?php if ($q29 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q29">Less than half of the project is ready to be implemented
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q29" name="q29" <?php if ($q29 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q29">More than half of the project is ready to be implemented
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q29" name="q29" <?php if ($q29 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q29">project is ready to be implemented but some modules can be improved
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q29" name="q29" <?php if ($q29 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q29">project is fully ready to be implemented
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
                            ' . $row["q21"] . " + " . $row["q22"] . " + " . $row["q23"] . " + " . $row["q24"] . " + " . $row["q25"] .
                                " + " . $row["q26"] . " + " . $row["q27"] . " + " . $row["q28"] . " + " . $row["q29"];
                            '
                            </td>
                            </tr>';
                        } else {
                            echo '    <td colspan="5"> 
                    ' . $row["q21"] . " + " . $row["q22"] . " + " . $row["q23"] . " + " . $row["q24"] . " + " . $row["q25"] .
                                " + " . $row["q26"] . " + " . $row["q27"] . " + " . $row["q28"] . " + " . $row["q29"];
                            '
                    </td>
                    </tr>';
                        }
                        $checkTotalG = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                        $result = mysqli_query($db, $checkTotalG);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalG = $row["totalG"];

                            if (isset($_POST['calculateG'])) {
                                $q21 = $_POST['q21'];
                                $q22 = $_POST['q22'];
                                $q23 = $_POST['q23'];
                                $q24 = $_POST['q24'];
                                $q25 = $_POST['q25'];
                                $q26 = $_POST['q26'];
                                $q27 = $_POST['q27'];
                                $q28 = $_POST['q28'];
                                $q29 = $_POST['q29'];
                                $G = "UPDATE ctotalg 
                                SET q21 = '$q21', 
                                q22 = '$q22', 
                                q23 = '$q23',
                                q24 = '$q24',
                                q25 = '$q25',
                                q26 = '$q26', 
                                q27 = '$q27',
                                q28 = '$q28',
                                q29 = '$q29'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $G);
                        ?>

                                <td colspan="5"> <?php echo  $q21 .  " + " . $q22 . " + " . $q23 . " + " . $q24 . " + " . $q25 .
                                                        " + " . $q26 . " + " . $q27 . " + " . $q28 . " + " . $q29; ?>
                                </td>
                    </tr>

                <?php } ?>

                <tr>
                    <td><b>Total G % </b></td>

                    <?php
                            if (isset($_POST['calculateG'])) {
                                echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalG"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            } else {
                                echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalG"], 2, '.', '');
                                '
                     </td>
                      </tr>';
                            }
                            if (isset($_POST['calculateG'])) {
                                $q21 = $_POST['q21'];
                                $q22 = $_POST['q22'];
                                $q23 = $_POST['q23'];
                                $q24 = $_POST['q24'];
                                $q25 = $_POST['q25'];
                                $q26 = $_POST['q26'];
                                $q27 = $_POST['q27'];
                                $q28 = $_POST['q28'];
                                $q29 = $_POST['q29'];

                                $totalG = (($q21 + $q22 + $q23 + $q24 + $q25 + $q26 + $q27 + $q28 + $q29) * 10) / 36;

                                $roundG = number_format((float)$totalG, 2, '.', '');

                                $sql = "UPDATE companyassessment 
                                        SET totalG = '$roundG' WHERE matricNo = '$matricNo' ";
                                $insert = mysqli_query($db, $sql);
                                $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalG, 2, '.', '') ?>
                        </td>
                </tr>
        <?php } }?>

            </table>

            <div class="topnav">

                <div class="search-container">
                    <button type='submit' name="calculateG" id="calculateG">
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
                <td colspan="6" style="text-align: center;">Problem Solving (10%)
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
            $result = mysqli_query($db, "INSERT INTO ctotalh (matricNo,q30,q31,q32,q33)
                    VALUES ('$matricNo', '0', '0', '0', '0')");

            $checkH = "SELECT * FROM ctotalh WHERE matricNo=$matricNo";
            $result = mysqli_query($db, $checkH);
            while ($row = mysqli_fetch_assoc($result)) {
                $q30 = $row["q30"];
                $q31 = $row["q31"];
                $q32 = $row["q32"];
                $q33 = $row["q33"];
            ?>

                <tr>
                    <td>
                        <b>Problem Identification </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q30" name="q30" <?php if ($q30 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0" required>
                        <label for="q30">Not able to explain a problem, even with assistance.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q30" name="q30" <?php if ($q30 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q30">Able to partially explain a problem with maximum assistance.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q30" name="q30" <?php if ($q30 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q30">Able to explain a problem with minimum assistance

                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q30" name="q30" <?php if ($q30 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q30">Independently able to explain a problem without assistance.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q30" name="q30" <?php if ($q30 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q30">Able to provide explanation of problem clearly and accurately.
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Analysis </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q31" name="q31" <?php if ($q31 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0" required>
                        <label for="q31">Not able to organize and analyze gathered requirements and fails to define
                            the factors that contribute to the problem/issue or explain the root of the problem.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q31" name="q31" <?php if ($q31 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q31">Finds difficulty in organizing and analyzing gathered requirements and
                            finds difficulty in explaining the factors that neither contribute to the problem/issue nor
                            explains the root of the problem.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q31" name="q31" <?php if ($q31 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q31">Able to organize and analyze gathered requirements, but does not clearly
                            describe the factors that contribute to the problem/issue or clearly explain the root of the
                            problem.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q31" name="q31" <?php if ($q31 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q31">Able to organize and analyze gathered requirements, describe some factors
                            that contribute to the problem/issue or explain the possible roots of the problem
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q31" name="q31" <?php if ($q31 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q31">Able to organize and analyze gathered requirements, clearly describe the
                            factors that contribute to the problem/issue or explain the root of the problem.
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Application </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q32" name="q32" <?php if ($q32 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0" required>
                        <label for="q32">Not able to apply any new idea or knowledge to a given problem.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q32" name="q32" <?php if ($q32 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q32">Barely able to apply new idea
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q32" name="q32" <?php if ($q32 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q32">Limited ability to apply new idea or knowledge.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q32" name="q32" <?php if ($q32 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q32">Able to apply new idea or knowledge to a given problem with assistance from lecturer
                            or student.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q32" name="q32" <?php if ($q32 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q32">Able to apply new idea or knowledge to a given problem independently.
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                       <b> Decision Making </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q33" name="q33" <?php if ($q33 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0" required>
                        <label for="q33">Not able to make decisions based on comparison and contrast between
                            information, ideas and solutions even with assistance.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q33" name="q33" <?php if ($q33 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q33">Able to make some decisions based on comparison and contrast between
                            information, ideas and available solution with maximum assistance
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q33" name="q33" <?php if ($q33 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q33">Able to make decisions based on comparison and contrast between information,
                            ideas and available solutions with some help
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q33" name="q33" <?php if ($q33 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q33">Able to make decisions based on comparison and contrast between information, ideas
                            and available solutions
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q33" name="q33" <?php if ($q33 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q33">Able to make effective and excellent decisions based on comparison and
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

                    if (isset($_POST['calculateH'])) {
                        echo '    <td colspan="5" style =display:none> 
                            ' . $row["q30"] . " + " . $row["q31"] . " + " . $row["q32"] . " + " . $row["q33"];
                        '
                            </td>
                            </tr>';
                    } else {
                        echo '    <td colspan="5"> 
                        ' . $row["q30"] . " + " . $row["q31"] . " + " . $row["q32"] . " + " . $row["q33"];
                        '
                        </td>
                        </tr>';
                    }
                    $checkTotalH = "SELECT * FROM companyassessment WHERE matricNo=$matricNo";
                    $result = mysqli_query($db, $checkTotalH);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $totalH = $row["totalH"];

                        if (isset($_POST['calculateH'])) {
                            $q30 = $_POST['q30'];
                            $q31 = $_POST['q31'];
                            $q32 = $_POST['q32'];
                            $q33 = $_POST['q33'];
                            $H = "UPDATE ctotalh 
                                SET q30 = '$q30', 
                                q31 = '$q31', 
                                q32 = '$q32',
                                q33 = '$q33'
                                WHERE matricNo = $matricNo";
                            $insert = mysqli_query($db, $H);
                    ?>

                            <td colspan="5"> <?php echo  $q30 .  " + " . $q31 . " + " . $q32 . " + " . $q33; ?>
                            </td>
                </tr>

                <?php } ?>

                <tr>
                    <td><b>Total H %</b></td>

                    <?php
                        if (isset($_POST['calculateH'])) {
                            echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalH"], 2, '.', '');
                            '
                     </td>
                      </tr>';
                        } else {
                            echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalH"], 2, '.', '');
                            '
                     </td>
                      </tr>';
                        }
                        if (isset($_POST['calculateH'])) {
                            $q30 = $_POST['q30'];
                            $q31 = $_POST['q31'];
                            $q32 = $_POST['q32'];
                            $q33 = $_POST['q33'];

                            $totalH = (($q30 + $q31 + $q32 + $q33) * 10) / 16;

                            $roundH = number_format((float)$totalH, 2, '.', '');

                            $sql = "UPDATE companyassessment 
                                        SET totalH = '$roundH' WHERE matricNo = '$matricNo' ";
                            $insert = mysqli_query($db, $sql);
                            $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalH, 2, '.', '') ?>
                        </td>
                </tr>
        <?php }
                    } ?>

        </table>

        <div class="topnav">

            <div class="search-container">
                <button type='submit' name="calculateH" id="calculateH">
                    Calculate</button>
                    <br>
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:18px;padding-left:18px;" href="companyAssessmentTotal.php?matricNo=' . $matricNo . '" 
            class="next">Next </a> </button>'
            ?>
            <br>
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:3px;padding-left:3px;" href="companyAssessment-A.php?matricNo=' . $matricNo . '" 
            class="previous"> Previous</a> </button>'
            ?>
            </div>
        </div>

    </form>
<?php } ?>

</table>

    </div>
</body>

</html>