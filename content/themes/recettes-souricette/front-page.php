<?php

/*
Template Name: accueil
*/
//Load of template header
get_header();

$args = array(
    'orderby'        => 'ASC',
    'posts_per_page' => '1',
 
);
$query_last_post = new WP_Query( $args );

if ($query_last_post->have_posts()): while 
($query_last_post->have_posts()) : $query_last_post->the_post();

?>
<h2 class="main__articles__first__title">La recette du moment</h2>
 <article>
 <img src="<?php the_post_thumbnail_url();?>" alt="recette" class="recipes__frontpage">
    <div class="text">
    <h3 class="recipes__articles__title"><?php the_title() ?></h3>
    <p><?php the_excerpt()?></p>
    <a href="<?php the_permalink();?>">Lire la suite</a>
    </div>
   
   
    </article>   
<?php endwhile; endif; ?>   

<?php
//Load of template footer
get_footer();
?>