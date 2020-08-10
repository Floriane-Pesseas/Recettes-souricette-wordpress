<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta <?php bloginfo('charset')?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les petites recettes de Souricette</title>
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('public/css/style.css')?>"/>
</head>


<body>
  <div class="wrapper">


    <header class="header">
        <div class="header__title">
          <img src="content/themes/recettes-souricette/public/images/poele.png" alt="poele" class="header__firstpicture">
          <h1 class="header__title__main">
          <?php bloginfo('name')?></h1>
          <img src="content/themes/recettes-souricette/public/images/souris.png" alt="souris" class="header__secondpicture">
        </div>
        <h2 class="header__title__second">
        <?php bloginfo('description')?>
        </h2>
        <div class="header__navigation">
        <div class= "header__headings">  
          <span class="ui-button open-menu">
          <i class="fa fa-bars" aria-hidden="true"></i> 
          </span>
          <button class="header__login__button"><a href="account.html">Mon compte</a></button>
          <button class="header__login__button">S'inscrire</button>
        </div>
        <div class="header__menu">
          <span class="ui-button close-menu">
          <i class="fa fa-times-circle-o" aria-hidden="true"></i>
          </span>
          <nav class="main-nav">
          <ul>
            <li class="main-nav__item">
            <a href="recipes.html">Recettes végétariennes</a>
            </li>
            <li class="main-nav__item">
            <a href="#">Recettes végétaliennes</a>
            </li>
            <li class="main-nav__item">
            <a href="#">Recettes sans gluten</a>
            </li>
            <li class="main-nav__item">
            <a href="#">Vos recettes</a>
            </li>
          </ul>
          </nav>
        </div>
      </div>
      <?php wp_head(); ?>
    </header>


    <main class="main">