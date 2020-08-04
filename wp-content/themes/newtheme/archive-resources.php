<?php 
get_header(); ?>
<div class="wrapper">
<?php 
$cat_args = array(
    'exclude' => array(1),
    'option_All' => 'All',
);
$categories = get_categories($cat_args); 

foreach($categories as $cat) { ?>
    <li>
        <a id="cat-link" data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name;?></a>
    </li>
<?php } ?>
</div>

<section class="js-filter">
    <div class="wrapper">
        <?php 
            $args_post = array(
                'post_type' => 'resources',
                'posts_per_page' => '-1',
            );
            $query = new WP_Query($args_post);
            if ($query->have_posts()) {
                while ($query->have_posts()) { 
                    $query->the_post(); ?>
                    <div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>  
                <?php }
            } 
            wp_reset_postdata();
        ?>
    </div>
</section>
<?php get_footer();
?>