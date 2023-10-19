<?php get_header(); ?>
      <main>
    <!--img部分-->
        <div class="p-top__image-container p-top-achive__image-container">
          <img class="p-top__image p-top-achive__image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/page-title_arcive.jpg">
          <h2 class="p-top__title p-top-achive__title">Search:</h2>
          <h3 class="p-top-archive__subtitle"><?php the_search_query(); ?></h3>
        </div>
    <!--説明文エリア-->
        <article class="p-menu-introduction__container">
          <h2 class="p-menu-introduction__title">小見出しが入ります</h2>
          <p class="p-menu-introduction__text">
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </article>
<!--▼▼ページネーション▼▼-->
<div class="p-pagenation__container">
<!--▼▼card▼▼-->
<div>
<!--▼▼投稿▼▼-->
    <div>
    <?php if(have_posts()): 
      while (have_posts()): the_post(); ?>
    <!--繰り返す内容-->
      <article class="p-menu-card__wrapper">
    <!--▼▼img（サムネイル）入る▼▼-->
        <div class="p-menu-card__img">
          <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/images/archive_card.png" alt="" class="wp-post-image p-menu-card__img">
          <?php endif; ?>
        </div>
    <!--▲▲img（サムネイル）入る▲▲-->
        <div class="p-menu-card__container">
        <section class="p-menu-card__content">
    <!--▼▼タイトル入る▼▼-->
            <h1>
            <?php
            //タイトルがある時且つ13文字以上の時タイトルを13文字取得、後ろは…で省略して表示
            if(get_the_title() &&mb_strlen($post->post_title, 'UTF-8')>13): {
              mb_substr($post->post_title, 0, 13, 'UTF-8');
              //処理を書く
              echo mb_substr($post->post_title, 0, 13, 'UTF-8').'...';} ?>
            <? //タイトルがある時且つ13文字以下の時タイトルを取得して表示
            elseif (get_the_title() &&mb_strlen($post->post_title, 'UTF-8') <= 13): {
            echo get_the_title();} ?>
            <?php wp_link_pages(); ?>
            <?php else: ?> 
            <p>タイトル未登録</p>
            <?php endif; ?>
            </h1>
    <!--▲▲タイトル入る▲▲-->
          <?php the_excerpt(); ?>
        </section>
        <p class="p-menu__button"><a href="<?php the_permalink(); ?><?php echo get_post_field( 'post_name', get_the_ID()); ?>">詳しく見る</a></p>
        </div>
      </article>
      <?php endwhile; ?>
      <?php else: ?>
        <P>お探しの商品は見つかりませんでした。</P>
    <?php endif; ?>
    </div>
<!--▲▲投稿▲▲-->
    </div>
<!--▲▲card▲▲-->
<?php
if(function_exists('wp_pagenavi')):
  wp_pagenavi();
  endif;
?>
    </div>
  </main>
</div><!--▲▲p-main__container▲▲-->
  <!--スライドメニュー-->
  <?php get_sidebar(); ?>
  </div><!--▲▲p-whole__container▲▲-->
<!--footer-->
<?php get_footer(); ?>