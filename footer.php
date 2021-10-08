    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item"><a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>">会社概要</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href=" <?php echo esc_url( home_url('/works')); ?>">事業案内</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">お知らせ</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話でのお問い合わせ</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <footer class="p-footer">
      <div class="c-container">
        <div class="p-footer__wrap">
          <div class="p-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_02.png" alt="">
          </div>
          <div class="p-footer__nav">
            <ul>
              <li>
                <a href=" <?php echo esc_url( home_url('/company')); ?>"><span class="c-txt-sm">会社概要</span>
                  <span class="c-txt-xs">Company</span></a>
              </li>
              <li>
                <a href=" <?php echo esc_url( home_url('/works')); ?>"><span class="c-txt-sm">事業案内</span>
                  <span class="c-txt-xs">Works</span></a>
              </li>
              <li>
                <a href=" <?php echo esc_url( home_url('/recruit')); ?>"><span class="c-txt-sm">採用情報</span>
                  <span class="c-txt-xs">Recruit</span></a>
              </li>
              <li>
                <a href=" <?php echo esc_url( home_url('/news')); ?>"><span class="c-txt-sm">お知らせ</span>
                  <span class="c-txt-xs">News</span></a>
              </li>
            </ul>
          </div>
          <div class="p-footer__address">
            <p class="c-txt-sm">本社</p>
            <span class="c-txt-sm">〒812-0011 福岡県福岡市博多区3-27-25-9F</span>
          </div>
        </div>
        <div class="copyright">&copy;2021 Riv建設</div>
      </div>
    </footer>
  <?php wp_footer(); ?>