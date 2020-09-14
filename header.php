<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a25
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="main">
		<header class="main__head">
      <div class="fix-menu">
  <nav class="navbar fix-color">
     <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
            <a class="navbar-brand fix-brand" href="#">
               <img alt="Brand" src="<?php echo bloginfo('template_url'); ?>/vendor/images/logo_a25_2.png">
            </a>
        </div>
  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right fix-nav">
        <li><a href="#">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Прочее</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div> <!-- class="fix-menu" -->
			</header>

