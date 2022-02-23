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

    <title>Register</title>

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
        height: 120vh;
    }

    form {
        border: 0px solid #f1f1f1;
        background-image: linear-gradient(#FFFFFF, #000000);
        width: 500px;
        height: 35em;
        margin: 0 auto;
        text-align: center;
        padding: 50px 0 50px 0;
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

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .row-space {
        -moz-box-pack: justify;
        justify-content: space-between;
    }

    .col-2 {
        width: calc((100% - 0px) / 2);
    }

    button {
        background-color: #FFFFFF;
        color: Black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
    }

    button:hover {
        opacity: 0.8;
    }


    .container {
        padding: 16px;
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
    <li><b><i><a style="font-size:16px"  href="admin page.php">  PAMS  </a></i></b></li>
        <li><a href="admin page.php">HOME</a></li>
        <li><a href="practicumRecord4.php">PREVIOUS RECORD</a></li>
        <li><a class="active" href="register3.php">REGISTER</a></li>
        <li><a href="login.php" >LOGOUT</a></li>
    </ul>

    <div class="wrap-login100">
        <br>
    <form method="post" action="register3.php">
    <?php echo display_error(); ?>
        <form class="login100-form validate-form">
            <span class="login100-form-logo">
                <i class="zmdi zmdi-landscape"></i>
            </span>

            <span class="login100-form-title p-b-34 p-t-27" style="color:Black;">
                REGISTER<br>
            </span>

           
            <select id="position" name="position" required>
                <option value="admin">Admin</option>
                <option value="uum" >UUM Supervisor</option>
                <option value="company" >Company Supervisor</option>
                <option value="committe" >Committe</option>
            </select>

            <div class="wrap-input100 validate-input" data-validate="Enter username" >
                <input class="input100" type="text" name="username" placeholder="Username" id="username" value="<?php echo $username; ?>" required>
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password" required>
                <input class="input100" type="password" name="password" placeholder="Password" id="password" required>
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter confirm password" >
                <input class="input100" type="password" name="cPassword" placeholder="Confirm Password" required>
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            
                    <div class="wrap-input100 validate-input" data-validate="Enter first name" >
                        <input class="input100" type="text" name="fName" placeholder="First Name" required>
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                
                
                    <div class="wrap-input100 validate-input" data-validate="Enter last name" >
                        <input class="input100" type="text" name="lName" placeholder="Last Name" required>
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
               
            <div class="wrap-input100 validate-input" data-validate="Enter Email" >
                <input class="input100" type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter company/school name" >
                <input class="input100" type="text" name="csName" placeholder="Company/School Name" required>
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter phone no" >
                <input class="input100" type="text" name="phoneNo" placeholder="Phone Number" required>
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            <div class="row row-space">
                <div class="col-2">
                    <div class="container-login100-form-btn" style="color:White;">
                        <button class="login100-form-btn" name="register_btn">
                            SUBMIT
                        </button>
                    </div>
                </div>
                </form>
                <div class="col-2">
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" onclick="admin(this.form)">
                            CANCEL
                        </button>
                    </div>
                </div>
            </div>

        
    </div>

    <script>
    function admin(form){
            
            alert("Registration process is cancelled")
            window.open('admin page.php')
        }
    </script>

</div>
</body>

</html>
