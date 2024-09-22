</main>
<footer class="footer">
  <div class="container mx-auto">
    <div class="footer__top">
      <div class="md:flex items-center">
        <div class="flex items-center">
          <div class="c-logo mx-auto">
            <img class="mx-auto md:ml-0" src="<?= get_option('company0_logo'); ?>" alt="<?= get_option('company0_name'); ?>" />
          </div>
        </div>
        <div class="ml-auto">
          <nav class="footer__nav">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer',
            ));
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?= get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>