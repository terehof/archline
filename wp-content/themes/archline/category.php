<? get_header(); ?>

<div class="wrapper">
    <header>
        <div class="page-name">
            Проекты
        </div>
        <ul class="header-list projects">
            <?php
            $terms = get_terms('category');
            $count = count($terms);
            if($count > 0){
                foreach ($terms as $term) {
                    if ($term->term_id != 1) {
                        echo '<li><a href="'.get_category_link( $term->term_id ).'" class="'.(($term->term_id == get_query_var('cat'))? 'active': '').'">'.$term->name.'</a><p></p></li><li class="slash"></li>';
                    }
                }
            }
            ?>
        </ul>
        <div class="clearfix"></div>
    </header>
    <div class="projects-page">
        <div class="row">
            <?php
                $cat_id = get_query_var('cat');
                $args = array( 'category' => $cat_id, 'numberposts'=>100 );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post );?>

                    <div class="project-item project1 col-md-3 col-sm-6 col-xs-12" <?php $projPhoto = get_field('project_photo-main'); if($projPhoto) { echo 'style="background-image: url('.$projPhoto.');"'; } ?>>
                        <div class="project-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <div>
                                    <h3><?php the_title(); ?></h3>
                                    <?php $projType = get_field('project_type');
                                    if($projType) {
                                        echo '<p>'.$projType.'</p>';
                                    } ?>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach;
            wp_reset_postdata();?>
        </div>



    </div>

</div>


<? get_footer(); ?>
