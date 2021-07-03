<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<!-- Main -->
<main id="main" class="main">
  <section class="main-banner_top">
    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-center main-banner_top--content">
      <h1>Welcome</h1>
      <h2>SEN VIET THAI CURRY</h2>
      <h6>READY TO BE OPENED</h6>
      <a href="<?php echo get_home_url(); ?>/shop"> <button>EXPLORE</button></a>
    </div>
  </section>

  <section class="main-ourmenu">
    <div class="container">
      <div class="row flex-md-row-reverse">
        <div class="col-12 col-md-6 main-ourmenu-image">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/main-ourmenu.png" alt="" />
        </div>
        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center align-items-center main-ourmenu-text">
          <div class="title">OUR MENU</div>
          <p class="content">
            SenViet Thai Curry is a restaurant, bar and coffee roastery
            located on a busy corner site in Farringdon’s Exmouth Market.
            With glazed frontage on two sides of the building, overlooking
            the market and a bustling London intersection.
          </p>
          <a href="<?php echo get_home_url(); ?>/shop">
            <button class="button">VIEW FULL THE MENU</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="main-banner_middle">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/main-banner_middle.png" width="100%" />
  </section>

  <section class="main-reservation">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 main-reservation-image">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/main-reservation.png" alt="" />
        </div>
        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center align-items-center main-reservation-text">
          <div class="title">RESERVATION</div>
          <p class="content">
            SenViet Thai Curry is a restaurant, bar and coffee roastery
            located on a busy corner site in Farringdon’s Exmouth Market.
            With glazed frontage on two sides of the building, overlooking
            the market and a bustling London intersection.
          </p>
          <a href="<?php echo get_home_url(); ?>/reservation">
            <button class="button">MAKE A RESERVATION</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="main-map">
    <div class="container">
      <?php echo get_theme_mod("html_maps") ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>