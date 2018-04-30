<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-16x16.png">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
      <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
      <?php wp_head(); ?>
   </head>
   <div class='thetop'></div>
   <body <?php body_class();?>>
    
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"> </div>
        <div class="loader-section section-right"></div>
    </div>

     <main>

      <!-- <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link">About Natous</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">Your benfits</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">Popular tours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">Stories</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">Book now</a></li>
                    </ul>
            </nav>
        </div> -->

        <header class="header" id="header">
            <div class="header__logo-box">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php bloginfo('template_directory'); ?>/src/images/logo-white.png" alt="Logo" class="header__logo">
                  </a>
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Younes Farhane</span>
                    <span class="heading-primary--sub">Web developper Front End based in Montreal, Canada</span>
                </h1>

                <a href="#section-tours" class="btn  btn--animated">Discover my works</a>
            </div>
        </header>