<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	  <title>My Note</title>
	  <link rel="stylesheet" href="notes.css"> 
	  <link href="https://fonts.googleapis.com/css?family=Arvo|Open+Sans&display=swap" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
	  <style>
	  #container{
		  margin-top:100px;
		  }
		  #notePad, #done, #allNote {
			  display: none;
		  }
		  
		  .buttons{
			  margin-bottom: 20px;
		  }
		  
		  textarea{
			  width: 100%;
			  max-width: 100%;
			  font-size: 1.2rem;
			  line-height: 1.5em;
			  border-left-width: 20px;
			  border-color: #CA3DD9;
			  background-color: #FBEFFF;
			  color: #CA3DD9;
			  padding: 10px;
		  }
		  
		  tr{
			  cursor: pointer;
		  }
  </style>
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
				   <li><a href="#">Profile</a></li>
				   <li><a href="#">Help</a></li>
				   <li><a href="#">Contact us</a></li>
				   <li class="active"><a href="#">My Notes</a></li>
			   </ul>
			    <ul class="nav navbar-nav pull-right">
				   <li><a href="#">Logged in as <b>username</b></a></li>
				   <li><a href="#">Log out</a></li>
			   </ul>
		   
		   </div>
		  
	   </div>
	  </nav> 
	  
	  <!--Jumbotron--with--sign up--button-->
	  
	    <div class="container" id="container">
			<div class="row">
			 <div class="col-md-offset-3 col-md-6">
				 <h2>General Account Setting</h2>
				 <div class="table-responsive">
				  <table class="table table-hover table-condensed table-bordered" > 
				  <tr data-target="#updateusername" data-toggle="modal">
					<td>Username</td>  
					<td>value</td>  
				 </tr>
				 <tr data-target="#updateemail" data-toggle="modal">
					<td>Email</td>  
					<td>value</td>  
				 </tr>
				 <tr data-target="#updatepassword" data-toggle="modal">
					<td>Password</td>  
					<td>hidden</td>  
				 </tr>
				 </table>	  
				 </div>
			 </div>
			</div>
	    </div>
	              
	             <!--------------Update Username--------------->
	               
	         <form method="post" id="updateusernameForm">
				  <div class="modal" id="updateusername" role="dialog" aria-labelledby="#myModalLabel" aria-hidden="true">
	             <div class="modal-dialog">
		         <div class="modal-content">
		        <div class="modal-header">
			     <button class="close" data-dismiss="modal">&times;</button>
			     <h4 id="myModalLabel">Enter new email :</h4>
		       </div>	
		     <div class="modal-body">
			  <div id="forgotpasswordMessage"></div> 
			 <div class="form-group">
				  <label for="E-mail">Username:</label>
				  <input class="form-control" type="text" name="updateusername" id="username" maxlength="30" value="username value">
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
	  
	       
	            <!---------------Update Email------------->
	              
	        
	         <form method="post" id="updateemailForm">
				  <div class="modal" id="updateemail" role="dialog" aria-labelledby="#myModalLabel" aria-hidden="true">
	             <div class="modal-dialog">
		         <div class="modal-content">
		        <div class="modal-header">
			     <button class="close" data-dismiss="modal">&times;</button>
			     <h4 id="myModalLabel">Edit Email :</h4>
		       </div>	
		     <div class="modal-body">
			  <div id="forgotpasswordMessage"></div> 
			 <div class="form-group">
				  <label for="E-mail">Email:</label>
				  <input class="form-control" type="text" name="updateemail" id="email" maxlength="50" value="email value">
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
	  
	  		  <!-----------------------Update Password-------------------------->
	               
	         <form method="post" id="updatepasswordForm">
				  <div class="modal" id="updatepassword" role="dialog" aria-labelledby="#myModalLabel" aria-hidden="true">
	             <div class="modal-dialog">
		         <div class="modal-content">
		        <div class="modal-header">
			     <button class="close" data-dismiss="modal">&times;</button>
			     <h4 id="myModalLabel">Enter Current and New Password :</h4>
		       </div>	
		     <div class="modal-body">
			  <div id="forgotpasswordMessage"></div> 
			 <div class="form-group">
				  <label for="Currentpassword" class="sr-only">Your current password:</label>
				  <input class="form-control" type="password" name="Currantpassword" id="Currentpassword" maxlength="30" placeholder="Your Current Password">
			  </div>
				 <div class="form-group">
				  <label for="Newpassword" class="sr-only">Enter New password:</label>
				  <input class="form-control" type="password" name="newpassword" id="newpassword" maxlength="30" placeholder="Enter New Password">
			  </div>
				 <div class="form-group">
				  <label for="newpassword2" class="sr-only">Confirm password:</label>
				  <input class="form-control" type="password" name="newpassword2" id="newpassword2" maxlength="30" placeholder="Confirm Password">
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
  </body>
	  