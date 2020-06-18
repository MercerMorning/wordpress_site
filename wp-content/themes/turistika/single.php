<?php
get_header();
the_post();
?>
    <!-- header_end-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page">
                    <?php the_title() ?>
                </div>
                <div class="article-image"><?php the_post_thumbnail('mysize'); ?></div>
                <div class="article-info">
                    <div class="post-date"><?php the_time('d.m.Y'); ?></div>
                </div>
                <div class="article-text">
                    <?php
                    the_content();
                    ?>
                </div>
                <div class="article-pagination">
                    <?php
                    $previous = get_previous_post(); //get_next_post()
                    if ($previous) :
                        ?>
                        <div class="article-pagination__block pagination-prev-left"><a href="#"
                                                                                       class="article-pagination__link"><i
                                        class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                            <div class="wrap-pagination-preview pagination-prev-left">
                                <div class="preview-article__img"><?php get_the_post_thumbnail($previous->ID, array(160, 109)); ?></div>
                                <div class="preview-article__content">
                                    <div class="preview-article__info"><a
                                                href="<?php echo get_permalink($previous->ID) ?>"
                                                class="post-date"><?php echo get_the_time('d.m.Y', $previous->ID) ?></a>
                                    </div>
                                    <div class="preview-article__text"><?php echo $previous->post_title ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php
                    $next = get_next_post();
                    if ($next) :
                        ?>
                        <div class="article-pagination__block pagination-prev-right"><a href="#" class="article-pagination__link">Сдедующая
                                статья<i class="icon icon-angle-double-right"></i></a>
                            <div class="wrap-pagination-preview pagination-prev-right">
                                <div class="preview-article__img"><?php get_the_post_thumbnail($next->ID, array(160, 109)); ?></div>
                                <div class="preview-article__content">
                                    <div class="preview-article__info"><a href="<?php echo get_permalink($next->ID) ?>"
                                                                          class="post-date"><?php echo get_the_time('d.m.Y', $previous->ID) ?></a>
                                    </div>
                                    <div class="preview-article__text"><?php echo $next->post_title ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <!-- sidebar-->
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
    <footer class="main-footer">
        <div class="content-footer">
            <div class="bottom-menu">
                <ul class="b-menu__list">
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Главная</a></li>
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Полезная информация</a>
                    </li>
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Последние акции</a></li>
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">О сервисе</a></li>
                </ul>
            </div>
            <div class="copyright-wrap">
                <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2016</a></div>
            </div>
        </div>
    </footer>
    </div>
<?php
get_footer();