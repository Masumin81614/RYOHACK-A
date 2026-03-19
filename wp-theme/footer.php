    <!-- ==================================================
    l-footer
    ================================================== -->
    <footer class="l-footer p-footer">
      <div class="l-inner l-footer__inner">
        <div class="p-footer-info">
          <div class="p-site-branding">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_logo.webp" alt="わかば個別指導塾ロゴ" class="p-branding__link--image" width="450" height="72" loading="lazy" />
          </div>
          <div class="c-contact__tel">
            <span class="c-tel-icon" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon_tel.webp" alt="電話アイコン" width="62" height="82" loading="lazy" /></span>
            <div class="c-sp-menu__tel--textBox">
              <a href="tel:0120123456" class="p-sp-menu__tel-number c-tel-number">0120-12-3456</a>
              <p class="c-sp-menu__tel-time">受付時間：平日 9:00〜19:00</p>
            </div>
          </div>
        </div>

        <div class="p-footer-nav">
          <ul class="p-footer-nav__list">
            <li><a href="#mission">指導方針</a></li>
            <li><a href="#reason">選ばれる理由</a></li>
            <li><a href="#teachers">講師紹介</a></li>
            <li><a href="#courses">コース案内</a></li>
            <li><a href="#faq">よくある質問</a></li>
            <li><a href="#contact">お問い合わせ</a></li>
          </ul>
        </div>

        <div class="p-footer__line"></div>
        <div class="p-footer__bottom">
          <ul class="p-footer__sns">
            <li class="p-footer__sns-item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/instagram-icon.svg" loading="lazy" alt="Instagram" />
            </li>
            <li class="p-footer__sns-item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook-icon.svg" loading="lazy" alt="Facebook" />
            </li>
          </ul>
          <p class="p-footer-copy">&copy; 2025 わかば個別指導塾</p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
