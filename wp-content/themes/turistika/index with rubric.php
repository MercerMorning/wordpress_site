<!-- header_end-->
<?php
get_header();
?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content"><h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <div class="posts-list">
                <?php $arg_cat = get_categories([
                    'taxonomy' => 'category',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => 0,
                    'exclude' => '',
                    'include' => '',
                    // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                ]);
                $categories = get_categories($arg_cat);
                ?>
                <?php
                //                    $arg_posts = array(
                //                        'orderby'      => 'name',
                //                        'order'        => 'ASC',
                //                        'post_per_page' => 3,
                //                        'post_type' => 'post',
                //                        'post_status' => 'publish',
                //                        'cat' => $cat->id
                //                    );
                //                    $query = new WP_Query('cat=4');
                if ($categories) {
                    foreach ($categories as $cat) {
                        $arg_posts = array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'posts_per_page' => 3,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'cat' => $cat->cat_ID,
                        );
                        $query = new WP_Query($arg_posts);
                        echo $cat->name;
                    }
                }
                ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <!-- post-mini-->
                        <div class="post-wrap">
                            <div class="post-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
                            <div class="post-content">
                                <div class="post-content__post-info">
                                    <div class="post-date"><?php the_time('d.m.Y'); ?></div>
                                </div>
                                <div class="post-content__post-text">
                                    <div class="post-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <?php
                                    the_excerpt();
                                    ?>
                                </div>
                                <div class="post-content__post-control"><a href="<?php the_permalink(); ?>"
                                                                           class="btn-read-post">Читать далее >></a>
                                </div>
                            </div>
                        </div>
                        <!-- post-mini_end-->
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>
                <!--                    --><?php //if(have_posts()) :?>
                <!--                    --><?php //while(have_posts() ) : the_post();?>
                <!--                    <div class="post-wrap">-->
                <!--                        <div class="post-thumbnail">-->
                <?php //the_post_thumbnail('thumbnail'); ?><!--</div>-->
                <!--                        <div class="post-content">-->
                <!--                            <div class="post-content__post-info">-->
                <!--                                <div class="post-date">--><?php //the_time('d.m.Y');?><!--</div>-->
                <!--                            </div>-->
                <!--                            <div class="post-content__post-text">-->
                <!--                                <div class="post-title">-->
                <!--                                    --><?php //the_title();?>
                <!--                                </div>-->
                <!--                                --><?php
                //                                the_excerpt();
                //                                ?>
                <!--                            </div>-->
                <!--                            <div class="post-content__post-control"><a href="-->
                <?php //the_permalink();?><!--" class="btn-read-post">Читать далее >></a></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    --><?php //endwhile;?>
                <!--                    --><?php //else: ?>
                <!--                        <p>Ничего не найдено</p>-->
                <!--                    --><?php //endif;?>
            </div>
            <div class="pagenavi-post-wrap">
                <?php echo paginate_links(); ?>
                <!--                    <a href="#" class="pagenavi-post__prev-postlink"><i class="icon icon-angle-double-left"></i></a><span class="pagenavi-post__current">1</span><a href="#" class="pagenavi-post__page">2</a><a href="#" class="pagenavi-post__page">3</a><a href="#" class="pagenavi-post__page">...</a><a href="#" class="pagenavi-post__page">10</a><a href="#" class="pagenavi-post__next-postlink"><i class="icon icon-angle-double-right"></i></a>-->
            </div>
        </div>
        <!-- sidebar-->
        <?php
        get_sidebar();
        ?>
    </div>
</div>
<?php
get_footer();