<?php

/**
 * Plugin Name: Abercoaching - Comming-soon
 * Description: Activez ce plugin pour renvoyer les visiteurs non connecté vers une page comming-soon.
 * Version: 0.0.1
 */

function redirect_comming_soon()
{
	if (!is_user_logged_in()) {
?>
		<!DOCTYPE html>
		<html lang="fr">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title><?php echo bloginfo('name'); ?> | Comming soon</title>
			<link rel="stylesheet" href="<?php echo plugins_url('style.css', __FILE__); ?>">
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
		</head>

		<body>
			<main>
				<div class="soon">
					<div class="soon__logo"><img src="<?php echo plugins_url('img/logo_abercoaching_inline.png', __FILE__);  ?>" alt=""></div>
					<div class="soon__container">
						<h1>Abercoaching <br> Coaching & Formation</h1>
						<h2><strong>Anna Szeremeta</strong> <br> Coach certifié RNCP</h2>
						<h3 class="soon__site-status">Site en construction</h3>
						<p class="soon__mobile">06 32 75 57 90</p>
						<p class="soon__email"><a href="mailto:contact@abercoaching.com">contact@abercoaching.com</a></p>
						<div class="soon__address">
							<p>Sur rendez-vous au cabinet :</p>
							<p>8 rue Villebois-Mareuil</p>
							<p>LE RELECQ KERHUON</p>
						</div>
					</div>
				</div>
			</main>
		</body>

		</html>

<?php
		http_response_code(302);
		die;
	}
}
add_action('template_redirect', 'redirect_comming_soon');
