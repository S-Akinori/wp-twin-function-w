<?php get_header(); ?>
<article class="p-page">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="mx-auto container">
    <h1><?php the_title(); ?></h1>
    <div class="c-section">
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile; endif ?>
</article>
<?php get_footer(); ?>