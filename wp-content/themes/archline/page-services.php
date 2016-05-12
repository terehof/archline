<?php
/*
Template Name: services
*/
?>
<? get_header(); ?>

<div class="wrapper">
    <header id="top">
        <div class="row">
            <div class="col-md-6">
                <div class="page-name">
                    Услуги
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="clearfix"></div>
    </header>
    <div class="about_us">
        <div class="row">
            <div class="col-md-12">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
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
