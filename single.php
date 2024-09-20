<?php get_header(); ?>
<article class="p-single">
  <div class="p-4 mx-auto container">
    <div class="md:flex">
      <div class="md:w-2/3 md:p-4">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="text-center"><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail()) : ?>
        <div class="img-container text-center py-2">
          <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
        </div>
        <?php endif ; ?>
        <div>
          <?php the_content(); ?>
        </div>
        <p><?php the_date(); ?></p>
        <?php endwhile; endif ?>
      </div>
      <div class="md:w-1/3 md:p-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</article>
<?php get_footer(); ?>