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
	  <style>
	  #container{
		  margin-top:120px;
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
  </style>
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
	  
	  <!------------Button eddnote and edit ---------->
	  
	    <div class="container" id="container">
			<div class="row">
			 <div class="col-md-offset-3 col-md-6">
				 <div class="buttons">
				 <button type="button" id="addNote" class="btn btn-info btn-lg">Add note</button> 
				 <button type="button" id="edit" class="btn btn-info btn-lg pull-right">Done</button> 
				 <button type="button" id="done" class="btn btn-info btn-lg pull-right">Edit</button> 
				 <button type="button" id="allNote" class="btn btn-info btn-lg">All note</button> 
				 </div>
				 <div id="notePad">
				  <textarea rows="10"></textarea>
				 </div>
				 <div class="notes">
				  <!--Ajax code call to php file-->
				 </div>
			 </div>
			</div>
	    </div>
	  
	  
	  
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
	  