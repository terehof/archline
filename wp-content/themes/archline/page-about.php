<?php
/*
Template Name: about-us
*/
?>
<? get_header(); ?>

<div class="wrapper">
    <header id="top">
        <div class="row">
            <div class="col-md-6">
                <div class="page-name">
                    О нас
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="clearfix"></div>
    </header>
    <div class="about_us">
        <div class="row">
            <div class="col-md-6">
                <div class="description-about col-md-12">
                    <?php $title1 = get_field('title_1');
                    if($title1) { ?>
                        <h3><?php echo $title1; ?></h3>
                    <?php } ?>
                    <?php $text1 = get_field('text_1');
                    if($text1) { ?>
                        <?php echo $text1; ?>
                    <?php } ?>
                </div>
                <div class="description-about col-md-12">
                    <?php $title2 = get_field('title_2');
                    if($title2) { ?>
                        <h3><?php echo $title2; ?></h3>
                    <?php } ?>
                    <?php $text2 = get_field('text_2');
                    if($text2) { ?>
                        <?php echo $text2; ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="image-about">
                        <div>
                            <?php $photo1 = get_field('photo_1');
                            if($photo1) { ?>
                                <img src="<?php echo $photo1; ?>" alt="">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="info text-right">
                        <?php $name1 = get_field('name_1');
                        if($name1) { ?>
                            <h4><?php echo $name1; ?></h4>
                        <?php } ?>
                        <?php $position1 = get_field('position_1');
                        if($position1) { ?>
                            <p class="position"><?php echo $position1; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="image-about">
                        <div>
                            <?php $photo2 = get_field('photo_2');
                            if($photo2) { ?>
                                <img src="<?php echo $photo2; ?>" alt="">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="info text-right">
                        <?php $name2 = get_field('name_2');
                        if($name2) { ?>
                            <h4><?php echo $name2; ?></h4>
                        <?php } ?>
                        <?php $position2 = get_field('position_2');
                        if($position2) { ?>
                            <p class="position"><?php echo $position2; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="clearfix">
        <div class="text-left col-sm-6 col-md-6">
            <?php echo get_theme_mod('copyright', ''); ?>
        </div>
        <div class="text-right col-sm-6 col-md-6">
            <?php echo get_theme_mod('footer_contacts', ''); ?>
        </div>
    </footer>
</div>


<? get_footer(); ?>
