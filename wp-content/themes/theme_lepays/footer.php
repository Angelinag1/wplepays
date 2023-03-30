<?php wp_footer(  ); ?>
<footer class="bg-dark row text-white">
<form method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="contact-form m-5 col-5">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" required>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
  </div>
  <input type="hidden" name="action" value="custom_contact_form">
  <?php wp_nonce_field( 'custom_contact_form_nonce', 'custom_contact_form_nonce' ); ?>
  <button type="submit" class="btn btn-success">Envoyer</button>
</form>

</footer>
    
</body>
</html>