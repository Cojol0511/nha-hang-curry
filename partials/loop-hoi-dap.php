<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;
?>
<div class="break-crumb w-100 float-left">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div>
<div class="page-content w-100 float-left mt-5 mb-5">
    <div class="container">
        <div class="accordion" id="accordionFaqs">
            <?php $list_faqs = get_field('list_faqs'); ?>
            <?php foreach($list_faqs as $key => $faqs){ ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?=$key;?>">
                    <button class="accordion-button <?php if($key != 0){echo 'collapsed';} ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$key;?>" aria-expanded="true" aria-controls="collapse<?=$key;?>">
                    <?php echo $faqs['title']; ?></button>
                </h2>
                <div id="collapse<?=$key;?>" class="accordion-collapse collapse <?php if($key == 0){ echo 'show';}?>" aria-labelledby="heading<?=$key;?>" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                        <?php echo $faqs['content']; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>