<!DOCTYPE html>
<html lang="en">
<?php include "../../../includes/header.php"?>
<?php include "../../../functions/get_url_pearameters.php"?>
<?php include "../../../functions/get_ip_info2.php"?>
<?php include "../../../includes/api_db_connection.php"?><?php $prefixClass="form_input";?><?php $prefixStyle="";?>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<meta charset="utf-8" />
	<title>
		Register Free Account -
		30DayChange		
	</title>
	<meta name="robots" content="noindex, nofollow" />
	<meta name="keywords" content="" />
	<meta name="author" content="Honest Web" />
	<meta name="description" content="" />


	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700|Open+Sans:400,400italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<link href="../commodities/css/main.css" rel="stylesheet">

	


</head>

<body>

<div class="global-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 logo">
				<img src="../commodities/images/besttradingoffers-logo.png" alt="besttradingoffers">
			</div>
		</div>
	</div>
</div>



<div class="container">

	<div class="space hidden-xs"></div>

	<h1 class="header-xl-1 text-center text-uppercase"><span class="hl-blue-1">Well Done, You're almost there</span></h1>
	<div class="steps hidden-xs">
		<div class="step1">
			<div class="step-title text-uppercase">Step 1</div>
			Watch CAREFULLY<br> This Video Tutorial
		</div>
		<div class="step2">
			<div class="step-title text-uppercase">Step 2</div>
			Complete Our<br> QUICK Form
		</div>
		<div class="step3">
			<div class="step-title text-uppercase">Step 3</div>
			Start Your Profit Journey<br> with 30 Day Change!
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="space"></div>

	<div class="videoWrapper">
		<iframe width="100%" height="658" src="http://www.youtube.com/embed/GcN4OVXfh6M?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class="space"></div>

	<div class="steps visible-xs">
		<div class="step1">
			<div class="step-title text-uppercase">Step 1</div>
			Watch CAREFULLY<br> This Video Tutorial
		</div>
		<div class="step2">
			<div class="step-title text-uppercase">Step 2</div>
			Complete Our<br> QUICK Form
		</div>
		<div class="step3">
			<div class="step-title text-uppercase">Step 3</div>
			Start Your Profit Journey<br> with 30 Day Change!
		</div>
		<div class="clearfix"></div>
		<div class="space"></div>
	</div>

	<div class="badges text-center">
		<img src="img/badges.png" class="img-responsive center-block">
	</div>

	<div class="space"></div>

	<div class="text-center">
		<div class="frame-big-red text-uppercase text-center">
			<img src="img/star_red.png"> REMEMBER: 30 DAY CHANGE IS TOTALLY FREE! <?php echo $_POST['name']; ?>
		</div>
	</div>

	<div class="space"></div>

	<div class="custom-italic-1 text-center">We offer free membership for a limited time only!<br>Make over $8400 a day, EVERY DAY!</div>

	<h1 id="up"  class="header-xl-1 text-center text-uppercase hl-red-1">Grab Your License in less than a Minute</h1>


	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">

			<div class="main-block">
				<div class="block-padding">
					<div class="row">
						<div class="col-sm-6"> 
							<ul class="steps">
								<li class="one"><p>Fill in your <strong>valid contact</strong> details and private password</p></li>
								<li class="two"><p class="bottom-padding-md"><strong>Open and fund</strong> your account with the recommended broker so we can connect you to the sophisticated software of 30DayChange.</p></li>
								<li class="three"><p>After you've opened an account you will be directed to the 30DayChange software and you can <strong>start making profits</strong> just like I do.</p></li>
							</ul>
							<div class="dotted-border"></div>
							<p class="text-center">No Credit Card or PayPal Needed <strong>This is 100% FREE!</strong></p>
							<img src="img/no_cc.png" class="img-responsive center-block">
                    <?php 
				
					     $fullname = $_GET['name']; 
						 $name= explode(" ", $fullname);
					     $email = $_GET['email'];
					
				
						  ?>

						</div>
						<style> 
						.input{}
						</style>
						<div class="col-sm-6 text-center">

							
							<div class="signup-form">

								<?php include "../../../includes/formAction.php"?>
								<?php include "../../../includes/hidden_fields.php"?>	
                          <input type="hidden" name="lang"  value='cpl'/>
			             <input type="hidden" name="page_name"  value='free_trade'/>								
								<div class="input">
									<input placeholder="First Name" id="first_name" class="" name="first_name" type="text" value="<?php echo $name[0]; ?>" >								</div>
								<div class="input">
									<input placeholder="Last Name" id="last_name" class="" name="last_name" type="text" value="<?php echo $name[1];?>">								</div>
								<div class="input phone">
								
								<div class="phone-code">
			                           <?php include "../../../includes/prefix.php"?>
									   </div>
									   <div class="phone-number">
                                   <input type="text" name="phone" id="phone"  class="form_input" placeholder="PHONE">
							  </div>
								<div class="clearfix"></div>
								</div>
								<div class="input">
									<input placeholder="Your Email" id="email" name="email" type="text" value="<?php echo $email; ?>">								</div>
								
							<div class="input"><input placeholder="Create a Password" id="password" name="password" type="password" value="">								</div>
								<div class="input"><?php include "../../../includes/country.php"?></div>
								<div class="input">
									<input class="center-block" type="submit" value="Open a Free Account">								</div>
																<input name="_token" type="hidden" value="ioXhk0TJb3kbs0TBB2nXcrv7AbwZFu5Q7ybt5qSi">
																 <p id="myerrors" style="color:red; clear: both;  text-align: center; padding-top: 8px;"></p>
								</form>
							</div>

							
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="space"></div>
					<h3 class="header-sm-2 text-center text-uppercase"><strong>NOTE</strong> - THE FUNDS YOU DEPOSIT BELONG TO YOU AND SERVE AS YOUR WORKING CAPITAL THAT WILL QUADRUPLE IN NO TIME.</h3>
				</div>
				<div>
					<img src="img/extra_benefits.png" class="img-responsive">
				</div>
			</div>

			<div class="space"></div>
			<h1 class="header-lg-1 text-center text-uppercase">Frequently Asked Questions</h1>

			<div class="main-block faq">
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">Who is qualified to use the 30DayChange system?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">Anybody over the age of 18 years old who is looking to make high profits on a daily basis anywhere at any time.</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">How simple is it to use 30DayChange?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">30DC has been meticulously constructed with the newbie trader in mind. The result is a user-friendly system that is easily accessible. Once logging in to the system, you will see a table of currency pairs and financial assets showing the relevant signal for each. No previous experience needed.</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">Do I need to download any software?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">No downloads or any type of additional software is necessary.<br>
						30DC runs on Windows or IOS and can be used on ALL smart phones, tablets and IPad thanks to its fully responsive web interface.</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">How much does 30DayChange cost?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">30DC is completely free for thirty days. Afterwards, a small 3% fee will be deducted from your future earnings.</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">How much money can I make with 30DayChange?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">Normally users who stick to our guidelines average $8467 a day, every day.<br>
						<br>
						If you’re financial goals are bigger than our user’s average of over $8400 and you’re looking to make higher amount daily, then the answer would depend on 2 factors:<br>
						1) The initial deposit you make- the more working capital you have, the easier it is to reach your financial goals.<br>
						2) The amount of trades you make a day- the more winning trades you make, the more profits you will have.
					</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">How do I withdraw my profits?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">Simply contact your brokers via email or telephone with a withdrawal request and within 1-2 business days your requests will be processed.<br>
						We’ve select the best reputable brokers in the industry to work with our software so you can enjoy speedy withdrawals and great support.</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">I have tried trading and failed, why will this be different?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">With 30DC you don’t need be good at trading or know much about it.
						All you need to do is follow the 2 simple instructions the software offers you:<br>
						1) When to place a trade.<br>
						2) Which direction to place the trade.
					</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">In the past I’ve lost money with trading robots, why will this be different?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">30DC is NOT a trading robot but a unique cutting-edge software that helps its users make the right trading decisions which ultimately leads them to generate high profits daily while the users are  still calling the shots and in control of his deposit.</div>
				</div>
				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">What is a 30DayChange business advisor?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">Your business advisor will be your personal guide and assistant on your 30DC journey, available any time, any day.</div>
				</div>

				<div class="question">
					<div class="letter">Q.</div>
					<div class="content">Why do I need a brokerage account?</div>
				</div>
				<div class="answer">
					<div class="letter">A.</div>
					<div class="content">30DC is an advanced trading software that alerts its users on hundreds of high achieving signals a day. In order to profit from 30DC, one would need to have an active brokerage account to take advantage of the trading signals which our carefully designed system deems most profitable.</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="space"></div>

			<div id="quotes" class="quotes-block" data-ride="carousel">
				<a href="#quotes" data-slide="prev" class="quotes-prev visible-sm visible-md visible-lg"></a>
				<a href="#quotes" data-slide="next" class="quotes-next visible-sm visible-md visible-lg"></a>
				<div class="quote-left"></div>
				<div class="quote-right"></div>
				<div class="carousel-inner">
					<div class="item active">
						<div class="content">
							<p class="text-center text-italic">I just got off the phone with one of your support team guides and I had to tell you the service was great!<br>
								<br>
							</p>
						</div>
						<div class="author">
							<img src="img/tina.jpg"> Tina S,<br>
							30DayChange Partner Since: November 27th 2014
						</div>
					</div>
					<div class="item">
						<div class="content">
							<p class="text-center text-italic">Awesome system Professor Crain!<br>
								I’m loving every moment of the program and so far I’ve made $9k!<br>
								<br>
							</p>
						</div>
						<div class="author">
							<img src="img/roger.jpg"> Roger E,<br>
							30DayChange Partner Since: November 13th 2014
						</div>
					</div>
					<div class="item">
						<div class="content">
							<p class="text-center text-italic">Thank you for letting me in to your program. It’s been quite a trip!<br>
								When telling my friends that I found a way to make over $37,400 weekly
								they think I’m joking :)
							</p>
						</div>
						<div class="author">
							<img src="img/lisa.jpg"> Lisa W<br>
							30DayChange Partner Since: October 4th 2014

						</div>
					</div>
					<div class="item">
						<div class="content">
							<p class="text-center text-italic">Simon, this has been absolutely inspirational.
								I love how you found a way to help people make over $8,000 a day and also profit from it.<br>
								I am proud to call myself your 97% partner.

							</p>
						</div>
						<div class="author">
							<img src="img/christopher.jpg"> Christopher K<br>
							30DayChange Partner Since: October 20th 2014

						</div>
					</div>
					<div class="item">
						<div class="content">
							<p class="text-center text-italic">In 3 days I have made $24,794. How can something so profitable be so easy...<br>
								<br>
							</p>
						</div>
						<div class="author">
							<img src="img/betsy.jpg"> Betsy J<br>
							30DayChange Partner Since: November 12th 2014

						</div>
					</div>
					<div class="item">
						<div class="content">
							<p class="text-center text-italic">My weekly income has increase x10 since I’ve started 30Day Change!<br>
								<br>
								<br>
							</p>
						</div>
						<div class="author">
							<img src="img/alex.jpg"> Alex G<br>
							30DayChange Partner Since: November 28th 2014

						</div>
					</div>
				</div>
			</div>

			<div class="space"></div>

			<div class="main-block">
				<div class="block-padding">
					<div class="row">

						<div class="col-sm-6">
							<ul class="steps">
								<li class="one"><p>Fill in your <strong>valid contact</strong> details and private password</p></li>
								<li class="two"><p class="bottom-padding-md"><strong>Open and fund</strong> your account with the recommended broker so we can connect you to the sophisticated software of 30DayChange.</p></li>
								<li class="three"><p>After you've opened an account you will be directed to the 30DayChange software and you can <strong>start making profits</strong> just like I do.</p></li>
							</ul>
							<div class="dotted-border"></div>
					

						</div>
						
						<div class="col-sm-6 text-center">
								<p class="text-center">No Credit Card or PayPal Needed <strong>This is 100% FREE!</strong></p>
							<img src="img/no_cc.png" class="img-responsive center-block">

                       <div class="input" style="margin-top:56px"> 
					   
						<a href="#up"><input  class="center-block" type="submit" value="Open a Free Account">	</a>	
						</div>
							
				<div class="signup-form">


							</div>

						
						</div>
					</div>
				</div>
			</div>

			<div class="badges text-center">
				<img src="img/badges_gray.png" class="img-responsive center-block">
			</div>



		</div>
	</div>

</div>







<div class="global-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-xs-4 logo">
				<img src="../commodities/images/besttradingoffers-logo.png" class="img-responsive">
			</div>

		</div>
	</div>
</div>

<div class="loading-icon" style="display:none;"></div>
<div id="csrf_token" data-value="ioXhk0TJb3kbs0TBB2nXcrv7AbwZFu5Q7ybt5qSi"></div>
<div id="locale" data-value="en"></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	<script type="text/javascript">
$( "#target" ).submit(function( event ) {

                //var fullname = $('#full_name').val();
                var firstname = $('#first_name').val();
                var lastName = $('#last_name').val();
				var email = $('#email').val();
                var prefix = $('#prefix').val();
                var phone = $('#phone').val();
                //var country = $('#country').val();
               // var currency = $('#currency').val();				
                var password = $('#password').val();
               // var passwordValidate = $('#passwordValidate').val();
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
					 $("#response").fadeIn("slow");
                    $("#last_name").css({ "background": "rgb(255, 210, 210)" });					
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
				else if(password !== undefined){
					
				if (password == "" || password == null) {
                    var error = "please create a password";
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
<?php include "../../../includes/footer2.php"?>

</body>


</html>
