<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Golive</title>

	<!--Techie-->
	<!-- Favicons -->
	<link href="assets/app/img/favicon.ico" rel="icon">
	<link href="assets/app/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/app/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/app/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/app/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/app/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/app/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/app/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/app/css/style.css" rel="stylesheet">


</head>

<body>

	<?php

	$router = new Router($_SERVER['REQUEST_URI']); //Solamente en desarrollo se elimina parte de la URI

	//Aca se hacen los llamados a los controladores para brindar una respuesta
	$router->add('/webprogrammingfcefy2020/Golive/', function () {
		include "views/modules/home.php";
		return '';
	});

	$router->add('/webprogrammingfcefy2020/Golive/ingresar', 'UserController::loginController');

	$router->add('/webprogrammingfcefy2020/Golive/salir', function () {
		session_destroy();
		header("Location: http://localhost/webprogrammingfcefy2020/Golive/");
		return '';
	});

	$router->add('/webprogrammingfcefy2020/Golive/registrarse', 'UserController::signupController');

	$router->add('/webprogrammingfcefy2020/Golive/perfil', 'UserController::profileController');

	//$router->add('/webprogrammingfcefy2020/Golive/inicio', 'UserController::signupController');

	$router->run();

	?>

	<!-- Vendor JS Files -->
	<script src="assets/app/vendor/jquery/jquery.min.js"></script>
	<script src="assets/app/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/app/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/app/vendor/php-email-form/validate.js"></script>
	<script src="assets/app/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/app/vendor/counterup/counterup.min.js"></script>
	<script src="assets/app/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/app/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/app/vendor/venobox/venobox.min.js"></script>
	<script src="assets/app/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/app/js/main.js"></script>
	<script>
		$(document).ready(function() {

			$('#username').on("keyup", function() {
				var username = $('#username').val();
				var datos = new FormData();
				datos.append("username", username);
				var regex = /^[a-zA-Z0-9\s]+$/;

				if(regex.test(username)){
					$.ajax({
						type: "POST",
						url: "views/modules/ajax.php",
						data: datos,
						cache: false,
						contentType: false,
						processData: false,
						success: function(response) {
							if(response != 0){
								$('#username').addClass('is-invalid').removeClass('is-valid');
								$('#submitButton').prop('disabled', false);

							}else{
								$('#username').addClass('is-valid').removeClass('is-invalid');
								$('#submitButton').prop('disabled', true);

							}
						},
						error: function(){

						}
					});
				}else{
					$('#username').addClass('is-invalid').removeClass('is-valid');
					$('#submitButton').prop('disabled', true);
				}
			});

			$('#email').on("keyup", function() {
				var email = $('#email').val();
				var datos = new FormData();
				datos.append("email", email);
				var regex = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;

				if(regex.test(email)){
					$.ajax({
						type: "POST",
						url: "views/modules/ajax.php",
						data: datos,
						cache: false,
						contentType: false,
						processData: false,
						success: function(response) {
							if(response != 0){
								$('#email').addClass('is-invalid').removeClass('is-valid');
								$('#submitButton').prop('disabled', false);
							}else{
								$('#email').addClass('is-valid').removeClass('is-invalid');
								$('#submitButton').prop('disabled', true);
							}
						},
						error: function(){

						}
					});
				}else{
					$('#email').addClass('is-invalid').removeClass('is-valid');
					$('#submitButton').prop('disabled', true);
				}
			});

			$('#name').on( "keyup" ,function () {
				var regex = /^([a-zA-Z\s]+){3,40}$/;
				var firstName = $(this).val();

				if(regex.test(firstName)){
					$(this).addClass('is-valid').removeClass('is-invalid');
					$('#submitButton').prop('disabled', false);
				}else{
					$(this).addClass('is-invalid').removeClass('is-valid');
					$('#submitButton').prop('disabled', true);
				}
			});

			$('#lastname').on( "keyup" ,function () {
				var regex = /^([a-zA-Z\s]+){3,40}$/;
				var firstName = $(this).val();

				if(regex.test(firstName)){
					$(this).addClass('is-valid').removeClass('is-invalid');
					$('#submitButton').prop('disabled', false);
				}else{
					$(this).addClass('is-invalid').removeClass('is-valid');
					$('#submitButton').prop('disabled', true);
				}
			});

			$('#phoneNum').on( "keyup" ,function () {
				var regex = /^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/;
				var phoneNum = $(this).val();

				if(regex.test(phoneNum)){
					$(this).addClass('is-valid').removeClass('is-invalid');
					$('#submitButton').prop('disabled', false);
				}else{
					$(this).addClass('is-invalid').removeClass('is-valid');
					$('#submitButton').prop('disabled', true);
				}
			});
			
		});
	</script>

</body>

</html>