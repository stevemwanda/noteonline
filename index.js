//Ajax call for the sign up form
//Once the form is submitted
$("#signupform").submit(function(event){
	//prevent default php processing
	 event.preventDefault();
	//collect user inputs
	 var datatopost = $(this).serializeArray();
	     console.log(datatopost);
//send them to the signup.php usign ajax
		$.ajax({
			url : "signup.php",
			type : "POST",
			data : datatopost,
			success : function(data){
				if(data){
				$("#signupMessage").html(data)
					
				}
				
			},
			
			error : function(){
				$("#signupMessage").html("<div class='alert alert-danger'>There was an error the ajax code. Please try again later </div>");
			}
			
		});
});