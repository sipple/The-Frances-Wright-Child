<?php
/**
 * @package WordPress
 * @subpackage TheFrancesWright
 */

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="inital-scale=1.0, width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		echo " | $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		echo ' | ' . sprintf( __( 'Page %s', 'themesweet' ), max( $paged, $page ) );
	}

?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_enqueue_style('google_fonts', 'http://fonts.googleapis.com/css?family=Meddon|Ubuntu:300|Raleway:100|PT+Serif'); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<body lang="en">
	<div id="site">
		<div id="content">
			<div id="site-title">
<h1 id="site_title">
						<?php bloginfo('name'); ?>
					</h1>
			</div>
<div id="menu"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>

				<div id="lockup">
          <a href="<?php echo home_url(); ?>">
					<div id="headimg"></div>
          </a>
					<i id="tagline"><a href="/about">Mere Smith</a><br />
					is a recovering Southerner,<br />
					longtime TV writer,<br />
					author and blogger.</i>
				</div>
