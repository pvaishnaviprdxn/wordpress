<?php 
get_header();
$args = array('post_type' => 'products', 'posts_per_page' => '-1');
$myQuery = new WP_Query($args);
if($myQuery->have_posts()) {
    while($myQuery->have_posts()) {
        $myQuery->the_post(); ?>
        <div class="wrapper">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php echo get_the_content(); ?>
        </div>
        <?php
    }  
}
get_footer();
?>