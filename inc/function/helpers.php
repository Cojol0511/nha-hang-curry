<?php
//Disable Block New
add_filter('use_block_editor_for_post', '__return_false');

//Code phan trang
function prw_wp_corenavi($custom_query = null, $paged = null)
{
    global $wp_query;
    if ($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $paged = ($paged) ? $paged : get_query_var('paged');
    $big = 999999999;
    $total = isset($main_query->max_num_pages) ? $main_query->max_num_pages : '';
    if ($total > 1) echo '<div class="pagenavi">';
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $total,
        'mid_size' => '2', // S? trang hi?n th? khi có nhi?u trang tru?c khi hi?n th? ...
        'prev_text'    => __('Trang Tru?c', 'prw'),
        'next_text'    => __('Trang Ti?p', 'prw'),
    ));
    if ($total > 1) echo '</div>';
}
//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types)
{

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

if (get_theme_mod('html_disable_update')) {
    function remove_core_updates()
    {
        global $wp_version;
        return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
    }
    add_filter('pre_site_transient_update_core', 'remove_core_updates');
    add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
    add_filter('pre_site_transient_update_themes', 'remove_core_updates');
}



// add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 11);

//remove IMG
remove_action('woocommerce_before_shop_loop_item_title', ' woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

//add OpenDivInfor - 11
function addOpenDivInfor()
{

    echo '<div class="woocommerce-loop-product__infor">';
}
add_action('woocommerce_shop_loop_item_title', 'addOpenDivInfor', 11);
//add Description Of Product In List
function addDescriptionOfProductInList()
{

    echo '<div class="product__description">' . get_the_content() . '</div>';
}
add_action('woocommerce_shop_loop_item_title', 'addDescriptionOfProductInList', 12);
//add IMG
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 13);


//add OpenDivText
function addOpenDivText()
{

    echo '<div class="woocommerce-loop-product__infor-text">';
}
add_action('woocommerce_shop_loop_item_title', 'addOpenDivText', 14);
//add Categoty
function addCategoryOfProductInList()
{

    $product_cats = wp_get_post_terms(get_the_ID(), 'product_cat');

    if ($product_cats && !is_wp_error($product_cats)) {

        $single_cat = array_shift($product_cats); ?>

        <a class="mt-0 mb-2 " href="<?php echo get_term_link($single_cat->term_id); ?>"> <span class="fw-bold"><?php echo $single_cat->name; ?></span></a>

    <?php }
}
add_action('woocommerce_shop_loop_item_title', 'addCategoryOfProductInList', 15);

//add Description Of Product In List
add_action('woocommerce_shop_loop_item_title', 'addDescriptionOfProductInList', 16);

// //Change priority ADD TO CART
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 4);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);




//update Cart Badges
add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments)
{
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
    <div id="mini-cart-count"><?php echo $items_count ? $items_count : '0'; ?></div>
<?php
    $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}




//change UI plus minas button 
add_action('woocommerce_after_add_to_cart_quantity', 'ts_quantity_plus_sign');

function ts_quantity_plus_sign()
{
    echo '<button type="button" class="plus" >+</button>';
}

add_action('woocommerce_before_add_to_cart_quantity', 'ts_quantity_minus_sign');

function ts_quantity_minus_sign()
{
    echo '<button type="button" class="minus" >-</button>';
}

add_action('wp_footer', 'ts_quantity_plus_minus');

function ts_quantity_plus_minus()
{
    // To run this on the single product page
    if (!is_product()) return;
?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $('form.cart').on('click', 'button.plus, button.minus', function() {

                // Get current quantity values
                var qty = $(this).closest('form.cart').find('.qty');
                var val = parseFloat(qty.val());
                var max = parseFloat(qty.attr('max'));
                var min = parseFloat(qty.attr('min'));
                var step = parseFloat(qty.attr('step'));

                // Change the value if plus or minus
                if ($(this).is('.plus')) {
                    if (max && (max <= val)) {
                        qty.val(max);
                    } else {
                        qty.val(val + step);
                    }
                } else {
                    if (min && (min >= val)) {
                        qty.val(min);
                    } else if (val > 1) {
                        qty.val(val - step);
                    }
                }

            });

        });
    </script>
<?php
}

// display text when price = 0
add_filter('woocommerce_empty_price_html', 'custom_for_price');

function custom_for_price()
{
    return "<span class='text-dark fw-bold'>Contact Us</span>";
}
