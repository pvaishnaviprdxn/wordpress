<?php 
    /*
    Template Name:About
    */
    get_header(); 

    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <!--Banner Image-->
            <div class="wrapper banner">
                <?php the_post_thumbnail('medium'); ?>
                <h2><?php the_field('maintitle'); ?></h2>
            </div>
            <!--Banner Image -->
            <!--quote section -->
            <div class="quote">
              <div class="wrapper">
                <p><?php the_field('quote'); ?></p>
              </div>
            </div>
            <!--quote section end-->
            <section>
                <div class="wrapper">
                    <?php 
                        if(have_rows('flexiblecontent')) {
                            while(have_rows('flexiblecontent')) {
                                the_row(); 
                                if(get_row_layout() == 'description') { ?>
                                    <div class="about-healthycollab">
                                        <h3><?php the_sub_field('healthytitle');?></h3>
                                        <?php the_sub_field('healthyuscollaboration'); ?>
                                        <?php if (get_sub_field('link')) { ?>
                                        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link'); ?></a>
                                        <?php } ?>
                                        
                                    </div>
                                <?php } ?>
                                <?php 
                                    if(get_row_layout() == 'imagewithcontent') { ?> 
                                    <?php
                                        $desImage = get_sub_field('descriptiveimage'); 
                                        $desTitle = get_sub_field('contenttitle');
                                        $desPara = get_sub_field('contentparagraph');
                                        $desLink = get_sub_field('showmorelink');
                                        $imgPosition = get_sub_field('imageposition');
                                    ?>
                                    <div class="content-film">
                                        <figure class="image-<?php echo $imgPosition; ?>">
                                            <img src="<?php echo $desImage['url']?>" style="width:250px;height:250px;">
                                        </figure>
                                        <div class="film-desc">
                                        <h3><?php echo $desTitle; ?></h3>
                                        <p class="film-content"><?php echo $desPara; ?></p>
                                        <?php 
                                        if($desLink) { ?>
                                            <a href="<?php echo $desLink['url'];?>"><?php echo $desLink['title']; ?></a>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    </ul>
                                <?php } ?>
                                <?php if(get_row_layout() == 'social') { ?>
                                    <div class="update">
                                      <span><?php the_sub_field('updatestext'); ?></span>
                                      <?php $args=array('theme_location' => 'social') ?>
                                      <?php wp_nav_menu($args); ?>
                                      <?php the_sub_field('contactstext'); ?>
                                    </div>
                                <?php } ?>
                            <?php }  
                        } 
                    ?>
                </div>
            </section>
        <?php }
    } 
    else {
        echo "No posts";
    }
    get_footer();
?>