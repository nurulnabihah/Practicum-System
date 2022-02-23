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

    </script>

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
        <li><b><i><a style="font-size:16px" href="uumPage.php"> PAMS </a></i></b></li>
            <li><a href="uumPage.php">HOME</a></li>
            <li><a class="active" href="uumAssessment.php">ASSESSMENT</a></li>
            <li><a href="login.php">LOGOUT</a></li>
        </ul>
        <ul>
            <?php
            echo'
            <li><a class="active" href="uumAssessment-A.php?matricNo=' . $matricNo . '">SECTION A</a></li>
            <li><a href="uumAssessment-B.php?matricNo=' . $matricNo . '">SECTION B</a></li>
            <li><a href="uumAssessment-C.php?matricNo=' . $matricNo . '">SECTION C</a></li>
            <li><a href="uumAssessmentTotal.php?matricNo=' . $matricNo . '">TOTAL</a></li>
            '; ?>
        </ul>
        <div class="container1">
            <p class="ex1">
                This evaluation contributes 60% of the total marks for practicum.
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
                        SECTION A: PROJECT PRESENTATION (20%)</p>
            </div>
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
                        <td colspan="6" style="text-align: center;">Verbal Communication (10%)
                        </td>
                    </tr>

                    <?php
                    

                    $result = mysqli_query($db, "INSERT INTO uumassessment (matricNo,totalA,totalB,
                    totalC,totalD,totalE,totalF,totalG,totalH,totalI,totalJ,totalK,grandTotal)
                    VALUES ('$matricNo', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','0')");

                    $result = mysqli_query($db, "INSERT INTO totala (matricNo,q1,q2,q3,q4,q5,q6,q7,q8,q9)
                    VALUES ('$matricNo', '0', '0', '0', '0', '0', '0', '0', '0', '0')");

                    $checkA = "SELECT * FROM totala WHERE matricNo=$matricNo";
                    $result = mysqli_query($db, $checkA);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $q1 = $row["q1"];
                        $q2 = $row["q2"];
                        $q3 = $row["q3"];
                        $q4 = $row["q4"];
                        $q5 = $row["q5"];
                        $q6 = $row["q6"];
                        $q7 = $row["q7"];
                        $q8 = $row["q8"];
                        $q9 = $row["q9"];
                    ?>

                        <tr>
                            <td>
                                Purpose of presentation
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q1">Incomprehensible </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q1">Vague
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q1">Moderately clear
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '3') {
                                                                            echo 'checked';
                                                                        } ?>value="3">
                                <label for="q1">Clear
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q1" name="q1" <?php if ($q1 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q1">Very clear
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Content
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q2">No grasp of subject matter
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q2">Lack of understanding of subject matter
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q2">Understand some of the subject matter
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q2">Understand most of the subject matter
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q2" name="q2" <?php if ($q2 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q2">Fully understand the subject matter
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Clear delivery of ideas
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q3">Not able to deliver ideas clearly and require major improvements
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q3">Able to deliver ideas and require further improvements
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q3">Able to deliver some ideas and require minor improvements
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q3">Able to deliver ideas fairly clearly
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q3" name="q3" <?php if ($q3 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q3">Able to deliver various ideas with great clarity
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Confident delivery of ideas
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q4" name="q4" <?php if ($q4 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q4">Not able to deliver ideas confidently </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q4" name="q4" <?php if ($q4 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q4">Able to deliver ideas with limited confidence and require further improvements.
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q4" name="q4" <?php if ($q4 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q4">Able to deliver ideas with some confidence but still require minor improvements
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q4" name="q4" <?php if ($q4 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q4">Able to deliver ideas fairly confidently
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q4" name="q4" <?php if ($q4 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q4">Able to deliver ideas confidently
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Effective & articulate delivery of ideas
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q5" name="q5" <?php if ($q5 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q5">Not able to deliver ideas
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q5" name="q5" <?php if ($q5 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q5">Able to deliver ideas
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q5" name="q5" <?php if ($q5 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q5">Able to deliver ideas with limited effect and require further improvements
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q5" name="q5" <?php if ($q5 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q5">Able to deliver ideas fairly effectively and require minor improvements
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q5" name="q5" <?php if ($q5 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q5">Able to deliver ideas effectively and articulately
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Adapt delivery to audience level
                            </td>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q6" name="q6" <?php if ($q6 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q6">Not able to deliver appropriately to the audience level
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q6" name="q6" <?php if ($q6 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q6">Able to deliver ideas with limited appropriateness to the
                                    target audience and require further improvements.
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q6" name="q6" <?php if ($q6 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q6">Able to deliver ideas appropriately to the target audience
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q6" name="q6" <?php if ($q6 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q6">Able to deliver ideas appropriately to the target
                                    audience well
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q6" name="q6" <?php if ($q6 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q6">Able to fully deliver ideas appropriately very well
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Voice & pronunciation
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q7" name="q7" <?php if ($q7 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q7">Mumbles, reading
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q7" name="q7" <?php if ($q7 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q7">Mumbles at certain places, most of the audience has
                                    difficulty in hearing the presentation
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q7" name="q7" <?php if ($q7 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q7">Voice is sometimes low, pronounce some words correctly. Some
                                    of the audience can hear the presentation
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q7" name="q7" <?php if ($q7 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q7">Voice is clear, pronounced words correctly. Most of the
                                    audience can hear the presentation
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q7" name="q7" <?php if ($q7 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q7">Voice is very clear. Pronounced words correctly. Audience can
                                    hear the presentation
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Eye contact
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q8" name="q8" <?php if ($q8 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q8">No eye contact. Reading notes.
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q8" name="q8" <?php if ($q8 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q8">Occasional use of eye contact. Frequently reading notes
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q8" name="q8" <?php if ($q8 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q8">Moderate use of eye contact. Still reads notes

                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q8" name="q8" <?php if ($q8 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q8">Maintains eye contact most of the time. Occasionally refers to notes
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q8" name="q8" <?php if ($q8 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q8">Maintain eye contact with audience, do not refer to notes nor having
                                    notes at hand
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Understand and respond to questions
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q9" name="q9" <?php if ($q9 == '0') {
                                                                            echo 'checked';
                                                                        } ?> value="0" required>
                                <label for="q9">Not able to understand and respond to any question
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q9" name="q9" <?php if ($q9 == '1') {
                                                                            echo 'checked';
                                                                        } ?> value="1">
                                <label for="q9">Partly understand the questions but not able to accurately answer the question
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q9" name="q9" <?php if ($q9 == '2') {
                                                                            echo 'checked';
                                                                        } ?> value="2">
                                <label for="q9">Able to understand and briefly answer questions

                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q9" name="q9" <?php if ($q9 == '3') {
                                                                            echo 'checked';
                                                                        } ?> value="3">
                                <label for="q9">able to respond to questions reasonably well
                                </label>
                            </td>
                            <td style="font-weight:normal">
                                <input type="radio" id="q9" name="q9" <?php if ($q9 == '4') {
                                                                            echo 'checked';
                                                                        } ?> value="4">
                                <label for="q9">Able to fully understand and respond to questions satisfactorily with explanations
                                    and appropriate examples
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td> Sub-total : </td>

                            <?php
                            
                            // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                            global $subTotalA, $totalA, $sql, $q1, $q3, $q2, $q4, $q5, $q6, $q7, $q8, $q9;

                            // Check connection
                            if (!$db) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            if(isset($_POST['calculateA'])){
                                echo '    <td colspan="5" style =display:none> 
                                ' . $row["q1"] . " + " . $row["q2"] . " + " . $row["q3"] . " + " . $row["q4"] . " + "
                                    . $row["q5"] . " + " . $row["q6"] . " + " . $row["q7"] . " + " . $row["q8"] . " + " . $row["q9"];
                                '
                                </td>
                                </tr> ';   
                            }else {
                            echo '    <td colspan="5"> 
                            ' . $row["q1"] . " + " . $row["q2"] . " + " . $row["q3"] . " + " . $row["q4"] . " + "
                                . $row["q5"] . " + " . $row["q6"] . " + " . $row["q7"] . " + " . $row["q8"] . " + " . $row["q9"];
                            '
                            </td>
                            </tr> ';}
                            $checkTotalA = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                            $result = mysqli_query($db, $checkTotalA);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $totalA = $row["totalA"];


                                if (isset($_POST['calculateA'])) {
                                    $q1 = $_POST['q1'];
                                    $q2 = $_POST['q2'];
                                    $q3 = $_POST['q3'];
                                    $q4 = $_POST['q4'];
                                    $q5 = $_POST['q5'];
                                    $q6 = $_POST['q6'];
                                    $q7 = $_POST['q7'];
                                    $q8 = $_POST['q8'];
                                    $q9 = $_POST['q9'];
                                    $A = "UPDATE totala 
                                SET q1 = '$q1', 
                                q2 = '$q2', 
                                q3 = '$q3', 
                                q4 = '$q4', 
                                q5 = '$q5', 
                                q6 = '$q6', 
                                q7 = '$q7', 
                                q8 = '$q8', 
                                q9 = '$q9'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $A);

                            ?>


                                    <td colspan="5"> <?php

                                                        echo  $q1 .  " + " . $q2 . " + " . $q3 . " + " . $q4 . " + " .
                                                            $q5 . " + " . $q6 . " + " . $q7 . " + " . $q8 . " + " . $q9;
                                                        ?>
                                    </td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <td> Total A : </td>

                        <?php
                        if(isset($_POST['calculateA'])){
                            echo '    <td colspan="5" style =display:none>  
                            ' . number_format((float)$row["totalA"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                        }else {
                                echo '    <td colspan="5"> 
                        ' . number_format((float)$row["totalA"], 2, '.', '')  ;'
                     </td>
                      </tr>'; }
                                if (isset($_POST['calculateA'])) {
                                    $q1 = $_POST['q1'];
                                    $q2 = $_POST['q2'];
                                    $q3 = $_POST['q3'];
                                    $q4 = $_POST['q4'];
                                    $q5 = $_POST['q5'];
                                    $q6 = $_POST['q6'];
                                    $q7 = $_POST['q7'];
                                    $q8 = $_POST['q8'];
                                    $q9 = $_POST['q9'];

                                    $totalA = (($q1 + $q2 + $q3 + $q4 +
                                        $q5 + $q6 + $q7 + $q8 + $q9) * 10) /36;

                                        $roundA = number_format((float)$totalA, 2, '.', '');
                                        
                                        $sql = "UPDATE uumassessment 
                                        SET totalA = '$roundA' WHERE matricNo = '$matricNo' ";
                                        $insert = mysqli_query($db, $sql);
                                        $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                        ?>

                            <td colspan="5"><?php echo number_format((float)$totalA, 2, '.', '') ?>
                            </td>
                            </tr>
                        <?php }} ?>
               

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
                    <td colspan="6" style="text-align: center;">Practical - Project demo (10%)

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

                $result = mysqli_query($db, "INSERT INTO totalb (matricNo,q10,q11,q12,q13,q14,q15,q16,q17)
                VALUES ('$matricNo', '0', '0', '0', '0', '0', '0', '0', '0')");

                $checkB = "SELECT * FROM totalb WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkB);
                while ($row = mysqli_fetch_assoc($result)) {
                    $q10 = $row["q10"];
                    $q11 = $row["q11"];
                    $q12 = $row["q12"];
                    $q13 = $row["q13"];
                    $q14 = $row["q14"];
                    $q15 = $row["q15"];
                    $q16 = $row["q16"];
                    $q17 = $row["q17"];
                ?>
                    <tr>
                        <td>
                            Functionality
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q10" name="q10" <?php if ($q10 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q10">Project is not functional
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q10" name="q10" <?php if ($q10 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q10">Less than half of the project is functional
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q10" name="q10" <?php if ($q10 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q10">More than half of the project is functional
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q10" name="q10" <?php if ($q10 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q10">Project is functional but some parts can be improved
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q10" name="q10" <?php if ($q10 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q10">Project is perfectly functional
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Functional Specification
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q11" name="q11" <?php if ($q11 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q11">Design does not include any of the mandatory requirements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q11" name="q11" <?php if ($q11 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q11">Design includes very few mandatory requirements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q11" name="q11" <?php if ($q11 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q11">Design includes only some mandatory requirements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q11" name="q11" <?php if ($q11 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q11">Design includes most of the mandatory requirements
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q11" name="q11" <?php if ($q11 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q11">Design includes all mandatory requirements and suitable nonrequirements
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            System interaction
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q12" name="q12" <?php if ($q12 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q12">Hard to figure out how to even get started
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q12" name="q12" <?php if ($q12 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q12">Hard to use
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q12" name="q12" <?php if ($q12 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q12">Can be used after some repetitive effort to learn
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q12" name="q12" <?php if ($q12 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q12">Easy to use after one or twice repetitive effort to learn
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q12" name="q12" <?php if ($q12 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q12">Intuitive, easy to use without any training
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="3">
                            <b> Aesthetic
                            </b>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q13" name="q13" <?php if ($q13 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q13">There is no clear theme presented; the size, color, and
                                placement of each element did not work together
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q13" name="q13" <?php if ($q13 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q13">There are themes but not consistent
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q13" name="q13" <?php if ($q13 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q13">Themes and interface elements (size, color, and placement) need to be learned
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q13" name="q13" <?php if ($q13 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q13">Themes and interface elements (size, color, and placement) that should work together needs further improvement
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q13" name="q13" <?php if ($q13 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q13">Themes and interface elements (size, color, and placement)
                                work together, creating a clear path to understanding the interface
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal">
                            <input type="radio" id="q14" name="q14" <?php if ($q14 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q14">The interfaces fail to enable users to understand how things
                                will work as it is not consistent (no affordance)
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q14" name="q14" <?php if ($q14 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q14">The interface enables users to guess how things will work
                                where the interface design presents a lot of inconsistencies (slight affordance
                                but only one or two objects)
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q14" name="q14" <?php if ($q14 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q14">The interface enables users to understand how things will
                                work, but users need help to use it as the consistency of the design needs more
                                improvement (some affordance)
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q14" name="q14" <?php if ($q14 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q14">The interface enables users to better understand how things
                                will work, but the consistency in design can be further improved
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q14" name="q14" <?php if ($q14 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q14">The interface enables users to easily understand how things
                                will work, increasing their efficiency by presenting consistent design.
                                (full affordance)
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:normal">
                            <input type="radio" id="q15" name="q15" <?php if ($q15 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q15">Too crowded and no appearance of a layout being designed.
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q15" name="q15" <?php if ($q15 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q15">Complicated layout arrangement with unnecessary features/elements.
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q15" name="q15" <?php if ($q15 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q15">Some layout are inflow, some are not
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q15" name="q15" <?php if ($q15 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q15">Simple layout but not up to professional look and feel
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q15" name="q15" <?php if ($q15 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q15">Simple layout but neat and professional.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Beneficial to organization
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q16" name="q16" <?php if ($q16 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q16">Project is not beneficial
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q16" name="q16" <?php if ($q16 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q16">Less than half of the project is beneficial
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q16" name="q16" <?php if ($q16 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q16">More than half of the project is beneficial
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q16" name="q16" <?php if ($q16 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q16">Project is beneficiall but some parts can be improved
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q16" name="q16" <?php if ($q16 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q16">Project is beneficial to organization
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Ready for implementation
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q17" name="q17" <?php if ($q17 == '0') {
                                                                        echo 'checked';
                                                                    } ?> value="0" required>
                            <label for="q17">Project is not ready to be implemented
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q17" name="q17" <?php if ($q17 == '1') {
                                                                        echo 'checked';
                                                                    } ?> value="1">
                            <label for="q17">Less than half of the project is ready to be implemented
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q17" name="q17" <?php if ($q17 == '2') {
                                                                        echo 'checked';
                                                                    } ?> value="2">
                            <label for="q17">More than half of the project is ready to be implemented
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q17" name="q17" <?php if ($q17 == '3') {
                                                                        echo 'checked';
                                                                    } ?> value="3">
                            <label for="q17">Project is ready to be implemented but some modules can be improved
                            </label>
                        </td>
                        <td style="font-weight:normal">
                            <input type="radio" id="q17" name="q17" <?php if ($q17 == '4') {
                                                                        echo 'checked';
                                                                    } ?> value="4">
                            <label for="q17">Project is ready to be implemented
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td> Sub-total : </td>

                        <?php
                       // connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');
                        global $subTotalB, $totalB, $sql;

                        // Check connection
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        if(isset($_POST['calculateB'])){
                            echo '    <td colspan="5" style =display:none> 
                            ' . $row["q10"] . " + " . $row["q11"] . " + " . $row["q12"] . " + " . $row["q13"] . " + "
                                                        . $row["q14"] . " + " . $row["q15"] . " + " . $row["q16"] . " + " . $row["q17"];
                                                    '
                            </td>
                            </tr>'; } else {
                        echo '    <td colspan="5"> 
                        ' . $row["q10"] . " + " . $row["q11"] . " + " . $row["q12"] . " + " . $row["q13"] . " + "
                                                    . $row["q14"] . " + " . $row["q15"] . " + " . $row["q16"] . " + " . $row["q17"];
                                                '
                        </td>
                        </tr>';}
                        $checkTotalB = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                        $result = mysqli_query($db, $checkTotalB);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalB = $row["totalB"];

                            if (isset($_POST['calculateB'])) {
                                $q10 = $_POST['q10'];
                                $q11 = $_POST['q11'];
                                $q12 = $_POST['q12'];
                                $q13 = $_POST['q13'];
                                $q14 = $_POST['q14'];
                                $q15 = $_POST['q15'];
                                $q16 = $_POST['q16'];
                                $q17 = $_POST['q17'];
                                $B = "UPDATE totalb 
                                SET q10 = '$q10', 
                                q11 = '$q11', 
                                q12 = '$q12', 
                                q13 = '$q13', 
                                q14 = '$q14', 
                                q15 = '$q14', 
                                q16 = '$q16', 
                                q17 = '$q17'
                                WHERE matricNo = $matricNo";
                                $insert = mysqli_query($db, $B);
                        ?>


                                <td colspan="5"> <?php echo  $q10 .  " + " . $q11 . " + " . $q12 . " + " . $q13 . " + " .
                                                        $q14 . " + " . $q15 . " + " . $q16 . " + " . $q17; ?>
                                </td>
                    </tr>

                <?php } ?>

                <tr>
                    <td> Total B :
                    </td>
                    <?php
                    if(isset($_POST['calculateB'])){
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalB"], 2, '.', '')  ;'
                     </td>
                      </tr>'; } else {
                            echo '    <td colspan="5"> 
                            ' . number_format((float)$row["totalB"], 2, '.', '')  ;'
                     </td>
                      </tr>';}

                            if (isset($_POST['calculateB'])) {
                                $q10 = $_POST['q10'];
                                $q11 = $_POST['q11'];
                                $q12 = $_POST['q12'];
                                $q13 = $_POST['q13'];
                                $q14 = $_POST['q14'];
                                $q15 = $_POST['q15'];
                                $q16 = $_POST['q16'];
                                $q17 = $_POST['q17'];

                                $totalB = (($q10 + $q11 + $q12 + $q13 +
                                    $q14 + $q15 + $q16 + $q17) * 10) / 32;

                                    $roundB = number_format((float)$totalB, 2, '.', '');
                    
                                    $sql = "UPDATE uumassessment 
                                    SET totalB = '$roundB' WHERE matricNo = '$matricNo' ";
                                    $insert = mysqli_query($db, $sql);
                                    $sql2 = "UPDATE student
                                    SET status = 'Unconfirmed', feedback=' ' WHERE studMatricNo = '$matricNo' ";
                                    $insert2 = mysqli_query($db, $sql2);
                    ?>

                        <td colspan="5"><?php echo number_format((float)$totalB, 2, '.', '') ?>
                        </td>
                    <?php } ?>
                </tr>

            <?php 
                        }
            ?>

            </table>

            <div class="topnav">

                <div class="search-container">
                    <button type='submit' name="calculateB" id="calculateB">
                        Calculate</button>
                        <br>
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:18px;padding-left:18px;" href="uumAssessment-B.php?matricNo=' . $matricNo . '" 
            class="next">Next</a> </button>'
            ?>
                </div>
               
            </div>
        </form>
    <?php } ?>
    <div class="topnav">

    </div>
    </div>
</body>
</html>