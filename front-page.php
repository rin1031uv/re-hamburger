<!--header部分/header.phpを読み込みテンプレートタグ-->
<?php get_header(); ?>

      <main>
    <!--img部分-->
        <div class="p-top__image-container">
          <img class="p-top__image" src= "<?php echo get_stylesheet_directory_uri(); ?>/images/mainvisual.jpg" alt="hero画像">
          <h2 class="p-top__title">ダミーサイト</h2>
        </div>
    <!--card-->
    <!--card-1-->
        <article class="c-card__container p-card__container">
        <a href="takeout">
          <article class="p-card__img01">
            <h2 class="p-card__title">Take Out</h2>
          <!--横棒入る-->
    <!--cardの中の白い部分-->
            <div class="p-card-inner__container">
              <dl class="p-card-inner__background">
                <dt class="p-card-inner__title">Take Out</dt>
                <dd class="p-card-inner__description">
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                </dd>
              </dl>

              <dl class="p-card-inner__background">
                <dt class="p-card-inner__title">Take Out</dt>
                <dd class="p-card-inner__description">
                当店のテイクアウトで利用できる商品を掲載しています
                当店のテイクアウトで利用できる商品を掲載しています
                </dd>
              </dl>
            </div>
          </article>
        </a>
    <!--card-2-->
        <a href="eatin">
          <article class="c-card__img p-card__img02">
            <h2 class="p-card__title">Eat In</h2>
          <!--横棒入る-->
    <!--cardの中の白い部分-->
            <div>
              <dl class="p-card-inner__background">
                <dt class="p-card-inner__title">Eat In</dt>
                <dd class="p-card-inner__description">
                店内でお食事いただけるメニューです
                店内でお食事いただけるメニューです
                店内でお食事いただけるメニューです
                </dd>
              </dl>

              <dl class="p-card-inner__background">
                <dt class="p-card-inner__title">Eat In</dt>
                <dd class="p-card-inner__description">
                店内でお食事いただけるメニューです
                店内でお食事いただけるメニューです
                店内でお食事いただけるメニューです
                </dd>
              </dl>
            </div>
          </article>
        </a>
        </article>
    <!--地図-->
        <section class="p-access__wrapper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d133147.6468014179!2d138.63762883931292!3d35.32752348607457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m5!1s0x6019629a42fdc899%3A0xa6a1fcc916f3a4df!2z5a-M5aOr5bGx44CB44CSNDE4LTAxMTIg6Z2Z5bKh55yM5a-M5aOr5a6u5biC5YyX5bGx!3m2!1d35.3606255!2d138.7273634!4m0!5e0!3m2!1sja!2sjp!4v1696055155742!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="p-access__container">
            <div class="p-access__description-container">
              <h2 class="p-access__title">見出しが入ります</h2>
              <p class="p-access__description">
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
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
            </div>
          </div>
        </section>
      </main>
    </div><!--▲▲p-main__container▲▲-->
  <!--スライドメニュー-->
  <?php get_sidebar(); ?>

  </div><!--▲▲p-whole__container▲▲-->
  <!--footer/footer.phpを読み込むテンプレートタグ-->
  <?php get_footer(); ?>


