<!--header部分/header.phpを読み込みテンプレートタグ-->
<?php get_header(); ?>

      <main>
    <!--img部分-->
        <div class="p-top__image-container p-top-achive__image-container">
          <img class="p-top__image p-top-achive__image" src="/images/page-title_arcive.jpg">
          <h2 class="p-top__title p-top-achive__title">Menu:</h2>
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
    <!--card-->
        <article class="p-menu-card__wrapper">
    <!--imgが入る-->
          <div class="p-menu-card__img"></div>
          <div class="p-menu-card__container">
            <section class="p-menu-card__content">
              <h3 class="p-menu-card__name">チーズバーガー</h3>
              <dl>
                <dt class="p-menu-card__title">小見出しが入ります</dt>
                <dd class="p-menu-card__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。
                  テキストが入ります。テキストが入ります。テキストが入ります。
                  テキストが入ります。テキストが入ります。テキストが入ります。
                </dd>
              </dl>
            </section>
            <p class="p-menu__button">詳しく見る<a href="#"></a></p>
          </div>
        </article>
        <article class="p-menu-card__wrapper">
          <!--imgが入る-->
                <div class="p-menu-card__img"></div>
                <div class="p-menu-card__container">
                  <section class="p-menu-card__content">
                    <h3 class="p-menu-card__name">ダブルチーズバーガー</h3>
                    <dl>
                      <dt class="p-menu-card__title">小見出しが入ります</dt>
                      <dd class="p-menu-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                      </dd>
                    </dl>
                  </section>
                  <p class="p-menu__button">詳しく見る<a href="#"></a></p>
                </div>
              </article>
              <article class="p-menu-card__wrapper">
                <!--imgが入る-->
                      <div class="p-menu-card__img"></div>
                      <div class="p-menu-card__container">
                        <section class="p-menu-card__content">
                        <h3 class="p-menu-card__name">スペシャルチーズバーガー</h3>
                        <dl>
                          <dt class="p-menu-card__title">小見出しが入ります</dt>
                          <dd class="p-menu-card__text">
                            テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。
                          </dd>
                        </dl>
                        </section>
                        <p class="p-menu__button">詳しく見る<a href="#"></a></p>
                      </div>
                    </article>
                <!--ページネーション-->
                <div class="p-pagenation__container">
                  <p><a href="#" class="p-arrow__tablet p-arrow-1">page1/10</a></p>
                  <nav>
                    <ul class="p-pagenation">
                      <li>
                        <a href="#" class="p-arrow p-arrow-1">前へ</a>
                      </li>
                      <li><a href="#" class="p-pagenation-number__link isActive">1</a></li>
                      <li><a href="#" class="p-pagenation-number__link">2</a></li>
                      <li><a href="#" class="p-pagenation-number__link">3</a></li>
                      <li><a href="#" class="p-pagenation-number__link">4</a></li>
                      <li><a href="#" class="p-pagenation-number__link">5</a></li>
                      <li><a href="#" class="p-pagenation-number__link">6</a></li>
                      <li><a href="#" class="p-pagenation-number__link">7</a></li>
                      <li><a href="#" class="p-pagenation-number__link">8</a></li>
                      <li><a href="#" class="p-pagenation-number__link">9</a></li>
                      <li>
                        <a href="#" class="p-arrow p-arrow-2">次へ</a>
                      </li>
                    </ul>
                  </nav>
                </div>
      </main>
    </div><!--▲▲p-main__container▲▲-->
  <!--スライドメニュー-->
  <?php get_sidebar(); ?>
  </div><!--▲▲p-whole__container▲▲-->
<!--footer-->
<?php get_footer(); ?>
