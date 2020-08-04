<?php 
    get_header();
    $title = get_field('mainpagetitle');
    $getFilmMaker = get_field('filmmaker');
    $summaryLabel = get_field('summaryLabel');
    $summary = get_field('summary');
    $images = get_field('singleFilmGallery');
    $featureImage = get_field('featureImage')
?>
    <div class="wrapper">
        <div class="media">
            <?php if($featureImage) { ?>
                <div class="film-gallery">
                <figure><img src="<?php echo $featureImage; ?>"></figure>
                </div>
            <?php } ?>
            <?php if($images) { ?>
                <div class="film-gallery">
                    <?php foreach($images as $image) { ?> 
                        <figure class="films-images"><img src="<?php echo $image['sizes']['thumbnail'];?>"></figure>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="brief-about-film">
            <?php echo the_title(); ?>
            <?php echo the_excerpt(); ?>
        </div>
        <?php if($title) { ?>
          <h2><?php echo $title; ?></h2>
        <?php } ?>
        <?php if($getFilmMaker) { 
            $filmMaker = array_keys($getFilmMaker);
            for($i=0;$i<count($getFilmMaker);$i++) {
                foreach($getFilmMaker[$filmMaker[$i]] as $key => $value) { ?>
                    <div class="director" style="text-transform:capitalize;display:inline-block;">
                        <span style="display:block;padding-bottom:5px"><?php echo $key; ?></span>
                        <span><?php echo $value; ?></span>
                    </div>
                <?php }
            }
        } ?>
        <?php if($summaryLabel) { ?> 
            <h2><?php echo $summaryLabel; ?></h2>
            <p><?php echo $summary; ?></p>
        <?php } ?>
    </div>
<?php get_footer();
?>