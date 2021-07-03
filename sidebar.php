<?php
$queried_object = get_queried_object();
$classactive = '';

if ($queried_object->has_archive) {
	$classactive = 'acctive';
}

?>

<section class="online_order-category">
  <div class="container">
    <div class="list-category">
      <div class="online_order-category--title">PRODUCT CATEGORY</div>
      <div class="online_order-category--content">
        <?php
				$categories = get_categories(array(
					'orderby' => 'name',
					'order'   => 'ASC'
				));
				$product_categories = get_terms('product_cat', $cat_args);

				if (!empty($product_categories)) {
					echo '<ul class="row">';

					echo '<a href="' . get_permalink(wc_get_page_id('shop')) . '"  class="col-6 col-md-4 col-xl-2 ' . $classactive . '">';
					echo '<li>';
					echo 'All Product';
					echo '</li>';
					echo '</a>';


					foreach ($product_categories as $key => $category) {

						if ($queried_object->slug == $category->slug) {
							$classactive = 'acctive';
						} else {
							$classactive = '';
						}
						echo '<a href="' . get_term_link($category) . '"  class="col-6 col-md-4 col-xl-2 ' . $classactive . '">';
						echo '<li>';

						echo $category->name;
						echo '</li>';

						echo '</a>';
					}



					echo '</ul>';
				}
				?>
      </div>
    </div>
  </div>
</section>