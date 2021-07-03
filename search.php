<?php get_header(); ?>
<section class="background-header-in-body">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="search-title mt-5 mb-3">Search Results For</h2>
                <a href="#" class=" title-page text-uppercase "> <?php echo get_search_query(); ?></a>
            </div>
        </div>
    </div>
</section>
<div class="search w-100 my-5">
    <div class="container">
        <?php
        $table_dtb      = $wpdb->prefix . 'posts';
        $query_search   = get_search_query();
        $sql            = "SELECT * FROM {$table_dtb} WHERE `post_type` = 'product' AND `post_title` LIKE '%{$query_search}%' AND `post_status` = 'publish'";
        $results        = $wpdb->get_results($sql, ARRAY_A);
        ?>

        <?php if ($results) : ?>
            <ul class="search-products row product-layout list-unstyled">

                <?php foreach ($results as $key => $result) : ?>
                    <div class="col-12">
                        <li class="product d-flex justify-content-between align-items-center pb-3 pt-3 mb-3 border-bottom">
                            <a class="link" href="<?php the_permalink($result['ID']); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($result["ID"], 'full'); ?> " class="mx-auto d-block attachment-shop_catalog size-shop_catalog wp-post-image size-woocommerce_thumbnail">
                                <div class="content">
                                    <h2 class="woocommerce-loop-product__title"><?php echo get_the_title($result['ID']); ?></h2>

                                    <?php
                                    $TermShows = get_the_terms($result['ID'], 'product_cat');
                                    if ($TermShows && !is_wp_error($TermShows)) {
                                        foreach ($TermShows as $Term) {
                                            if ($Term === reset($TermShows)) {
                                                echo '<a class="fw-bold category" href="' .  esc_url(get_term_link($Term->term_id)) . '">';
                                                echo $Term->name;
                                                echo '</a>';
                                            }
                                        }
                                    }
                                    ?>

                                    <p class="woocommerce-loop-product__excerpt"><?php echo wp_trim_words(get_the_content($result['ID']), $num_words = 25, $more = null); ?></p>

                                </div>

                            </a>
                        </li>
                    </div>


                <?php endforeach; ?>
            </ul>

        <?php else : echo '<h2 class="search my-5 text-center">No matching search results</h2>';
        endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>