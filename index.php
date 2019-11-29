<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	  <title>Online Note</title>
	  <link rel="stylesheet" href="notes.css"> 
	  <link href="https://fonts.googleapis.com/css?family=Arvo|Open+Sans&display=swap" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
   
  </head>
  <body>
   
	  <nav class="navbar navbar-custom navbar-fixed-top">
	   <div class="container-fluid">
		   <div class="navbar-header">
			   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
				  <span class="sr-only">toggle navigation</span> 
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
			   </button>
		     <a class="navbar-brand" href="#">Online Note</a>
		   </div>
		   
		   <div class="collapse navbar-collapse" id="navbarCollapse">
			   <ul class="nav navbar-nav">
				   <li class="active"><a href="#">Home</a></li>
				   <li><a href="#">Help</a></li>
				   <li><a href="#">Contact</a></li>
			   </ul>
			    <ul class="nav navbar-nav pull-right">
				   <li><a href="#loginModal" data-toggle="modal">Login</a></li>
			   </ul>
		   
		   </div>
		  
	   </div>
	  </nav> 
	  
	  <!--Jumbotron--with--sign up--button-->
	  
	    <div class="jumbotron" id="myContainer">
	  		<h1>Online Note</h1>
			<p>Your note you wherever you go</p>
			<p>Easy to uses, protect all your notes!</p>
			<button type="button" class="btn btn-lg green signup" data-target="#signupModal" data-toggle="modal">Sign-up-It's-Free</button>
	    </div>
	  
	  
	  		<!-Login form-->
	          <form method="post" id="loginForm">
				  <div class="modal" id="loginModal" role="dialog" aria-labelledby="#myModalLabel" aria-hidden="true">
	             <div class="modal-dialog">
		         <div class="modal-content">
		        <div class="modal-header">
			     <button class="close" data-dismiss="modal">&times;</button>
			     <h4 id="myModalLabel">Login :</h4>
		       </div>	
		     <div class="modal-body">
				 <div id="loginMessage"></div>
				 <div class="form-group">
				  <label for="E-mail" class="sr-only">E-mail:</label>
				  <input class="form-control" type="email" name="loginEmail" id="email" placeholder="Email Address" maxlength="50">
			  </div>
				 <div class="form-group">
				  <label for="Password" class="sr-only">Password:</label>
				  <input class="form-control" type="password" name="loginPassword" id="password" placeholder="Enter Password" maxlength="30">
			  </div>
				 <div class="check box">
				   <label>
					 <input type="checkbox" name="rememberme" id="rememberme">
					   Remember me
				   </label>
					 <a class="pull-right" style="cursor:pointer" data-dismiss="modal" data-target="#forgotpassword" data-toggle="modal">Forgot password</a>
				 </div>
		     </div>	
		     <div class="modal-footer">
			 <input class="btn btn-success" type="submit" name="signup" value="Login">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			 <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">Register</button>
		     </div>	
	         </div> 
	        </div>	
	          </div> 
		  </form>
	  
	  		<!------Sign up form-------->
	  
	          <form method="post" id="signupform">
				  <div class="modal" id="signupModal" role="dialog" aria-labelledby="#myModalLabel" aria-hidden="true">
	             <div class="modal-dialog">
		         <div class="modal-content">
		        <div class="modal-header">
			     <button class="close" data-dismiss="modal">&times;</button>
			     <h4 id="myModalLabel">Sign up today start using our Online Note App :</h4>
		       </div>	
		     <div class="modal-body">
			  <div id="signupMessage"></div> 
			  <div class="form-group">
				  <label for="username" class="sr-only">Username:</label>
				  <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
			  </div>
				 <div class="form-group">
				  <label for="E-mail" class="sr-only">E-mail:</label>
				  <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
			  </div>
				 <div class="form-group">
				  <label for="Password" class="sr-only">Password:</label>
				  <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" maxlength="30">
			  </div>
				  <div class="form-group">
				  <label for="password2" class="sr-only">Confirm password:</label>
				  <input class="form-control" type="password" name="confirmPassword" id="password2" placeholder="Confirm password" maxlength="30">
			  </div>
		     </div>	
		     <div class="modal-footer">
			 <input class="btn btn-info" type="submit" name="signup" value="Sign up">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		     </div>	
	         </div> 
	        </div>	
	          </div> 
		  </form>
	  
	  		<!------Forgot password form------>
	  
	  			 <form method="post" id="forgotpasswordForm">
				  <div class="modal" id="forgotpassword" role="dialog" aria-labelledby="#myModalLabel" aria-hidden="true">
	             <div class="modal-dialog">
		         <div class="modal-content">
		        <div class="modal-header">
			     <button class="close" data-dismiss="modal">&times;</button>
			     <h4 id="myModalLabel">Forgot password ? Please enter your email address :</h4>
		       </div>	
		     <div class="modal-body">
			  <div id="forgotpasswordMessage"></div> 
			 <div class="form-group">
				  <label for="E-mail" class="sr-only">E-mail:</label>
				  <input class="form-control" type="email" name="forgotpassword" id="email" placeholder="Email Address" maxlength="50">
			  </div>
		     </div>		 
		     <div class="modal-footer">
			 <input class="btn btn-success" type="submit" name="signup" value="Submit">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		     </div>	
	         </div> 
	        </div>	
	          </div> 
		  </form>
	  
	 
	  <div class="footer">
		  <div class="container">
		  <p>iTech-developer.com Copyright &cong; 2018-<?php $today = date("Y"); echo $today ?></p>
		  </div>
	  
	  </div>
	  
	  
	  
             

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="index.js"></script>
  </body>