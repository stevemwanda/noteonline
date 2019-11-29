<?php
//<!--Start session-->
//<!--start session-->
session_start();
require('connection.php');

//<!-------Check user input----------->

//<!-------Define error message----------->


$missingUsername = '<p><strong>Please enter a username</strong</p>';
$missingEmail = '<p><strong>Please enter your email address</strong></p>';
$invalidEmail = '<p><strong>Please enter a email valid</strong></p>';
$missingPassword = '<p><strong>Please enter a password</strong></p>';
$invalidPassword = '<p><strong>Your password should be at last 8 caracters long and include one capital and one number</strong></p>';
$differentPassword = '<p><strong>Password don\'t match</strong></p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';


//<!------Get username, email, password, password----------->
//Get username
if(empty($_POST["username"])){
  $errors .= $missingUsername;
}else{
   filter_var($_POST["username"], FILTER_SANITIZE_STRING);
}

//Get email
if(empty($_POST["email"])){
    $errors .= $missingEmail;
}else{
   $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		 $errors .= $invalidEmail;
 }	

 }
//Get password
if(empty($_POST["password"])){
	$errors .= $missingPassword;
}elseif(!(strlen($_POST["password"])>8
		  and preg_match('/[A-Z]/',$_POST["password"])
		  and preg_match('/[0-9]/',$_POST["password"])
		       )
		       ){
			$errors .= $invalidPassword;
}else{
	$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
	   if(empty($_POST["confirmPassword"])){
		   $errors .= $missingPassword2;
	   }else{
		   $confirmPassword = filter_var($_POST["confirmPassword"], FILTER_SANITIZE_STRING);
		     if($password !== $confirmPassword){
				 $errors .= $differentPassword;
			 }
	   }
}

//if there are any errors print error

if($errors){
$resultMessage = '<div class=" alert alert-danger">' . $errors. '</div>';
echo $resultMessage;
exit;
}

// no errors

//Prepare variable for queries

$username = mysqli_real_escape_string($link, $username);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);

$password = hash('sha256',$password);
			
//if username exist in the table print error
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($link, $sql);
if(!$result){
	echo '<div class="alert alert-danger">Error running the query</div>';
	exit;
}
$results = mysqli_num_rows($result);
if($results){
	echo '<div class="alert alert-danger">That username is already registered. Do you want to log in ?</div>'; 
	exit;
}
//if email exist in the table print error
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if(!$result){
	echo '<div class="alert alert-danger">Error running the query</div>';
	exit;
}
$results = mysqli_num_rows($result);
if($results){
	echo '<div class="alert alert-danger">That email is already registered. Do you want to log in ?</div>'; 
	exit;
}
//Create a unique activation code
$activationkey = bin2hex(openssl_random_pseudo_bytes(16));

// Insert user detail and activation code in the user table

$sql = "INSERT INTO users ( `username`,`email`,`password`,`activation`) VALUES 
('$username','$email','$password','$activationkey')";
$result = mysqli_query($link, $sql);
 if(!result){
	 echo '<div clqss="alert alert-danger">There was an error inserting the users detail in the database</div>';
	 exit; 
	 
 }

//Send the user an email with a link to activation.php code

$message = "Please click on this link to activate your account:\n\n";
$message  .= "http://onlinenote.itech-developer.com/activate.php?email=" .urlencode($email) . "&key=$activationkey";
if(mail($email, 'Confirm your registration', $message , 'From:'.'robsstevejobs@gmail.com')){
			echo '<div class="alert alert-success">Thank you for resgistring ! A confirmation email has been sent to email. Please click on the activate link to activate your account.</div>';
}


	


?>
