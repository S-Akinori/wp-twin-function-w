<?php get_header(); ?>
  <div class="c-fv p-top-fv">
    <div class="c-fv__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-top1.jpg" alt="ブログ" /></div>
    <div class="c-fv__text-container ">
      <div class="c-fv__text-container__title">ブログ</div>  
    </div>
  </div>
  <div class="c-page-section container">
    <div class="md:flex">
      <div class="md:flex flex-wrap bg-main2 mb-12 md:mb-0">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="md:w-1/2 p-4">
            <a href="<?php the_permalink() ?>" class="block h-full">
              <div>
                <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(); ?>">
              </div>
              <div class="bg-white p-4">
                <p class="text-sm"><?php the_date() ?></p>
                <h2 class="text-main"><?php the_title() ?></h2>
                <p><?php echo esc_html(get_the_excerpt()); ?></p>
              </div>
            </a>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="md:w-1/2 md:pl-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php if(function_exists("pagination")) {
      pagination();
  } ?>
<?php get_footer(); ?>