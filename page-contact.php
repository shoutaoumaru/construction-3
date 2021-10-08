<?php 
/* Template Name: contact
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせ | </title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
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
    <section class="c-topview">
      <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_2.jpg" alt="">
        </div>
        <div class="c-topview__title">
          <h2 class="c-topview__text">
            <p class="c-txt-lr">お問い合わせ</p>
            <p class="c-txt-sm">CONTACT</p>
          </h2>
      </div>
    </section>
      <!-- /.c-topview -->
      <!-- コンタクトフォーム -->
    <div class="c-contact">
      <div class="contact-form">
          <div class="c-container">
            <h1 class="c-title">
              <span>CONTACT</span>
            </h1>
            <p class="c-contact-text">以下必要事項をご記入の上、「送信する」ボタンを押して下さい。</p>
            <?php echo apply_filters('the_content', '[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
          </div>
          </div>
          <!-- /コンタクトフォーム -->
          <div class="mobile-menu">
            <nav class="mobile-menu__nav">
              <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                  <a class="animsition-link" href="/">TOP</a>
                </li>
                <li class="mobile-menu__item">
                  <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">STAFF</a>
                </li>
                <li class="mobile-menu__item">
                  <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">RECRUIT</a>
                </li>
                <li class="mobile-menu__item">
                  <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
                </li>
              </ul>
              <div class="reserve-btn-wrap">
                <div class="reserve-btn-tel">
                  <h4>電話予約はこちら</h4>
                  <div class="reserve-btn">
                    <a href="tel:092-686-7954"><span>092-686-7954</span></a>
                  </div>
                </div>
                <div class="reserve-btn-net">
                  <h4>ネット予約はこちら</h4>
                  <div class="reserve-btn">
                    <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <!-- /.mobile-menu -->
      </div>
    </div>
    <!-- /.c-contsact -->
  </div>
  <!-- /.superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>
</html>
