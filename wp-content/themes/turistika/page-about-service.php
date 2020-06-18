<?php
get_header();
the_title();
echo get_post_field('post_content', $post->ID);
get_footer();