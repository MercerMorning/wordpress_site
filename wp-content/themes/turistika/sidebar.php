<div class="sidebar">
    <?php if (is_active_sidebar('calendar')) : ?>
        <?php dynamic_sidebar('calendar'); ?>
    <?php endif; ?>
    <?php if ($tags = get_terms(array('taxonomy' => 'post_tag', 'hide_empty' => false))) : ?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <?php foreach ($tags as $tag) : ?>
                        <li class="tags-list__item"><a href="<?php echo get_term_link($tag); ?>"
                                                       class="tags-list__item__link"><?php echo $tag->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории акций</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php if ($categories = get_terms(array('taxonomy' => 'category', 'hide_empty' => false, 'exclude' => 13))) : ?>
                    <?php foreach ($categories as $category) : ?>
                        <li class="category-list__item">
                            <a href="<?php echo get_term_link($category); ?>" class="category-list__item__link">
                                <?php echo $category->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>