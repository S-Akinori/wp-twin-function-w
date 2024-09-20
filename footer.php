</main>
<footer class="footer">
  <div class="container mx-auto">
    <div class="footer__top mb-4">
      <nav>
        <ul class="footer__link-list">
          <li class="footer__link-list__item"><a class="js-anchorLink" href="">About</a></li>
          <li class="footer__link-list__item"><a class="js-anchorLink" href="">Service</a></li>
          <li class="footer__link-list__item"><a class="js-anchorLink" href="">Works</a></li>
          <li class="footer__link-list__item"><a class="js-anchorLink" href="">News</a></li>
          <li class="footer__link-list__item"><a class="js-anchorLink" href="">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="footer__bottom">
      <div class="text-center text-xs md:text-left">&copy; MASPETH Inc.</div>
      <div><a href=""><img src="<?= get_template_directory_uri() . '/assets/images/icon-ig.png'; ?>" width="20" height="20" alt=""></a></div>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>