<?php 
session_start();

// connect to database
$config = parse_ini_file('./config.ini');
$db = mysqli_connect($config['server'], $config['username'], $config['password'], $config['dbname']);

if( $db === false ){
	die( "Connection failed: ". mysqli_connect_error()); 
}

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
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
				echo '<p>'.$error.'</p>';
			}
		echo '</div>';
	}
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);

			$_SESSION['user'] = $logged_in_user;
			$_SESSION['success']  = "You are now logged in";
			
			header('location: index.php');		  
		}else {
			array_push($errors, "The username or password you entered is wrong");
		}
	}
}

function isAdmin() {
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function isLoggedIn() {
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
