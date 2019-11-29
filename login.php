<?php

 //<!--start session-->
  session_start();
  

//<!-------Check user input----------->

//<!-------Define error message----------->


 $missignUsername = '<p>Please enter a username</p>';
 $missignEmail = '<p>Please enter your email address</p>';
 $invalidEmail = '<p>Please enter a email valid</p>';
 $missignPassword = '<p>Please enter a password</p>';
 $invalidPassword = '<p>Your password should be at last 6 caracters long and include one capital and one number</p>';
 $differentPassword = '<p>Password don\'t match</p>';
 $Password2 = '<p>Please confirm your password</p>';


//<!------Get username, email, password, password----------->
        //Get username
    if(!isset($POST["username"])){
		$errors .= $missingUsername;
		
	}else{
		filter_var($POST["username"], FILTER_SANITIZE_STRING);
	}
    
    //Get email
    if(!isset($POST["email"])){
		$errors .= $missingEmail;
	}else{
		filter_var($POST["email"], FILTER_SANITIZE_EMAIL);
		    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors .= $invalidEmail;
			
		}

    //Get password
 
     if(!isset($POST["password"])){
		 $errors .= $missingPassword;
	 }elseif((strlen($POST["password"])>6
			  and preg_match('/[A-Z]/', $POST["password"])
			  and preg_match('/[0-9]/',$POST["password"]))){
		 
		 		$errors .=invalidPassword;
	 }else{
		 
		 		$password = filter_var($POST["password"], FILTER_SANITIZE_STRING);
		            if(!isset($POST["password2"])){
						$errors .=$missingPassword2;
					}else{
						$password2 = filter_var($POST["password2"], FILTER_SINITIZE_STRING);
						   if($password! == $password2){
							   $errors .= $differentPassword;
						   }
					}
	 }
			  
			  
			  
			  if($errors){
				  $resultMessage = '<div class=" alert alert-danger">' . $errors '</div>';
				   echo $resultMessage;
			  }
			  
			  
			  
			  
			  
			  
			  
			  
     

















































?>