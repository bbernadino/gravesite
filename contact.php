<?php 

	include("head.php");
	include("nav.php");
			
			//Check for header injection
			
			function has_header_injection($str){
				return preg_match( "/[\r\n]/", $str);
			}
			
			if (isset ($_POST['contact_submit'])){
				
				$name = trim($_POST['name']);
				$email = trim($_POST['email']);
				$phone = trim($_POST['phone_number']);
				$msg = $_POST['message'];
				
				//Check to see if $name or $email have header incjections
				
			if (has_header_injection($name) || has_header_injection($email)) {
				die();  //if true, kill the script
				}
				
				// if (!$name || !$email || !$phone || !$msg){
				// 	echo '<h4 class="error">All field required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
				// 	exit;
					
				// }
				
				//add the recipient email to a variable. put YOUR email here!
				$to = "bbernadino96@gmail.com";
				
				// Create a subject
				$subject = "$name sent you a message via your contact form";
				
				//construct the message
				$message = "Name: $name\r\n";
				$message .= "email: $email\r\n";
				$message .= "Phone Number: $phone\r\n";
				$message .= "Message:\r\n$msg";
				
				$message = wordwrap($message,72);
				
				//Set the mail headers into a variable
				
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
				$headers .= "From: $name <$email> \r\n";
				$headers .= "X-Priority: 1\r\n";
				$headers .= "X-MSMail-Priority: High\r\n\r\n";
				
				//Send the email
				mail($to, $subject, $message, $headers);
					
		?>
		
		<!-- Show success message after email has sent -->
		
		<h5>Thanks for contacting us!</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href="contact.php" class="button block">&laquo; Go to Contact Page</a></p>
		<?php 
			} else {
		?>

	<section id="contact">
		<!-- begin contact -->
		<img src="img/contact.jpg">
		<h3>Contact Us</h3>

		<h4>Send us a message and we will get back to you as soon as we can</h4>

		<br>

		<section class="contactform">
			<!-- begin contactform -->
			<form class="contact-form" name= "contactform" method="post" action="">
				<div class="form-inputs">
					<div class="inputwrap">
					<input class="contactinput" type="text" placeholder="Full Name" name="name">
					</div>
					<div class="inputwrap">
					<input class="contactinput" type="text" placeholder="Subject" name="subject">
					</div>
				</div>

				<div class="form-inputs">
				<div class="inputwrap">
					<input class="contactinput" type="text" placeholder="Phone Number" name="phone_number">
				</div>
				<div class="inputwrap">
					<input class="contactinput" type="text" placeholder="Email Address" name="email">
			</div>
				
			</div>
					<h5>Message</h5>
					<textarea id="box" rows="10" cols="40" name="message"></textarea>

					<input type="submit" class="button next" name="contact_submit" value="Send Message">
					
			</form>
		</section>
		<!-- end contactform -->

		
	</section>
	<!-- end contact -->
	
			<?php }

include("footer.php");

?>