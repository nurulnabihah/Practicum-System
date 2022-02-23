<?php include('functions.php') ?>
<!DOCTYPE html>

<head>
	<title>Login Page</title>
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
		form {
			border: 0px solid #f1f1f1;
			background-image: linear-gradient(#FFFFFF, #000000);
			width: 500px;
			height: 30em;
			margin: 0 auto;
			text-align: center;
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

		button {
			background-color: #FFFFFF;
			color: Black;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
		}

		button:hover {
			opacity: 0.8;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 10px;
		}

		img.avatar {
			width: 15%;
			border-radius: 50%;
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
	<div class="wrap-login100">
		<form method="post" class="login100-form validate-form" action="login.php">
		<?php echo display_error(); ?>
		<span class="login100-form-logo">
				<i class="zmdi zmdi-landscape"></i>
			</span>
			<br>
			<div class="imgcontainer">
				<img src="images/UUM-Logo-1.png" alt="Avatar" class="avatar">
			</div>
			<span class="login100-form-title p-b-34 p-t-27" style="color:Black;font-size:1.3em;"><b>
				PRACTIUM ASSESSMENT<br>
				MANAGEMENT SYSTEM<br><br>
				LOG IN<br><br></b>
			</span>

			<select id="position" name="position" required tabIndex="1" style="width: 120px;">
				<option value="admin">Admin</option>
				<option value="uum">UUM Supervisor</option>
				<option value="company">Company Supervisor</option>
				<option value="committe">Practicum Committee</option>
			</select>
			<div class="wrap-input100 validate-input" data-validate="Enter username">
				<input class="input100" type="text" name="username" placeholder="Username" id="username"
				 required tabIndex="2" autofocus style="padding: 10px;width:270px;border-radius: 8px;">
				<span class="focus-input100" data-placeholder="" id="username"></span>
				
			</div>

			<div class="wrap-input100 validate-input" data-validate="Enter password">
				<input class="input100" type="password" name="password" placeholder="Password" id="password"
				required tabIndex="3" style="padding: 10px;width:270px;border-radius: 8px;">
				<span class="focus-input100" data-placeholder="" id="password"></span>
			</div>



			<div class="container-login100-form-btn" >
				<button class="login100-form-btn" name="login_btn" required tabIndex="4" style="padding: 10px;width:70px;border-radius: 8px;">
					Login
				</button>
			</div>

		</form>
	</div>
<script>
	$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
       $next = $('[tabIndex=1]');        }
        $next.focus() .click();
    }
});
</script>

</div>
</body>
</head>