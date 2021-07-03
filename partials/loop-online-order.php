<?php
get_header();
$queried_object = get_queried_object();
global $post;
?>

<!-- Main -->
<main id="main" class="main online_order">
  <section class="main-banner_top">
    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-center main-banner_top--content">
      <h1>Discover</h1>
      <h2>ORDER ONLINE MENU</h2>
    </div>
  </section>

  <?php get_sidebar(); ?>

  <section class="online_order-product">
    <div class="container">
      <div class="list-product">
        <div class="text-center text-md-start online_order-product--title">
          Grünes Thai - Curry
        </div>
        <div class="online_order-product--content">
          <ul class="d-flex flex-wrap">
            <a href="">
              <li>this is product</li>
            </a>
            <a href="">
              <li>this is product</li>
            </a>
            <a href="">
              <li>this is product</li>
            </a>
            <a href="">
              <li>this is product</li>
            </a>
            <a href="">
              <li>this is product</li>
            </a>
            <a href="">
              <li>this is product</li>
            </a>
            <a href="">
              <li>this is product</li>
            </a>
          </ul>
          <div class="text-end">
            <button class="">MORE</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="clear"></div>
<?php get_footer(); ?>