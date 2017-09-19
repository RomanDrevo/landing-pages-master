<script type="text/javascript">
$( "#target" ).submit(function( event ) {

                //var fullname = $('#full_name').val();
                var full_name = $('#full_name').val();                
				var email = $('#email').val();
                var prefix = $('#prefix').val();
                var phone = $('#phone').val();
                var email_reg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                var numbers = /^[0-9]+$/;

		

                /*init inputs background to white*/
                var error = "";
                $("#myerrors").html(error);
                $("#email").css({ "background": "#fff" });
                $("#full_name").css({ "background": "#fff" });
               
                if (full_name == "" || full_name == null) {
                    var error = "Name can not be empty ";
                    $("#myerrors").html(error);
                    $("#full_name").css({ "background": "rgb(255, 210, 210)" });
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
              
                
                else {
					
		             }
            });
</script>