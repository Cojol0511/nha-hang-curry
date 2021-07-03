<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Page Title 
    ================================================== -->
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php do_action('wp_after_body_open'); ?>
  <?php wp_body_open(); ?>
  <div id="wrapper" class="w-100 float-left">
    <!-- Header -->
    <header id="header" class="header <?php echo (is_user_logged_in()) ? 'is_login' : '' ?>">
      <section class="header-main">
        <div class="container">
          <div class="row gx-1 align-items-center">

            <a id="mobile-menu-button" class="col-2 d-lg-none" href="#mobile_menu">
              <i class="far fa-bars"></i>
            </a>

            <div class="
                col-8 col-lg-2
                d-flex
                justify-content-center
                header-main--logo
              ">
              <a href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-logo.png" alt="" /></a>
            </div>
            <div class="
                col-8
                d-none d-lg-block
                header-main--menu
              ">
              <?php
              wp_nav_menu(array(
                'theme_location'  => 'primary',
                'container' => 'false',
                'menu_class' => 'w-100 d-flex justify-content-around align-items-center'
              ));
              ?>
            </div>
            <div class="col-2 d-flex justify-content-end header-main--icon">
              <a class="toggle-overlay"><i class="fas fa-search"></i></a>
              <a href="<?php echo get_home_url(); ?>/my-account">
                <i class="fas fa-user"></i>
              </a>
              <a href="<?php echo wc_get_cart_url(); ?>">
                <i class="fas fa-shopping-cart">
                  <?php $items_count = WC()->cart->get_cart_contents_count(); ?>
                  <div id="mini-cart-count"><?php echo $items_count ? $items_count : '&nbsp;'; ?></div>
                </i>
              </a>
            </div>
          </div>
        </div>
      </section>
    </header>

    <aside>
      <div class="outer-close toggle-overlay">
        <a class="close"><span></span></a>
      </div>
      <nav>
        <!--  -->
        <div class="container d-flex flex-column justify-content-center align-items-center">
          <form id="search-form" action="<?php bloginfo('url'); ?>/" method="GET" role="form" class="search-form d-flex flex-column" autocomplete="off">
            <label for="">Search</label>
            <input type="text" name="s" placeholder="Find some thing here..." />
          </form>
        </div>
        <!--  -->
      </nav>
    </aside>