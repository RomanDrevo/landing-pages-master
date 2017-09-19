<script type="text/javascript">
$( "#target" ).submit(function( event ) {

                //var fullname = $('#full_name').val();
                var firstname = $('#first_name').val();
                var lastName = $('#last_name').val();
				var email = $('#email').val();
                var prefix = $('#prefix').val();
                var phone = $('#phone').val();
                var country = $('#country').val();
                var currency = $('#currency').val();				
                var password = $('#password').val();
                var passwordValidate = $('#passwordValidate').val();
                var email_reg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                var numbers = /^[0-9]+$/;

		

                /*init inputs background to white*/
                var error = "";
                $("#myerrors").html(error);
                $("#email").css({ "background": "#fff" });
                $("#first_name").css({ "background": "#fff" });
                $("#last_name").css({ "background": "#fff" });
                $("#prefix").css({ "background": "#fff" });
                $("#phone").css({ "background": "#fff" });
                //$("#formPassword").css({ "background": "#fff" });
               // $("#passwordValidate").css({ "background": "#fff" });
                if (firstname == "" || firstname == null) {
                    var error = "first name can not be empty ";
                    $("#myerrors").html(error);
                    $("#first_name").css({ "background": "rgb(255, 210, 210)" });
                    return false;
                    
                }
				
                else if (lastName == "" || lastName == null) {
                    var error = "last name can not be empty ";
                    $("#myerrors").html(error);
                    $("#last_name").css({ "background": "rgb(255, 210, 210)" });					
                    return false;
                }
				
                else if (email == "" || email == null) {
                    var error = "email can not be empty ";
                    $("#myerrors").html(error);
                    $("#email").css({ "background": "rgb(255, 210, 210)" });
                    return false;
                }
                else if (!email_reg.test(email)) {
                    var error = "Invalid email addresses";
                    $("#email").css({ "background": "rgb(255, 210, 210)" });
                    $("#myerrors").html(error);
                    return false;
                    
                }

                else if (country == "" || country == null) {
                    var error = "please choose a country ";
                    $("#myerrors").html(error);
                    $("#country").css({ "background": "rgb(255, 210, 210)" });
                    return false;
                   
                }
				
				
				else if (phone == "" || phone == null) {
					
                    var error = "please insert your phone ";
                    $("#myerrors").html(error);
                    $("#phone").css({ "background": "rgb(255, 210, 210)" });
                    return false;
                   
                }
				else if (prefix == "" || prefix == null) {
                    var error = "please choose a country ";
                    $("#myerrors").html(error);
                    $("#prefix").css({ "background": "rgb(255, 210, 210)" });
                    return false;
                   
                }
                else if (!numbers.test(phone) ) {
                    var error = "please enter numbers only";
                    $("#myerrors").html(error);
                    $("#prefix").css({ "background": "rgb(255, 210, 210)" });
                    $("#phone").css({ "background": "rgb(255, 210, 210)" });
                    return false;
                    
                }
				else if((''+phone).length < 6){
					var error = "please insert a real number";
                    $("#myerrors").html(error);
                    $("#prefix").css({ "background": "rgb(255, 210, 210)" });
                    $("#phone").css({ "background": "rgb(255, 210, 210)" });
                    return false;
				}
				else if(password !== undefined){
					
				if (password == "" || password == null) {
                    var error = "please insert password";
                    $("#myerrors").html(error);
                    $("#response").fadeIn("slow");
                    $("#password").css({ "background": "rgb(255, 210, 210)" });
                    return false;
}
else if((''+password).length < 6){
					var error = "password needs to be 6 characters minimum";
                    $("#myerrors").html(error);
                    
                    $("#password").css({ "background": "rgb(255, 210, 210)" });
                    return false;
				}
else if (password != passwordValidate) {
                    var error = "password wasent correct";
                    $("#myerrors").html(error);
                    $("#response").fadeIn("slow");
                    $("#passwordValidate").css({ "background": "rgb(255, 210, 210)" });
                    return false;	
}		
				}
              
                
                else {
					
		             }
            });
</script>