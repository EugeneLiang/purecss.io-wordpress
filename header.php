<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package purecss.io
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/combo/1.17.16?/css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://purecss.io/combo/1.17.16?/css/layouts/side-menu.css">
    <!--<![endif]-->
<!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>
<style>
a {
  text-decoration: none;
  color:#4d4d4d;
}
</style>
</head>

<body <?php body_class(); ?>>
  <div id="layout" class="hfeed site">
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>
    <div id="menu">
      <div class="pure-menu pure-menu-open">
        <a class="pure-menu-heading" href="#">Company</a>
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>

              <li class="menu-item-divided pure-menu-selected">
                  <a href="#">Services</a>
              </li>

              <li><a href="#">Contact</a></li>
          </ul>
      </div>
    </div>