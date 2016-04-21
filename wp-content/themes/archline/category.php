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
            <div class="project-item project1 col-md-3 col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item project2 col-md-3 col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item project1 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item project2 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-item project2 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item project1 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item project1 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item project2 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-item project1 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item project2 col-md-3  col-sm-6 col-xs-12">
                <div class="project-hidden">
                    <a href="#">
                        <div>
                            <h3>название проекта</h3>
                            <p>Жилой комплекс</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="project-item empty col-md-3 col-sm-6 col-xs-12"> </div>
            <div class="project-item empty col-md-3 col-sm-6 col-xs-12"> </div>
        </div>


    </div>

</div>


<? get_footer(); ?>
