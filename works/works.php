<?php
 /* Template Name: works
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>事業案内 | 建設業テンプレート3</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/logo-animation.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>

<body>
  <div class="superwrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsiton-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>"><span>会社概要</span>
                <small>Company</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/works')); ?>"><span>事業案内</span><small>Works</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span><small>Recruit</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>News</small></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
    </header>
    <!-- /.header -->
    <main id="main-contents" class="c-works">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_3.jpg" alt="">
        </div>
        <div class="c-topview__title">
          <h2 class="c-topview__text">
            <p class="c-txt-lr">事業案内</p>
            <p class="c-txt-sm">WORKS</p>
          </h2>
        </div>
      </section>
      <!-- /.c-topview -->
      <section id="works01" class="c-works-item">
        <div class="c-container">
          <h2 class="c-works-item__title">
            <p class="c-txt-lg">土木工事</p>
            <p class="c-txt-xs">Civil engineering work</p>
          </h2>
          <div class="c-works-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/woks-5.jpg" alt="">
          </div>
          <div class="c-works-item__desc">
            <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
              土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
              今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
            </p>
          </div>
          <div class="c-works-wrap">
            <div class="c-works-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_6.jpg" alt="">
            </div>
            <div class="c-works-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/works-3.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <!-- /.c-works-item -->
      <section id="works02" class="c-works-item">
        <div class="c-container">
          <h2 class="c-works-item__title">
            <p class="c-txt-lg">電気工事</p>
            <p class="c-txt-xs">Electrical construction</p>
          </h2>
          <div class="c-works-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/works-1.jpg" alt="">
          </div>
          <div class="c-works-item__desc">
            <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
              土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
              今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
            </p>
          </div>
          <div class="c-works-wrap">
            <div class="c-works-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/works-2.jpg" alt="">
            </div>
            <div class="c-works-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/works-4.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <!-- /.c-works-item -->
      <section id="works03" class="c-works-item">
        <div class="c-container">
          <h2 class="c-works-item__title">
            <p class="c-txt-lg">溶接工事</p>
            <p class="c-txt-xs">Welding work</p>
          </h2>
          <div class="c-works-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_5.jpg" alt="">
          </div>
          <div class="c-works-item__desc">
            <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
              土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
              今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
            </p>
          </div>
          <div class="c-works-wrap">
            <div class="c-works-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/works-6.jpg" alt="">
            </div>
            <div class="c-works-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_7.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <!-- /.c-works-item -->
      <section class="p-contact">
        <div class="p-contact__wrap">
          <h2 class="p-contact__title">
            <p class="c-txt-lr">お問い合わせ</p>
            <p class="c-txt-xs">Contact</p>
          </h2>
          <div class="p-contact__desc">
            以下のフォームまたはお電話等で、まずは気軽にお問い合わせ下さい。
          </div>
          <div class="p-contact__tel">
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
    <?php get_template_part('includes/c-footer'); ?>      
    <!-- /.footer -->
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
</body>

</html>