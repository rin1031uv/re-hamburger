<!--header部分/header.phpを読み込みテンプレートタグ-->
<?php get_header(); ?>
      <main>
    <!--img部分-->
        <div class="p-top__image-container">
          <img class="p-top__image" src= "<?php echo get_stylesheet_directory_uri(); ?>/images/mainvisual.jpg" alt="hero画像">
          <h2 class="p-top__title">404 Page Not Found</h2>
        </div>
        <h3>お探しのページは見つかりませんでした。</h3>
        <p>申し訳ございません。お探しのページが見つかりませんでした。</p>
      </main>
    </div><!--▲▲p-main__container▲▲-->
  <!--スライドメニュー-->
  <?php get_sidebar(); ?>

  </div><!--▲▲p-whole__container▲▲-->
  <!--footer/footer.phpを読み込むテンプレートタグ-->
  <?php get_footer(); ?>


