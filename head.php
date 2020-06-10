<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="Bailey B Santistevan">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="normalise.css" rel="stylesheet" type="text/css">
	<link href="w3.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jquery.validate.js"></script>
	<!-- <script src="js/form_validation.js"></script> -->
	<script>

	$(document).ready(function(){

			$("form[name='contactform']").validate({
				//validation rules
				rules: {
					name: "required",
					subject: "required",
					phone_number: "required",
					email: {
						required: true,
						email: true
					}
				},
				//error messages
					messages: {
						name: "Please enter your First and Last name.",
						subject: "Please enter a valid subject.",
						phone_number: "Please enter your phone number.",
						email: "Please enter your valid email address."
					},
				submitHandler: function(form) {
					form.submit();
				}
			});
			
			$("form[name='loginform']").validate({
				//validation rules
				rules: {
					email: {
						required: true,
						email: true
					},
					password: {
						required: true,
						minlength: 5
					}
				},
				messages: {
					email: "Please enter your email address",
					password: {
						required: "Please enter a password.",
						minlength: "Your password must be at least 5 characters long."
					}
				},
				submitHandler: function(form) {
					form.submit();
				}

				
		});

		$(function () {
					$(".contactinput").keydown(function(e){
						$(this).css("border", "solid 1px black");
					})
					$(".contactinput").keyup(function(e){
						$(this).css("border", "none");
						$(this).css("border-bottom", "1px solid #ddd");
					})
					
		});

		$(function () {
			$(".grave img").hover(function () {
    	$(this).css({transition:".2s",transform:"scale(1.05)"});
				}, function () {
    	$(this).css({transition:".2s",transform:"scale(1)"});   
			});
		})


		// console.log("ready");
	});

	</script>
	<title>The Grave Site</title>
</head>