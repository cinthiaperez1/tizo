<?php
	$logo_url = 'img/';
	$topbar_class = '';

	if ($page=='Home') {
		$logo_url = $logo_url.'logo-tizo-blanco-alt.svg';
		$topbar_class = ' class="home"';
	} else {
		$logo_url = $logo_url.'logo-tizo-verde.svg';
	}

	if ( isset($logged_in)) {
		$topbar_menu = '';
	} else {
		$topbar_menu = '';
	}
?>
<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>tizō | <?php echo $page; ?></title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/normalize.css" />


		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/fonts.css">

		<!-- This is how you would link your custom stylesheet -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mj.css">
		<link rel="stylesheet" href="css/c.css">

		<script src="js/vendor/modernizr.js"></script>
	</head>

	<body<?php echo $topbar_class; ?>>

		<div class="contain-to-grid header-section">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="index.php"><img src="<?php echo $logo_url; ?>" alt="tizō" /></a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">

					<!-- Right Nav Section -->
					<ul class="right">
						<!-- <li class="active"><a href="#">Mis proyectos</a></li> -->
						<li><a href="control-panel.php">Panel de control</a><!-- <a href="">+</a> --></li>
						<li><a href="create.php">Crear proyecto</a></li>
						<li><a href="profile.php">Mi perfil</a></li>
    				</ul>

				</section>

  			</nav>
		</div>

		<!-- CONTENT FILL WHEN SCROLL = 0 -->
		<div class="header-fill"></div>

