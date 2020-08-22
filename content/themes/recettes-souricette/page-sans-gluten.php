<?php 

/*
Template Name: no gluten
*/
//Load of template header
get_header();

//Load categories of recipes like entree, dessert
get_template_part('template-parts/recipes-category');
?>

<section class="recipes__articles">
<?php
//Custom loop
//https://developer.wordpress.org/reference/classes/wp_query/
//instanciate WP_QUERY class (create object), search by tag
$query = new WP_Query( array( 'tag' => 'sans-gluten' ) );

if ($query->have_posts()): while 
($query->have_posts()) : $query->the_post();

?>
    <article>
    <div class="text">
    <h3 class="recipes__articles__title"><?php the_title() ?></h3>
    <p><?php the_excerpt()?></p>
    <a href="<?php the_permalink();?>">Lire la suite</a>
    </div>
    <img src="<?php the_post_thumbnail_url();?>" alt="recette" class="recipes__articles__picture">
   
    </article>
    <?php endwhile; endif; ?>   
</section>
<?php
//Load template footer
get_footer();
?>