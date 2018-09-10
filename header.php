<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>






  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="bower_components/node_modules/bootstrap/dist/js/bootstrap.min.js">
  </script>
  <?php wp_head(); ?>

</head>

<body class='styles styles_index' data-offset='80' data-spy='scroll' data-target='#primary-nav'>
  <div class='mobile-menu d-lg-none'>
    <div class='navbar-nav mx-auto'>
      <a class='btn btn-outline-light btn-lg double-margin-bottom' href='<?php the_field('consultation_cta_link', 'option'); ?>''>
        <?php the_field('consultation_cta_text', 'option'); ?>
      </a>
<?php    
          $defaults = array(
          'theme_location' => 'menu-primary',
          'container'       => false,  
          'echo'            => false,
          'fallback_cb'     => false,
          'before'       => '<div class="nav-item">',
          'after'        => '</div>',
          'items_wrap'      => '%3$s',
          'depth'           => 0
          );
          echo strip_tags(wp_nav_menu( $defaults ), '<div><div><a>');
        ?>
      <p class='text-center white-text-color call-us'>
        <?php the_field('phone', 'option'); ?>
      </p>
    </div>
  </div>
  <nav class='navbar fixed-top navbar-expand-sm' id='primary-nav'>
    <div class='container'>
      <a class='navbar-brand' href='<?php bloginfo('url')?>'>
        <img src='<?php the_field('logo', 'option'); ?>' width='231px'>
      </a>
      <button class='tcon tcon-menu--xcross menu-button d-lg-none toggle-menu-button' type='button'>
        <span aria-hidden='true' class='tcon-menu__lines'></span>
        <span class='tcon-visuallyhidden'>
          toggle menu
        </span>
      </button>
      <div class='d-none d-lg-inline ml-auto'>
        <?php    
          $primaryMenuDefaults = array(
          'theme_location' => 'menu-primary',
          'container'       => 'div', 
          'container_class' => 'navbar-nav', 
          'echo'            => false,
          'fallback_cb'     => false,
          'before'       => '<div class="nav-item">',
          'after'        => '</div>',
          'items_wrap'      => '%3$s',
          'depth'           => 0
          );
          echo strip_tags(wp_nav_menu( $primaryMenuDefaults ), '<div><div><a>');
        ?>
      </div>
      <div class='navbar-nav d-none d-lg-inline position-relative'>
        <div class='call-us'>
          <h6 class='no-margin-bottom'>
            <i class='material-icons'>
              phone
            </i>
            <span class='spaced'>
              CALL US
            </span>
            <span class='bold-font'>
              <?php the_field('phone', 'option'); ?>
            </span>
          </h6>
        </div>
        <div class='form-inline'>
          <a class='btn btn-outline-primary btn-lg nav-link contact-button' href='<?php the_field('consultation_cta_link', 'option'); ?>'>
            <?php the_field('consultation_cta_text', 'option'); ?>
          </a>
        </div>
      </div>
    </div>
  </nav>



