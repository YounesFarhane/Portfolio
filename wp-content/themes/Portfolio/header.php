<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-16x16.png">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
      <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
      <?php wp_head(); ?>

      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69961612-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69961612-1');
</script>

   </head>
   <div class='thetop'></div>
   <body <?php body_class();?>>
    
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"> </div>
        <div class="loader-section section-right"></div>
    </div>

     <main>

        <header class="header" id="header">
            <div class="header__logo-box">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php bloginfo('template_directory'); ?>/src/images/logo-white.png" alt="Logo" class="header__logo">
                  </a>
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main"><?php the_field('title_header' , 'options') ;?></span>
                    <span class="heading-primary--sub"><?php the_field('content_header' , 'options') ;?></span>
                </h1>

                <a href="#section-tours" class="btn  btn--animated"><?php the_field('title_link_header', 'options') ;?></a>
            </div>
        </header>