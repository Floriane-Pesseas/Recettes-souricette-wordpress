<section class="main__articles__first">
      <h2 class="main__articles__first__title">
      <?php the_title(); ?></h2>
      <article class="main__articles__first__content">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="recette" class="main__articles__first__picture">
      <?php the_date();?> by <?php the_author(); ?>
      <?php the_content(); ?>
      </article>
</section>