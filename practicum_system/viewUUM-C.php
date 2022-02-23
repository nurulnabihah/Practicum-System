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
            <li><a href="viewUUM-B.php?matricNo=' . $matricNo . '">SECTION B</a></li>
            <li><a class="active" href="viewUUM-C.php?matricNo=' . $matricNo . '">SECTION C</a></li>
            <li><a href="viewUUMTotal.php?matricNo=' . $matricNo . '">TOTAL</a></li>
            '; ?>
        </ul>

        <div class="container1">
            <p class="ex1">
                SECTION C: PROJECT ASSESSMENT (20%)<br>
                Written Communication
            </p>
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
                <td colspan="6" style="text-align: center;">Proposal (4%)
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
            
            $checkH = "SELECT * FROM totalh WHERE matricNo=$matricNo";
            $result = mysqli_query($db, $checkH);
            while ($row = mysqli_fetch_assoc($result)) {
                $q40 = $row["q40"];
                $q41 = $row["q41"];
                $q42 = $row["q42"];
                $q43 = $row["q43"];
                $q44 = $row["q44"];
                $q45 = $row["q45"];
            ?>

                <tr>
                    <td>
                       <b> Project Title </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q40" name="q40" <?php if ($q40 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0">
                        <label for="q40">Incomprehensible </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q40" name="q40" <?php if ($q40 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q40">Vague and not relevant
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q40" name="q40" <?php if ($q40 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q40">Moderately clear and relatively irrelevant
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q40" name="q40" <?php if ($q40 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q40">Clear but lack relevance
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q40" name="q40" <?php if ($q40 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q40"> Very clear and relevant to the field of IT and organization’s need
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                       <b> Problem Statement, Significance of the Study </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q41" name="q41" <?php if ($q41 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0">
                        <label for="q41">Problem is vaguely stated. No justification between purpose
                            and problem/ opportunity. The project is not significant
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q41" name="q41" <?php if ($q41 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q41">Problem is too broad. Lack of justification between purpose
                            and problem/ opportunity. The project is not significant
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q41" name="q41" <?php if ($q41 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q41">Problem is stated. Justification between purpose and problem/
                            opportunity is not clear. The project lack significance
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q41" name="q41" <?php if ($q41 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q41">Problem are stated and justified but one or more are not
                            stated in a clear and concise manner. The project is significant but are not
                            highlighted clearly
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q41" name="q41" <?php if ($q41 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q41">Problem is stated and justified very clearly. The project is
                            highly significant
                    </td>
                </tr>

                <tr>
                    <td>
                       <b> Objectives </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q42" name="q42" <?php if ($q42 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0">
                        <label for="q42">Objectives are not clearly stated
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q42" name="q42" <?php if ($q42 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q42">Objectives are not aligned with stated problem
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q42" name="q42" <?php if ($q42 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q42">Objectives are stated but there is lack of coherence to the
                            stated problem
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q42" name="q42" <?php if ($q42 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q42">Objectives are stated but one or more are not stated in a
                            clear and concise manner
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q42" name="q42" <?php if ($q42 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q42">Manageable numbers of objectives that is clear and aligned
                            with the stated problem
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                       <b> Scope </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q43" name="q43" <?php if ($q43 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0">
                        <label for="q43">Not relevant and do not fulfill Practicum requirements
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q43" name="q43" <?php if ($q43 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q43">Too small/broad and do not fulfill the Practicum requirements
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q43" name="q43" <?php if ($q43 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q43">Manageable scope but not viable for Practicum requirements

                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q43" name="q43" <?php if ($q43 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q43">Fulfill Practicum requirements but need some improvement
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q43" name="q43" <?php if ($q43 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q43">Manageable, viable, relevant scope and fulfill Practicum requirements
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                       <b>Methodology </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q44" name="q44" <?php if ($q44 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0">
                        <label for="q44">Not written
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q44" name="q44" <?php if ($q44 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q44">Methods for collecting and analyzing requirements are
                            minimally discussed also do not aligned with objectives
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q44" name="q44" <?php if ($q44 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q44">Methods for collecting and analyzing requirements are
                            minimally discussed but aligned with the objectives
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q44" name="q44" <?php if ($q44 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q44">Methods for collecting and analyzing requirements are
                            adequately discussed relative to the research objectives
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q44" name="q44" <?php if ($q44 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q44"> Methods for collecting and analyzing requirements are
                            thoroughly discussed relative to the objectives
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                       <b> Feasibility study </b>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q45" name="q45" <?php if ($q45 == '0') {
                                                                    echo 'checked';
                                                                } ?> value="0">
                        <label for="q45">Not feasible
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q45" name="q45" <?php if ($q45 == '1') {
                                                                    echo 'checked';
                                                                } ?> value="1">
                        <label for="q45">Unclear
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q45" name="q45" <?php if ($q45 == '2') {
                                                                    echo 'checked';
                                                                } ?> value="2">
                        <label for="q45">Moderately feasible
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q45" name="q45" <?php if ($q45 == '3') {
                                                                    echo 'checked';
                                                                } ?> value="3">
                        <label for="q45">Reasonable
                            or student.
                        </label>
                    </td>
                    <td style="font-weight:normal">
                        <input type="radio" id="q45" name="q45" <?php if ($q45 == '4') {
                                                                    echo 'checked';
                                                                } ?> value="4">
                        <label for="q45">Feasible
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
                            ' . $row["q40"] . " + " . $row["q41"] . " + " . $row["q42"] . " + " . $row["q43"] .
                            " + " . $row["q44"] . " + " . $row["q45"];
                        '
                            </td>
                            </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                            ' . $row["q40"] . " + " . $row["q41"] . " + " . $row["q42"] . " + " . $row["q43"] .
                            " + " . $row["q44"] . " + " . $row["q45"];
                        '
                            </td>
                            </tr>';
                    }
                    $checkTotalH = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                    $result = mysqli_query($db, $checkTotalH);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $totalH = $row["totalH"];
?>

            <tr>
                <td><b>Total H % </b></td>

                <?php
                        if (isset($_POST['calculateH'])) {
                            echo '    <td colspan="5" style =display:none> 
                            ' . number_format((float)$row["totalH"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                        } else {
                            echo '    <td colspan="5" style="color:red;"> 
                            ' . number_format((float)$row["totalH"], 2, '.', '')  ;'
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
        <td colspan="6" style="text-align: center;">Report draft (4%)
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

        $checkI = "SELECT * FROM totali WHERE matricNo=$matricNo";
        $result = mysqli_query($db, $checkI);
        while ($row = mysqli_fetch_assoc($result)) {
            $q46 = $row["q46"];
            $q47 = $row["q47"];
            $q48 = $row["q48"];
        ?>

    <tr>
        <td>
            <b>Completeness </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q46" name="q46" <?php if ($q46 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q46">Incomplete
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q46" name="q46" <?php if ($q46 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q46">Incomplete but the important component is there
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q46" name="q46" <?php if ($q46 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q46">Complete but require minor improvements
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q46" name="q46" <?php if ($q46 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q46">Complete but not well written
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q46" name="q46" <?php if ($q46 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q46">Complete and well written
            </label>
        </td>
    </tr>

    <tr>
        <td>
           <b> Structure </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q47" name="q47" <?php if ($q47 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q47">Not able to write ideas coherently
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q47" name="q47" <?php if ($q47 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q47">Able to write ideas with limited coherence and require major improvements
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q47" name="q47" <?php if ($q47 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q47">Able to write ideas fairly coherently but require minor improvements
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q47" name="q47" <?php if ($q47 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q47">Able to write ideas coherently, yet can be improved
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q47" name="q47" <?php if ($q47 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q47">Able to write ideas with excellent coherence
            </label>
        </td>
    </tr>

    <tr>
        <td>
            <b>Mechanics/ format </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q48" name="q48" <?php if ($q48 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q48">Poorly formatted<br>
                Does not follow any guidelines

            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q48" name="q48" <?php if ($q48 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q48">Formatted but require further improvements <br>
                Reflects minimal knowledge of APA/IEEE guidelines Reflects minimal knowledge of
                APA/IEEE guidelines

            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q48" name="q48" <?php if ($q48 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q48">Formatted with minor improvements <br>
                Reflects incomplete knowledge of APA/IEEE guidelines
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q48" name="q48" <?php if ($q48 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q48">Adequately formatted <br>
                Uses APA/IEEE guidelines with minor violations to cite sources
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q48" name="q48" <?php if ($q48 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q48">Well formatted<br>
                Uses APA/IEEE guidelines accurately and consistently to cite sources
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

                if (isset($_POST['calculateI'])) {
                    echo '    <td colspan="5" style =display:none> 
                            ' . $row["q46"] . " + " . $row["q47"] . " + " . $row["q48"];
                    '
                            </td>
                            </tr>';
                } else {
                    echo '    <td colspan="5" style="color:red;"> 
                            ' . $row["q46"] . " + " . $row["q47"] . " + " . $row["q48"];
                    '
                            </td>
                            </tr>';
                }
                $checkTotalI = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkTotalI);
                while ($row = mysqli_fetch_assoc($result)) {
                    $totalI = $row["totalI"];
?>

    <tr>
        <td><b>Total I % </b></td>
        
        <?php
                    if (isset($_POST['calculateI'])) {
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalI"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                        ' . number_format((float)$row["totalI"], 2, '.', '')  ;'
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
        <td colspan="6" style="text-align: center;">Final report (10%)
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

        $checkJ = "SELECT * FROM totalj WHERE matricNo=$matricNo";
        $result = mysqli_query($db, $checkJ);
        while ($row = mysqli_fetch_assoc($result)) {
            $q49 = $row["q49"];
            $q50 = $row["q50"];
            $q51 = $row["q51"];
            $q52 = $row["q52"];
            $q53 = $row["q53"];
            $q54 = $row["q54"];
            $q55 = $row["q55"];
        ?>

    <tr>
        <td>
           <b> Establishing the project context </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q49" name="q49" <?php if ($q49 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q49">Problem is vaguely stated while objectives are not stated
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q49" name="q49" <?php if ($q49 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q49">Problem is too broad. Objectives are not aligned with stated problem
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q49" name="q49" <?php if ($q49 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q49">Problem is stated but there is lack of coherence between
                purpose, problem/ opportunity and objectives
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q49" name="q49" <?php if ($q49 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q49">Problem and objectives are stated but one or more are not
                stated in a clear and concise manner
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q49" name="q49" <?php if ($q49 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q49">Problem is stated very clearly. Manageable numbers of
                objectives that is clear and aligned with the stated problem
            </label>
        </td>
    </tr>

    <tr>
        <td>
           <b> Appropriate methodology in carrying out the project </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q50" name="q50" <?php if ($q50 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q50">Methods for collecting and analyzing requirements to support
                project objectives are not discussed
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q50" name="q50" <?php if ($q50 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q50">Methods for collecting and analyzing requirements are wrongly
                scussed relative to the project objectives
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q50" name="q50" <?php if ($q50 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q50">Methods for collecting and analyzing requirements are
                minimally discussed relative to the project objectives
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q50" name="q50" <?php if ($q50 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q50">Methods for collecting and analyzing requirements are
                adequately discussed relative to the project objectives
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q50" name="q50" <?php if ($q50 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q50">Methods for collecting and analyzing requirements are
                thoroughly discussed relative to the project objectives
            </label>
        </td>
    </tr>

    <tr>
        <td>
           <b> Discussion, conclusion, implication & recommendation </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q51" name="q51" <?php if ($q51 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q51">Discussion and conclusions are not presented<br>
                limitation and recommendation are not presented
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q51" name="q51" <?php if ($q51 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q51">Discussion and conclusions are unclear <br>
                Limitation and recommendation are unclear
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q51" name="q51" <?php if ($q51 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q51">Discussion and conclusions are presented but less clear, irrelevant to objectives <br>
                Limitation and recommendation are presented but less clear
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q51" name="q51" <?php if ($q51 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q51">Discussion, conclusions, limitation and recommendation are
                moderately presented
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q51" name="q51" <?php if ($q51 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q51">Effective discussion and conclusions <br>
                Limitation and recommendation are clearly presented
            </label>
        </td>
    </tr>

    <tr>
        <td>
           <b> Report organization and structure </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q52" name="q52" <?php if ($q52 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q52">The organization is problematic or nonexistent
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q52" name="q52" <?php if ($q52 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q52">The organization is unclear or ineffective
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q52" name="q52" <?php if ($q52 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q52">The organization is not clear or does not follow the required report structure
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q52" name="q52" <?php if ($q52 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q52">The organization is clear but containing minor problems
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q52" name="q52" <?php if ($q52 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q52">Well organized
            </label>
        </td>
    </tr>

    <tr>
        <td>
           <b> Graphics (charts, tables, graphs) </br>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q53" name="q53" <?php if ($q53 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q53">Diagrams and illustrations are not used to clarify the content
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q53" name="q53" <?php if ($q53 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q53">Diagrams and illustrations are neither neat nor entirely
                accurate and they don’t add much to the content
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q53" name="q53" <?php if ($q53 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q53">Diagrams and illustrations are somewhat accurate though do
                not add q53 to the content
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q53" name="q53" <?php if ($q53 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q53">Diagrams and illustrations are accurate
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q53" name="q53" <?php if ($q53 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q53">All diagrams and illustrations are neat, accurate and add
                understanding to the content
            </label>
        </td>
    </tr>

    <tr>
        <td>
            <b>Mechanics (punctuations, grammar, spelling) </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q54" name="q54" <?php if ($q54 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q54">Poorly formatted
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q54" name="q54" <?php if ($q54 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q54">Formatted but require major improvements
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q54" name="q54" <?php if ($q54 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q54">Formatted with minor improvements
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q54" name="q54" <?php if ($q54 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q54">Adequately formatted
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q54" name="q54" <?php if ($q54 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q54">Well formatted
            </label>
        </td>
    </tr>

    <tr>
        <td>
            <b> References </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q55" name="q55" <?php if ($q55 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q55">Does not follow any guidelines
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q55" name="q55" <?php if ($q55 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q55">Reflects minimal knowledge of APA/IEEE guidelines
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q55" name="q55" <?php if ($q55 == '2') {
                                                        echo 'checked';
                                                    } ?> value="2">
            <label for="q55">Reflects incomplete knowledge of APA/IEEE guidelines
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q55" name="q55" <?php if ($q55 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q55">Uses APA/IEEE guidelines with minor violations to cite sources
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q55" name="q55" <?php if ($q55 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q55">Uses APA/IEEE guidelines accurately and consistently to cite sources
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

                if (isset($_POST['calculateJ'])) {
                    echo '    <td colspan="5" style =display:none> 
                            ' . $row["q49"] . " + " . $row["q50"] . " + " . $row["q51"] . 
                            " + " . $row["q52"] . " + " . $row["q53"] . " + " . $row["q54"]
                            . " + " . $row["q55"];
                    '
                            </td>
                            </tr>';
                } else {
                    echo '    <td colspan="5" style="color:red;"> 
                            ' . $row["q49"] . " + " . $row["q50"] . " + " . $row["q51"] . 
                            " + " . $row["q52"] . " + " . $row["q53"] . " + " . $row["q54"]
                            . " + " . $row["q55"];
                    '
                            </td>
                            </tr>';
                }
                $checkTotalJ = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkTotalJ);
                while ($row = mysqli_fetch_assoc($result)) {
                    $totalJ = $row["totalJ"];
?>

    <tr>
        <td><b>Total J % </b></td>
        
        <?php
                    if (isset($_POST['calculateJ'])) {
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalJ"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                        ' . number_format((float)$row["totalJ"], 2, '.', '')  ;'
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
        <td colspan="6" style="text-align: center;">Log book (2%)
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

        $checkK = "SELECT * FROM totalk WHERE matricNo=$matricNo";
        $result = mysqli_query($db, $checkK);
        while ($row = mysqli_fetch_assoc($result)) {
            $q56 = $row["q56"];
        ?>

    <tr>
        <td>
           <b> Completeness </b>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q56" name="q56" <?php if ($q56 == '0') {
                                                        echo 'checked';
                                                    } ?> value="0">
            <label for="q56">Incomplete
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q56" name="q56" <?php if ($q56 == '1') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q56">Less than half are complete
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q56" name="q56" <?php if ($q56 == '2') {
                                                        echo 'checked';
                                                    } ?> value="1">
            <label for="q56">More than half are complete
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q56" name="q56" <?php if ($q56 == '3') {
                                                        echo 'checked';
                                                    } ?> value="3">
            <label for="q56">Complete but not detailed
            </label>
        </td>
        <td style="font-weight:normal">
            <input type="radio" id="q56" name="q56" <?php if ($q56 == '4') {
                                                        echo 'checked';
                                                    } ?> value="4">
            <label for="q56">Complete and reasonably detailed to the level of Practicum report
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

                if (isset($_POST['calculateK'])) {
                    echo '    <td colspan="5" style =display:none> 
                            ' . $row["q56"];
                    '
                            </td>
                            </tr>';
                } else {
                    echo '    <td colspan="5" style="color:red;"> 
                            ' . $row["q56"];
                    '
                            </td>
                            </tr>';
                }
                $checkTotalK = "SELECT * FROM uumassessment WHERE matricNo=$matricNo";
                $result = mysqli_query($db, $checkTotalK);
                while ($row = mysqli_fetch_assoc($result)) {
                    $totalK = $row["totalK"];
?>

    <tr>
        <td><b>Total K % </b></td>
        
        <?php
                    if (isset($_POST['calculateK'])) {
                        echo '    <td colspan="5" style =display:none> 
                        ' . number_format((float)$row["totalK"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    } else {
                        echo '    <td colspan="5" style="color:red;"> 
                        ' . number_format((float)$row["totalK"], 2, '.', '')  ;'
                     </td>
                      </tr>';
                    }

                }
    ?>
    </table>

    <div class="topnav">

        <div class="search-container">
           
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:18px;padding-left:18px;" href="viewUUMTotal.php?matricNo=' . $matricNo . '" 
            class="next">Next </a> </button>'
            ?>
            <br>
                        <?php
            echo '  <button> <a style="text-decoration:none;color:Black;padding-right:3px;padding-left:3px;" href="viewUUM-B.php?matricNo=' . $matricNo . '" 
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