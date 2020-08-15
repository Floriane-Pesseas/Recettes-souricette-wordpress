<h2 class="recipe__category">Recettes végétariennes</h2>
        <nav class="recipe__nav">
            <ul>
              <div class="first-categories">
                <li class="recipe__nav__item">
                <a href="#">Apéritif</a>
                </li>
                <li class="recipe__nav__item">
                <a href="#">Entrée</a>
                </li>
              </div>
              <div class= "second-categories">
                <li class="recipe__nav__item">
                <a href="#">Plat principal</a>
                </li>
                <li class="recipe__nav__item">
                <a href="#">Dessert</a>
                </li>
             </div>
            </ul>
        </nav>
        <section class="recipes__articles">
        <?php
        //Custom loop
        //Define settings
        $args = [
          'post-type' => 'post', //search articles
          'post_per_page' => 3, //number of articles to display
          'order' => 'ASC' // 123 abc

        ];
        //instanciate WP_QUERY class
        $wpqueryArticles = new WP_Query($args);

        if ($wpqueryArticles->have_posts()): while 
        ($wpqueryArticles->have_posts()) : $wpqueryArticles->the_post();

        ?>
            <article>
            <div class="text">
            <h3 class="recipes__articles__title"><?php the_title() ?></h3>
            <p><?php the_excerpt()?></p>
            <a href="#">Lire la suite</a>
            </div>
            <img src="<?php the_post_thumbnail_url();?>" alt="recette" class="recipes__articles__picture">
            </article>
           
        </section>
      <?php endwhile; endif; ?>
    