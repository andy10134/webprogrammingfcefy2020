<!DOCTYPE html>
<html lang="en">

<head>

	<title>Golive</title>
	<?php
	if(isset($_SESSION["id"]) && $_SESSION["roleId"] == 3){
		echo('
			<!--Atlantis-->
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
			<link href="assets/app/img/favicon.ico" rel="icon">

			<!-- Fonts and icons -->
			<script src="assets/atlantis/js/plugin/webfont/webfont.min.js"></script>
			<script>
				WebFont.load({
					google: {"families":["Lato:300,400,700,900"]},
					custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["assets/atlantis/css/fonts.min.css"]},
					active: function() {
						sessionStorage.fonts = true;
					}
				});
			</script>

			<!-- CSS Files -->
			<link rel="stylesheet" href="assets/atlantis/css/bootstrap.min.css">
			<link rel="stylesheet" href="assets/atlantis/css/atlantis.min.css">
			
			<!-- CSS Just for demo purpose, dont include it in your project -->
			<link rel="stylesheet" href="assets/atlantis/css/demo.css">
		');
	}else{
		echo('
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
			<!--Techie-->
			<!-- Favicons -->
			<link href="assets/app/img/favicon.ico" rel="icon">
			<link href="assets/app/img/apple-touch-icon.png" rel="apple-touch-icon">

			<!-- Google Fonts -->
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
			<!-- Vendor CSS Files -->
			<link href="assets/app/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<link href="assets/app/vendor/icofont/icofont.min.css" rel="stylesheet">
			<link href="assets/app/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
			<link href="assets/app/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
			<link href="assets/app/vendor/venobox/venobox.css" rel="stylesheet">
			<link href="assets/app/vendor/aos/aos.css" rel="stylesheet">

			<!-- Template Main CSS File -->
			<link href="assets/app/css/style.css" rel="stylesheet">
		');
	
	}

	?>


</head>

<body <?php if(isset($_SESSION["id"]) && $_SESSION["roleId"] == 3){
	echo('data-background-color="dark"');
} ?>>

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

	$router->add('/webprogrammingfcefy2020/Golive/imagen', 'UserController::profileImageController');

	$router->add('/webprogrammingfcefy2020/Golive/inicio', 'UserController::signupController');

	$router->add('/webprogrammingfcefy2020/Golive/Alta-Institucion', 'InstitutionController::altaController');

	$router->add('/webprogrammingfcefy2020/Golive/perfilInstitucion', 'InstitutionController::profileController');

	$router->add('/webprogrammingfcefy2020/Golive/eliminarInstitucion', 'InstitutionController::removeInstitution');

	$router->add('/webprogrammingfcefy2020/Golive/agregarEntrenador', 'InstitutionController::registerTrainner');
	$router->add('/webprogrammingfcefy2020/Golive/facturacion', 'UserController::facturacion');

	$router->run();

	if(isset($_SESSION["id"]) && $_SESSION["roleId"] == 3){
		echo('
			<!--Atlantis-->
			<!--   Core JS Files   -->
			<script src="assets/atlantis/js/core/jquery.3.2.1.min.js"></script>
			<script src="assets/atlantis/js/core/popper.min.js"></script>
			<script src="assets/atlantis/js/core/bootstrap.min.js"></script>

			<!-- jQuery UI -->
			<script src="assets/atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
			<script src="assets/atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

			<!-- jQuery Scrollbar -->
			<script src="assets/atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


			<!-- Chart JS -->
			<script src="assets/atlantis/js/plugin/chart.js/chart.min.js"></script>

			<!-- jQuery Sparkline -->
			<script src="assets/atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

			<!-- Chart Circle -->
			<script src="assets/atlantis/js/plugin/chart-circle/circles.min.js"></script>

			<!-- Datatables -->
			<script src="assets/atlantis/js/plugin/datatables/datatables.min.js"></script>

			<!-- Bootstrap Notify -->
			<script src="assets/atlantis/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

			<!-- jQuery Vector Maps -->
			<script src="assets/atlantis/js/plugin/jqvmap/jquery.vmap.min.js"></script>
			<script src="assets/atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

			<!-- Sweet Alert -->
			<script src="assets/atlantis/js/plugin/sweetalert/sweetalert.min.js"></script>

			<!-- Atlantis JS -->
			<script src="assets/atlantis/js/atlantis.min.js"></script>

			<!-- Atlantis DEMO methods, dont include it in your project! -->
			<script src="assets/atlantis/js/setting-demo.js"></script>
			<script src="assets/atlantis/js/demo.js"></script>
			<script>
				$("#lineChart").sparkline([102,109,120,99,110,105,115], {
					type: "line",
					height: "70",
					width: "100%",
					lineWidth: "2",
					lineColor: "rgba(255, 255, 255, .5)",
					fillColor: "rgba(255, 255, 255, .15)"
				});

				$("#lineChart2").sparkline([99,125,122,105,110,124,115], {
					type: "line",
					height: "70",
					width: "100%",
					lineWidth: "2",
					lineColor: "rgba(255, 255, 255, .5)",
					fillColor: "rgba(255, 255, 255, .15)"
				});

				$("#lineChart3").sparkline([105,103,123,100,95,105,115], {
					type: "line",
					height: "70",
					width: "100%",
					lineWidth: "2",
					lineColor: "rgba(255, 255, 255, .5)",
					fillColor: "rgba(255, 255, 255, .15)"
				});


		');
	}else{
		echo('
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
		<script src="assets/app/js/validacion.js"></script>
		<script src="assets/app/js/profile.js"></script>
		');
	
	}

	?>

	

</body>

</html>