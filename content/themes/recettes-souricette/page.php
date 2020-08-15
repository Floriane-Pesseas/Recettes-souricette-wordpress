<?php
//Load of template header
get_header();

//Loop to show the main recipe
if (have_posts()): while (have_posts()): the_post();
//Load of template part main article (promote recipe)
get_template_part('template-parts/page-content');
endwhile; endif;

//Load of template footer
get_footer();
?>