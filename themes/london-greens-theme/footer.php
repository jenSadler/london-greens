<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h2>Navigation</h2>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container_class' => 'footer-nav' ) );
            ?>
        </div>
      <div class="col-sm-12 col-md-6">
        <h2>Contact Us</h2>
      <a href="mailto:Londonnorthcentre@gpo.ca">Londonnorthcentre@gpo.ca</a>
      </div>
    </div>
  </div>
</footer>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
<?php wp_footer(); ?>
</body>
 
</html>
