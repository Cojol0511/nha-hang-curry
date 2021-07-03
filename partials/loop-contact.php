<?php
get_header();
$queried_object = get_queried_object();
global $post;
?>

<!-- Main -->
<main id="main" class="main contact">
  <section class="main-banner_top">
    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-center main-banner_top--content">
      <h1>Find us</h1>
      <h2>CONTACT</h2>
    </div>
  </section>

  <section class="contact-t_and_f">
    <div class="container">
      <div class="row gx-md-5">
        <div class="col-12 col-md-6">
          <div class="contact-t_and_f--text">
            <div class="title">GET IN TOUCH</div>
            <div class="content">
              <p>
                The Rosa’s restaurant and bar are located on the ground and
                first floor within the Winchester Grade VI listed building
                of the Royal Institution of Chartered Surveyors. The
                restaurant and bar both have their own entrances.
              </p>
              <p>
                If you have questions or comments, please get a hold of us
                in whichever way is most convenient. Ask away. There is no
                reasonable question that our team can not answer
              </p>
            </div>
            <div class="title">FOLLOW US</div>
            <div class="content">
              <a href="<?php echo get_theme_mod("html_facebook") ?>"><i style="color: #3b5998;" class="fab fa-facebook"></i></a>
              <a href="#"><i style="color: #ff0000;" class="fab fa-pinterest"></i></a>
              <a href="<?php echo get_theme_mod("html_twitter") ?>"><i style="color: #00acee;" class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="contact-t_and_f--form">
            <div class="title">TO RECEIVE INFORMATION</div>
            <div class="form">

              <?php echo do_shortcode('[contact-form-7 id="198" title="CTF"]'); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-map">
    <div class="container">
      <?php echo get_theme_mod("html_maps") ?>
    </div>
  </section>
</main>

<div class="clear"></div>
<?php get_footer(); ?>