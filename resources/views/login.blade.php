<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.jpg" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg" />

	<!-- PAGE TITLE HERE -->
	<title>Construcciones RPA</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">

</head>

<body id="bg" class="full-boxed">
	<div id="loading-area"></div>
	<div class="page-wrapers">
		<!-- Content -->
		<div class="page-content dlab-login bg-secondry">
			<div class="top-head text-center logo-header">
				<a href="{{ route('index') }}">
					<img src="images/logo.jpg" alt="" />
				</a>
			</div>
			<div class="login-form">
				<div class="tab-content">
					<div id="login" class="tab-pane active">
						<form class="p-a30 dlab-form" method="post" action="{{ route('checkLogin') }}">
							@csrf
							<h3 class="form-title m-t0 text-center">Iniciar Sesión</h3>
							<div class="dlab-separator-outer m-b5 text-center">
								<div class="dlab-separator bg-primary style-liner"></div>
							</div>
							<p>Introduce el usuario y contraseña. </p>
							<div class="form-group">
							<span class="font-weight-bold text-danger text-left">Email</span>
								<input name="email" class="form-control" placeholder="Email" type="text" value="{{ old('email') }}" />
								@if($errors->has('email'))
								<span class="text-danger">{{ $errors->first('email') }}</span>
								@elseif(session('error-email'))
								<span class="text-danger">{{ session('error-email') }}</span>
								@endif
							</div>
							<div class="form-group">
							<span class="font-weight-bold text-danger text-left">Contraseña</span>
								<input name="contrasenia" class="form-control " placeholder="Contraseña" type="password" />
								@if($errors->has('contrasenia'))
								<span class="text-danger">{{ $errors->first('contrasenia') }}</span>
								@elseif(session('error-password'))
								<span class="text-danger">{{ session('error-password') }}</span>
								@endif
							</div>
							<div class="form-group text-center">
								<button class="site-button m-r5 dz-xs-flex">Iniciar Sesión</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="bottom-footer text-center text-white">
				<p>2022 © EOI - Generation Spain. </p>
			</div>
		</div>
		<!-- Content END-->
	</div>
	<!-- JavaScript  files ========================================= -->
	<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
	<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
	<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
	<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
	<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
	<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
	<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
	<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
	<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
	<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
	<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->


</body>

</html>