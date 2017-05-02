<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php echo seo_optimize_title(wp_title('',false)); ?></title>

        <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
        <header class="main-header">
            <a href="<?php echo home_url(); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
            </a>
        </header>
