<?php get_header(); ?>

<main>
      <!--img部分-->
        <div class="p-top__image-container p-top-single__image-container p-top-page__image-container">
          <img class="p-top__image p-top-single__image p-top-page__image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/page-shop-img.png" alt="hero画像">
          <h2 class="p-top__title p-top-single__title"><?php the_title(); ?></h2>
        </div>
      <!--見出しh2-->
      <div class="p-section-single__container" id="p-section-single__wrapper">
        <?php the_content() ?>
      </div>
      </main>
    </div><!--▲▲p-main__container▲▲-->
  <!--スライドメニュー-->
  <?php get_sidebar(); ?>
  </div><!--▲▲p-whole__container▲▲-->
<!--footer-->
<?php get_footer(); ?>