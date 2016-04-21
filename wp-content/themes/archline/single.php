<? get_header(); ?>

<div class="wrapper clearfix">
    <header id="top">
        <a class="arrow-back" onclick="window.history.back();">

        </a>
        <div class="page-name">
            <?php the_title(); ?>
        </div>
        <ul class="header-list project-page clearfix">
            <?php $projType = get_field('project_type');
            if($projType) { ?>
                <li class="slash"></li>
                <li>
                    <a href="#">
                        <?php echo $projType; ?>
                    </a>
                    <p></p>
                </li>
            <?php } ?>
        </ul>
        <?php $projFile = get_field('project_file');
        if($projType) { ?>
            <a href="<?php echo $projFile ?>" class="download" target="_blank"></a>
        <?php } ?>

        <div class="clearfix"></div>
    </header>
    <div class="project-description">
        <div class="image-big col-md-12">
            <?php $projPhotoMain = get_field('project_photo-main');
            if($projPhotoMain) {
                echo '<img src="'.$projPhotoMain.'" alt="image" style="min-height: 500px;" >';
            } ?>
        </div>
        <div class="clearfix"></div>
        <?php $projGoal = get_field('project_goal');
        if($projGoal) { ?>
            <div class="task col-md-7">
                <h3>
                    Задача
                </h3>
                <p>
                    <?php echo $projGoal; ?>
                </p>
            </div>
        <?php  } ?>
        <div class="theses col-md-5">
            <ul>
                <?php $projType = get_field('project_type');
                if($projType) { ?>
                    <li class="theses-li"><span class="theses-name">Объект</span><span class="thesis-value"><?php echo $projType ?></span></li>
                <?php } ?>

                <?php $projSquare = get_field('project_square');
                if($projSquare) { ?>
                    <li class="theses-li"><span class="theses-name">Площадь</span><span class="thesis-value"><?php echo $projSquare ?></span></li>
                <?php } ?>

                <?php $projDesignTime = get_field('project_design-time');
                if($projDesignTime) { ?>
                    <li class="theses-li"><span class="theses-name">Срок проектирования</span><span class="thesis-value"><?php echo $projDesignTime ?></span></li>
                <?php } ?>

                <?php $projYear = get_field('project_year');
                if($projYear) { ?>
                    <li class="theses-li"><span class="theses-name">Год реализации</span><span class="thesis-value"><?php echo $projYear ?></span></li>
                <?php } ?>
            </ul>
        </div>
        <div class="clearfix"></div>
        <?php $projPhotosVert = get_field('project_photo-vertical');
            if($projPhotosVert) { ?>
                <?php  foreach ($projPhotosVert as $photo) { ?>
                    <div class="image-small col-md-6"><img src="<?php echo $photo['url'];?>" alt=""></div>
                <?php }
        } ?>
        <div class="clearfix"></div>

        <?php $projIdeaImplement = get_field('project_idea-implem');
        if($projIdeaImplement) { ?>
            <div class="idea col-md-7">
                <h3>Идея и реализация</h3>
                <p>
                    <?php echo $projIdeaImplement; ?>
                </p>
            </div>
        <?php  } ?>

        <div class="clearfix"></div>


        <?php $projPhotosOther = get_field('project_photo-additional');
        if($projPhotosOther) { ?>
            <?php  foreach ($projPhotosOther as $photo) { ?>
                <div class="image-big col-md-12">
                    <img src="<?php echo $photo['url'];?>" alt="image">
                </div>
                <div class="clearfix"></div>
            <?php } ?>
        <?php } ?>


        <div class="pre-footer clearfix">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <a href="#" onclick="window.history.back();" class="link link-back">
                    К списку проектов
                </a>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-12">
                <a class="link top-slide anchor" href="#top">
                    Подняться вверх
                </a>
            </div>
            <div class="forvard-div col-md-3 col-sm-4 col-xs-6">
                <?php next_post_link( '%link', 'Следующий проект', TRUE ); ?>
<!--                --><?php //next_post_link( '<a href="%link" class="link link-forvard">Следующий проект</a>' ); ?>
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
