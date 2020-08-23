</main>


    <footer class="footer">
    <h3 class="contact-form__title">Formulaire de contact</h3>
      <?php echo do_shortcode('[contact-form-7 id="44" title="Formulaire de contact 1"]');?>
      <div class="contactform-newsletterform">
      <form class="contact-form">
        
        
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
  <?php wp_footer(); ?>
</body>
</html>