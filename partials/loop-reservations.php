<?php
get_header();
$queried_object = get_queried_object();
global $post;
?>

<!-- Main -->
<main id="main" class="main reservation">
  <section class="main-banner_top">
    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-center main-banner_top--content">
      <h1>Make a</h1>
      <h2>RESERVATION</h2>
      <h6>Booking a table online easy and take just a couple mintes</h6>
    </div>
  </section>

  <section class="reservation-active">
    <div class="container">
      <div class="reservation-active--online text-center">
        <div class="title">MAKE ONLINE RESERVATION</div>
        <p class="content">POWERED BY OPENTABLE</p>
        <!-- <div class="row gx-md-5"> -->

        <?php echo do_shortcode('[contact-form-7 id="199" title="R"]'); ?>

        <!-- </div> -->
      </div>

      <div class="reservation-active--support">
        <div class="row gx-md-5">
          <div class="col-12 col-md-6">
            <div class="title">RESERVE BY PHONE</div>
            <div class="content">
              <p>
                We take reservations for lunch and dinner. To make a
                reservation, please call us at (027) 8338 145 between
                10am-6pm, Monday to Friday.
              </p>
              <p>
                We do not book the bar area – we leave this for walk-in
                guests to ensure that we always offer some tables for those
                who have not booked.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="title">PRIVATE DINING & EVENTS</div>
            <p class="content">
              Whatever your event or celebration, we are here to make your
              special day a truly memorable one. Rosa’s private dining
              experts are more than happy to create custom floral
              arrangements and arrange for guests to meet Chef Moise during
              the course of their meal. For parties of 8-12 we have the
              roastery table which is available for private hire.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="main-banner_middle">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/reservation-banner_middle.png" width="100%" />
  </section>

  <section class="reservation-champagne">
    <div class="container">
      <div class="reservation-champagne--content text-center">
        <div class="title">CHAMPAGNE US</div>
        <div class="content">
          Every Monday, Tuesday and Wednesday evening, we’re offering groups
          of 10 or more that book an area in our bar a complimentary bottle of
          Champagne. Call our reservations team on (027) 8338 145 for more
          information.
        </div>
      </div>
    </div>

  </section>
</main>

<div class="clear"></div>
<?php get_footer(); ?>