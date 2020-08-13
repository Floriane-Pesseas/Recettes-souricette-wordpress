<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta <?php bloginfo('charset')?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>


<body>
  <div class="wrapper">


    <header class="header">
        <div class="header__title">
        <img src="<?php bloginfo('template_url'); ?>/public/images/poele.png" alt="poele" class="header_firstpicture">
          <h1 class="header__title__main">
          <?php bloginfo('name')?></h1>
          <img src="<?php bloginfo('template_url'); ?>/public/images/souris.png" alt="poele" class="header_secondpicture">
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

          <?php

          wp_nav_menu(['theme_location' => 'main'])
          ?>


          </nav>
        </div>
      </div>
      
    </header>


    <main class="main">