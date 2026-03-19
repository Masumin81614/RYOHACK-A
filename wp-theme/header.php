<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <meta name="description" content="わかば個別指導塾は、一人ひとりに寄り添い、自信を育てる個別指導塾です。オリジナルの学習方法で苦手を克服し、学ぶ楽しさを実感。プロフェッショナルな講師陣が、生徒の目標に合わせた指導を行います。アットホームな環境で、勉強が好きになる体験をしませんか？" />
    <title>わかば個別指導塾 │ 自身がつく、勉強が好きになる。 一人ひとりに寄り添う個別指導塾</title>

    <meta property="og:title" content="Document">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sample-wordpress.colorlife-website.com/anken-A/ryohack-a/">
   <meta property="og:image" content="<?php echo get_theme_file_uri('/img/ogp.webp'); ?>">
    <meta property="og:site_name" content="わかば個別指導塾 │ 自身がつく、勉強が好きになる。 一人ひとりに寄り添う個別指導塾">
    <meta property="og:description" content="わかば個別指導塾は、一人ひとりに寄り添い、自信を育てる個別指導塾です。オリジナルの学習方法で苦手を克服し、学ぶ楽しさを実感。プロフェッショナルな講師陣が、生徒の目標に合わせた指導を行います。アットホームな環境で、勉強が好きになる体験をしませんか？">
    <meta name="twitter:card" content="summary_large_image">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- ==================================================
    l-header
    ================================================== -->
    <header class="l-header">
      <div class="l-header__inner">
        <h1 class="p-header-branding">
          <a href="#top" class="p-header-branding__link">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_logo.webp" alt="わかば個別指導塾ロゴ" class="p-header-branding__link--image" width="450" height="72" loading="lazy" />
          </a>
        </h1>
        <div class="c-global-nav--pc">
          <div class="p-header-contact">
            <nav class="p-header-nav p-header-nav--pc">
              <ul class="p-header-nav__list">
                <li class="p-header-nav__item"><a href="#mission">指導方針</a></li>
                <li class="p-header-nav__item"><a href="#reason">選ばれる理由</a></li>
                <li class="p-header-nav__item"><a href="#teachers">講師紹介</a></li>
                <li class="p-header-nav__item"><a href="#courses">コース案内</a></li>
                <li class="p-header-nav__item"><a href="#faq">よくある質問</a></li>
              </ul>
            </nav>
            <div class="c-contact__tel">
              <span class="c-tel-icon" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon_tel.webp" alt="電話アイコン" width="62" height="82" loading="lazy" /></span>
              <div class="c-sp-menu__tel--textBox">
                <a href="tel:0120123456" class="p-sp-menu__tel-number c-tel-number">0120-12-3456</a>
                <p class="c-sp-menu__tel-time">受付時間：平日 9:00〜19:00</p>
              </div>
            </div>
            <div class="p-pc-menu__cta">
              <a href="#contact" class="c-btn c-btn-sm p-section--cta__btn">
                <div class="c-contact__btn--box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
                    <path d="M23.2764 0H0.723656C0.324469 0 0 0.332837 0 0.743042V2.20436L12 10.453L24 2.20359V0.743042C24 0.332837 23.6755 0 23.2764 0Z" fill="white" />
                    <path d="M0 5.24979V15.0296C0 16.6705 1.29567 17.9996 2.89598 17.9996H21.104C22.7044 17.9996 24 16.6705 24 15.0296V5.24902L12 13.4985L0 5.24979Z" fill="white" />
                  </svg>
                  <span class="c-btn--text">お問い合わせ</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <circle cx="11" cy="11" r="11" fill="white" />
                    <path d="M14.667 11.0002L9.16699 14.1756L9.16699 7.82474L14.667 11.0002Z" fill="#66B1C5" />
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- SPハンバーガー -->
        <button class="c-sp-menu-toggle js-sp-menu-toggle p-sp-menu-toggle" type="button" aria-expanded="false" aria-controls="sp-menu">
          <span class="c-sp-menu-toggle__line"></span>
          <span class="c-sp-menu-toggle__line"></span>
          <span class="c-sp-menu-toggle__line"></span>
        </button>
      </div>

      <!-- SPメニュー -->
      <nav id="sp-menu" class="p-sp-menu js-sp-menu u-header-margin" aria-hidden="true">
        <ul class="p-sp-menu__nav">
          <li class="p-sp-menu__item"><a href="#mission">指導方針</a></li>
          <li class="p-sp-menu__item"><a href="#reason">選ばれる理由</a></li>
          <li class="p-sp-menu__item"><a href="#teachers">講師紹介</a></li>
          <li class="p-sp-menu__item"><a href="#courses">コース案内</a></li>
          <li class="p-sp-menu__item"><a href="#faq">よくある質問</a></li>
        </ul>

        <div class="c-contact__tel">
          <div class="c-contact__tel--box">
            <span class="c-tel-icon" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon_tel.webp" alt="電話アイコン" width="62" height="82" loading="lazy" /></span>
            <a href="tel:0120123456" class="p-sp-menu__tel-number c-tel-number">0120-12-3456</a>
          </div>
          <p class="c-sp-menu__tel-time">受付時間：平日 9:00〜19:00</p>
        </div>

        <div class="p-sp-menu__cta">
          <a href="#contact" class="c-btn c-btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
              <path d="M23.2764 0H0.723656C0.324469 0 0 0.332837 0 0.743042V2.20436L12 10.453L24 2.20359V0.743042C24 0.332837 23.6755 0 23.2764 0Z" fill="white" />
              <path d="M0 5.24979V15.0296C0 16.6705 1.29567 17.9996 2.89598 17.9996H21.104C22.7044 17.9996 24 16.6705 24 15.0296V5.24902L12 13.4985L0 5.24979Z" fill="white" />
            </svg>
            <span class="c-btn--text">お問い合わせ</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
              <circle cx="11" cy="11" r="11" fill="white" />
              <path d="M14.667 11.0002L9.16699 14.1756L9.16699 7.82474L14.667 11.0002Z" fill="#66B1C5" />
            </svg>
          </a>
        </div>
      </nav>
    </header>
