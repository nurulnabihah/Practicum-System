<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'saujanae_adminPracticumSystem', 'oRK8W$A}gg.(', 'saujanae_practicum_system');

// variable declaration
$username = "";
$email    = "";
$position = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
	sendEmail($email);
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$position = e($_POST['position']);
$username = e($_POST['username']);
$password = sha1($_POST['password']);
$cPassword = sha1($_POST['cPassword']);
$fName = e(isset($_POST['fName']) ? $_POST['fName'] : "");
$lName = e(isset($_POST['lName']) ? $_POST['lName'] : "");
$email = e($_POST['email']); 
$csName = e($_POST['csName']);
$phoneNo = e($_POST['phoneNo']);


	// form validation: ensure that the form is correctly filled
	if (empty($position)) { array_push($errors, "*Please choose position"); }
  if (empty($username)) { array_push($errors, "*Username is required"); }
  if (empty($fName)) { array_push($errors, "*First name is required"); }
  if (empty($lName)) { array_push($errors, "*Last name is required"); }
  if (empty($csName)) { array_push($errors, "*Company or school name is required"); }
  if (empty($email)) { array_push($errors, "*Email is required"); }
  if (empty($phoneNo)) { array_push($errors, "*Phone number is required"); }
  if (empty($password)) { array_push($errors, "*Password is required"); }
  if (empty($cPassword)) { array_push($errors, "*Please confirm your password"); }
  if ($password != $cPassword) {
	array_push($errors, "*The passwords is not match");
  }

//   $_SESSION['success']  = "Successfully registered";
// 			header('location: admin page.php');

	//register user if there are no errors in the form
	if (count($errors) == 0) {
		// $password = md5($password);//encrypt the password before saving in the database

		if ($_POST['position']== 'admin') {
			$query = "INSERT INTO registeruser (username, email, position, password, cPassword, fName, lName, csName, phoneNo) 
					  VALUES('$username', '$email', 'admin', '$password', '$cPassword', '$fName', '$lName', '$csName', '$phoneNo')";
			mysqli_query($db, $query);
			
			
		}elseif ($_POST['position']== 'uum'){
			$query = "INSERT INTO registeruser (username, email, position, password, cPassword, fName, lName, csName, phoneNo) 
					  VALUES('$username', '$email', 'uum', '$password', '$cPassword', '$fName', '$lName', '$csName', '$phoneNo')";
			mysqli_query($db, $query);
				
		}elseif ($_POST['position']== 'company'){
			$query = "INSERT INTO registeruser (username, email, position, password, cPassword, fName, lName, csName, phoneNo) 
					  VALUES('$username', '$email', 'company', '$password', '$cPassword', '$fName', '$lName', '$csName', '$phoneNo')";
			mysqli_query($db, $query);
				
		}else{
			$query = "INSERT INTO registeruser (username, email, position, password, cPassword, fName, lName, csName, phoneNo) 
					  VALUES('$username', '$email', 'committe', '$password', '$cPassword', '$fName', '$lName', '$csName', '$phoneNo')";
			mysqli_query($db, $query);
				
		}
		$_SESSION['success']  = "New user successfully created!!";
		header('location: admin page.php');
		
		// 	$query = "SELECT * FROM registeruser where email =  '$email'" ;
	$to      = $email; // Send email to our user
	$subject = 'UUM Practicum System Verification'; // Give the email a subject 
	$message = '
	  
	Your account has been created, you can login with the following credentials after you have activated your account 
	by pressing the url below.
	  
	------------------------
	Username: '.$username.'
	Password: '.$password.'
	------------------------
	  
	Please click this link to activate your account:
	http://saujanaeclipse.com/practicum_system/login.php?email='.$email.'
	  
	'; // Our message above including the link
						  
	$headers = 'From:practicum_system@saujanaeclipse.com' . "\r\n"; // Set from headers
if(	mail($to, $subject, $message, $headers))
    {
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}// Send our email
	}
}


function sendEmail($useremail) {
    $to      = $useremail; 
    $subject = 'Verification for My.Grocery'; 
    $message = 'http://saujanaeclipse.com/practicum_system/login.php?email='.$useremail; 
    $headers = 'From: noreply@mygrocery.com' . "\r\n" . 
    'Reply-To: '.$useremail . "\r\n" . 
    'X-Mailer: PHP/' . phpversion(); 
    mail($to, $subject, $message, $headers); 
}


// return user array from their username
function getUserById($username){
	global $db;
	$query = "SELECT * FROM registeruser WHERE username=" . $username;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['admin'])) {
		return true;
		header("location:admin page.php");
	}else if (isset($_SESSION['company'])) {
		return true;
		header("location:companyPage.php");
	}else if (isset($_SESSION['uum'])) {
		return true;
		header("location:uumPage.php");
	}else if (isset($_SESSION['comitte'])) {
		return true;
		header("location:comitteePage.php");
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['admin']);
	unset($_SESSION['company']);
	unset($_SESSION['uum']);
	unset($_SESSION['comitte']);
	header("location: login.php");
}

// call the login() function if login_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors, $position;

	// grap form values
    $position = e($_POST['position']);
	$username = e($_POST['username']);
	$password = sha1($_POST['password']);

	// make sure form is filled properly
    if (empty($position)) {
		array_push($errors, "*Please choose position");
	}
	if (empty($username)) {
		array_push($errors, "*Username is required");
	}
	if (empty($password)) {
		array_push($errors, "*Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		//  $password = md5($password);

		$query = "SELECT * FROM registeruser WHERE username='$username' AND position='$position' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check user position
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['position'] == 'admin') {

				$_SESSION['admin'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin page.php');		  
			}elseif ($logged_in_user['position'] == 'uum'){
				$_SESSION['uum'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: uumPage.php');
			}elseif ($logged_in_user['position'] == 'company'){
				$_SESSION['company'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: companyPage.php');
			}else {
				$_SESSION['committe'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: committeePage.php');
			}
		}else {
		    array_push($errors, "*Wrong username or password");
		}
	}
}

