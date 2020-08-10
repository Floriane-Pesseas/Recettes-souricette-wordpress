</main>


    <footer class="footer">
      <div class="contactform-newsletterform">
      <form class="contact-form">
        <h3 class="contact-form__title">Formulaire de contact</h3>
        <div class= "contact-form__fields">
          <input type="text" class="contact-form__input" placeholder="Prénom NOM">
          <input type="text" class="contact-form__input" placeholder="Votre Email">
          <input type="text" id ="textarea" class="contact-form__input" placeholder="Votre message">
          <button class="contact-form__button"><a href="#">Envoyer</a></button>
        </div>
      </form>
      <div class="newsletter">
        <h3 class="newsletter__title">Newsletter</h3>
      <div class="newsletter__suscribe">
        <input type="text" class="newsletter__input" placeholder="Votre Email">
        <button class="newsletter__button"><a href="#">S'abonner</a></button>
      </div> 
      </div>
    </div>
      <div class="links">
        <ul class="links__list">
          <li class="links__contact-form"><a href="#">Formulaire de contact</a></li>
          <li class="links__newsletter"><a href="#">Newsletter</a></li>
          <li class="links__legal-mentions"><a href="#">Mentions légales</a></li>
            <div class="social-nav">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
            </div>
        </ul>
      </div>
    </footer>

    
  </div>
  <script src="js/app.js"></script>
  <?php wp_footer(); ?>
</body>
</html>