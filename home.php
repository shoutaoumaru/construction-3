<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <?php get_template_part('includes/c-header'); ?>      
    <main id="main-contents">
      <section class="top-view">
        <div class="hero">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div id="slider1" class="swiper-slide">
                <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top-view_3@sp.jpg" />
                <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top-view_6@pc.jpg" />
              </div>
              <div id="slider2" class="swiper-slide">
                <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top-view_7@sp.jpg" />
                <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top-view_8@pc.jpg" />
              </div>
            </div>
            <div class="hero__text">
              <h2 class="c-txt-lr">研鑽した技術で社会に貢献する。<br>挑戦する心を常に忘れない。</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- /.top-view -->
      <section class="p-message">
        <div class="p-message__wrap appear up">
          <div class="p-message__desc item">
            <h2 class="p-message__title">
              <p class="c-txt-lg">
                30年の歴史は<br>お客様との信頼の証
              </p>
            </h2>
            <div class="p-message__text">
              <p class="c-txt-sm">Riv建設は地元福岡市を中心とした福岡県北地域の、企業・官公庁から個人のお客様まで、民間・公共にかかわらず、様々な工事に携わっています。
                お客様とのお付き合いは「引渡したら終わり」ではなく、「お引き渡しが始まり」と考え、LCM（ライフサイクルマネジメント）の視点に立った、きめ細やかなアフターフォロー体制により、企業・個人を問わずリピーターを増やしております。
              </p>
            </div>
          </div>
          <div class="p-message__img-box item">
            <div class="p-message__img-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_1.jpg" alt="制作事例">
            </div>
            <div class="p-message__img-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_2.jpg" alt="制作事例">
            </div>
            <div class="p-message__img-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_4.jpg" alt="制作事例">
            </div>
            <div class="p-message__img-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_5.jpg" alt="制作事例">
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-message -->
      <section class="p-feature">
        <div class="c-container">
          <h2 class="p-feature__title clip-js left">
            <p class="c-txt-lg">Riv建設の強み</p>
            <p class="c-txt-sm">Adobantage Rivkensetsu</p>
          </h2>
          <ul class="p-feature__list appear up">
            <li class="p-feature__item item">
              <h3 class="c-txt-md">20年以上の歴史と実績</h3>
              <p class="c-txt-sm">
                2001年の創業以来、福岡県を中心として土木工事・溶接工事・電気工事の設計製作・据付・保守点検まで対応しています。「福岡県で土木工事と言えば、Riv建設」と言われるほどの、高い信頼が寄せられています。
              </p>
            </li>
            <li class="p-feature__item item">
              <h3 class="c-txt-md">時代のニーズに
                応える、技術力の蓄積と
                最新設備の導入</h3>
              <p class="c-txt-sm">
                土木工事・溶接工事・電気工事すべてにおいて洗練された技術、最新の設備を使っております。<br>Riv建設では、設備の設計から設置までを一括請負。この業種ですべての業務に対応できる日本国内でも大変珍しい会社です。
              </p>
            </li>
            <li class="p-feature__item item">
              <h3 class="c-txt-md">優秀な人材の育成</h3>
              <p class="c-txt-sm">
                Riv建設では、設備・技術に匹敵するほど重要となる「人材」について、労働環境の整備や人材育成などについての取組みを全力で行っております。将来の建設業を担う人材確保・育成、さらに魅力のある企業となれるよう継続した取り組みを行ってまいります。
              </p>
            </li>
          </ul>
        </div>
      </section>
      <!-- /.p-feature -->
      <section class="p-service">
        <div class="p-company">
          <div class="c-container appear up">
            <h2 class="p-company__title clip-js left">
              <p class="c-txt-lg">会社概要</p>
              <p class="c-txt-xs">Company</p>
            </h2>
            <div class="p-company__desc item">
              <p class="c-txt-sm">
                ダム・河川水門設備・橋梁・除塵設備・その他鋼構造物の設計から製作、据付と保守に至るまで一貫して対応いたします。「顧客満足の向上」を企業活動の中心に置き、お客様と接するすべての部門において信頼関係を構築し、ニーズにお応えできるよう、技術と品質の高度化に注力しています。
              </p>
            </div>
            <div class="readmore item">
              <a href="<?php echo esc_url( home_url('/company')); ?>" class="readmore__link animsition-link">
                <span class="c-txt-sm">Read more</span></a>
            </div>
          </div>
          <div class="p-service__img cover-slide">
            <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/img_7.jpg" alt="">
          </div>
        </div>
        <div class="p-works">
          <div class="c-container appear up">
            <h2 class="p-works__title clip-js left">
              <p class="c-txt-lg">事業案内</p>
              <p class="c-txt-xs">Works</p>
            </h2>
            <div class="p-works__desc item">
              <p class="c-txt-sm">
                土木工事・電気工事・溶接工事をはじめとして、様々な工事を行っております。<br>
                詳しくは下記からご覧下さい。
              </p>
            </div>
            <div class="readmore item">
              <a href="<?php echo esc_url( home_url('/works')); ?>" class="readmore__link animsition-link">
                <span class="c-txt-sm">Read more</span></a>
            </div>
          </div>
          <div class="p-service__img cover-slide">
            <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/img_6.jpg" alt="">
          </div>
        </div>
      </section>
      <!-- /.p-service -->
      <section class="p-recruit">
        <div class="c-container appear up">
          <h2 class="p-recruit__title clip-js">
            <p class="c-txt-lg">採用情報</p>
            <p class="c-txt-xs">Recruit</p>
          </h2>
          <div class="p-recruit__desc item">
            <p class="c-txt-sm">
              株式会社Riv建設は、通年で中途採用を実施しています。<br>これまでの経験を生かして活躍したい方や、<br>新たなフィールドで知識や技術を身につけたい方のエントリーをお待ちしています
            </p>
          </div>
          <div class="link-btn-wrap">
            <div class="link-btn">
              <a href="<?php echo esc_url( home_url('/recruit')); ?>" class="btn btn-flat"><span>採用情報一覧</span></a>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-recruit -->
      <section class="p-news">
        <div class="c-container appear up">
          <h2 class="p-news__title clip-js left">
            <p class="c-txt-lg">新着情報</p>
            <p class="c-txt-xs">News</p>
          </h2>
          <ul class="p-news__list item">
            <?php query_posts('posts_per_page=3'); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <li class="p-news__item">
                <a class="animsition-link" href="<?php the_permalink() ;?>">
                  <span class="p-news__date"><?php echo get_the_date(); ?></span>
                  <p class="p-news__content"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="link-btn-wrap">
            <div class="link-btn">
              <a href="<?php echo esc_url( home_url('/news')); ?>" class="btn btn-flat"><span>お知らせ一覧</span></a>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-news -->
      <section class="p-contact">
        <div class="p-contact__slider">
          <div id="js-infiniteslide" class="gallery">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_1.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_2.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_3.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_4.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_5.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_6.jpg" alt="">
          </div>
        </div>
        <div class="p-contact__wrap appear up">
          <h2 class="p-contact__title clip-js left">
            <p class="c-txt-lr">お問い合わせ</p>
            <p class="c-txt-xs">Contact</p>
          </h2>
          <div class="p-contact__desc item">
            以下のフォームまたはお電話等で、まずは気軽にお問い合わせ下さい。
          </div>
          <div class="p-contact__tel item">
            <a href="tel:050-3786-1317">Tel:050-3786-1317</a>
          </div>
          <div class="link-btn-wrap">
            <div class="link-btn">
              <a id="contactBtn" href="<?php echo esc_url( home_url('#')); ?>" class="btn btn-flat"><span>お問い合わせフォーム</span></a>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-contact -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/pace.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/infiniteslide.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/swiper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/hero-slider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>