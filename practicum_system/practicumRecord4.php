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
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(8px);
        height: 100vh;
    }

p.ex1 {
    padding: 80px;
    margin: 10px 10px 10px 10px;
    background-color: #000000;
    color: #FFFFFF;
}
form {
        border: 0px solid #f1f1f1;
        background:#000000;
        width: 1200px;
        height: 28em;
        margin: 0 auto;
        text-align: center;
        padding: 50px 0 50px 0;
    }
table,
th,
td {
    margin-left: 120px;
    margin-top: 20px;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 2px;
}

th {
    text-align: center;
}

#t01 {
    width: 100%;
    background-color: white;
    color: black;
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
}

b:active {
    color: #0099ff;
    background-color: transparent;
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

.topnav .search-container {
    float: center;
    width: 50.33%;
    margin-right: 16px;
    margin-left: 400px;
    margin-top: 10px;
}

.topnav input[type=text] {
    padding: 6px;
    margin-top: 8px;
    margin-right: 0px;
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

form {
    text-align: center;
    margin: 0 auto;

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
</style>

<body>
<div class="blur">
    <ul>
    <li><b><i><a style="font-size:16px"  href="admin page.php">  PAMS  </a></i></b></li>
        <li><a href="admin page.php">HOME</a></li>
        <li><a class="active" href="practicumRecord4.php">PREVIOUS RECORD</a></li>
        <li><a href="register3.php">REGISTER</a></li>
        <li><a href="login.php" >LOGOUT</a></li>
    
    </ul>

    <br>
    <form method="post" action="practicumRecord4.php">
        <div class="container1">
            <br>
            <select style ="width: 230px;" id="linkSession" name="linkSession" required>
                <option value="A201">ACADEMIC SESSION A201</option>
                <option value="A192">ACADEMIC SESSION A192</option>
            </select>
        </div>
        <div class="row row-space">
            <div class="col-2">
                <div class="container-login100-form-btn" style="color:White;">
                    <button class="login100-form-btn" name="display">
                        DISPLAY
                    </button>
                </div>
            
        
                <form action="practicumRecord4.php" method="POST">
                    <input style="width: 500px;font-size: 14px;border: none;" type="text" placeholder="Enter student name or matric number.." name="searchNM">
                   <br> <button type="submit" name="search"><i class="fa fa-search"></i>SEARCH</button>
                </form>
            </div>

            <table id=t01 style="width:80%">
                <tr>
                    <th>Session</th>
                    <th>Matric No</th>
                    <th>Student Name</th>
                    <th>UUM Supervisor Mark (60%)</th>
                    <th>Company Supervisor Mark (40%)</th>
                    <th>Total Marks (100%)</th>
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

                    $query = "SELECT * FROM student WHERE studName LIKE '%$searchNM%'
                    OR studMatricNo='$searchNM' ";
                    $query_run = mysqli_query($db, $query);
                    mysqli_close($db);
                    while ($row = mysqli_fetch_array($query_run)) {
                        echo '
                <tr>
                 <td>' . $row["session"] . '</td>
                <td>' . $row["studMatricNo"] . '</td>
                <td>' . $row["studName"] . '</td>
                <td>' . $row["uumMarks"] . '</td>
                <td>' . $row["companyMarks"] . '</td>
                <td>' . $row["totalMarks"] . '</td>
               </tr>
               ';
                    }
                }


                if (isset($_POST['display'])) {
                    session();
                }

                function session()
                {
                    global $db, $i;
                    $linkSession = $_POST['linkSession'];
                    if ($linkSession == 'A201') {

                        $query = "SELECT * FROM student WHERE session='A201'";
                        $result = mysqli_query($db, $query);
                        mysqli_close($db);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '
                <tr>
                <td>' . $row["session"] . '</td>
                <td>' . $row["studMatricNo"] . '</td>
                <td>' . $row["studName"] . '</td>
                <td>' . $row["uumMarks"] . '</td>
                <td>' . $row["companyMarks"] . '</td>
                <td>' . $row["totalMarks"] . '</td>
               </tr>
               ';
                        }
                        $i++;
                    } else  {

                        $query = "SELECT * FROM student WHERE session='A192'";
                        $result = mysqli_query($db, $query);
                        mysqli_close($db);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '
                <tr>
                <td>' . $row["session"] . '</td>
                <td>' . $row["studMatricNo"] . '</td>
                <td>' . $row["studName"] . '</td>
                <td>' . $row["uumMarks"] . '</td>
                <td>' . $row["companyMarks"] . '</td>
                <td>' . $row["totalMarks"] . '</td>
               </tr>
               ';
                        }
                        $i++;
                    } 
                }
                ?>

            </table>
            </div>

        </div>
    </form>

    </div>
</body>

</html>