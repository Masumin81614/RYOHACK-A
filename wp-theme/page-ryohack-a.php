<?php
/**
 * Template Name: ryohack-a LP
 */
get_header();
?>

    <!-- ==================================================
    l-main
    ================================================== -->
    <main id="top" class="l-main">
      <!-- ===============================================
      メインビジュアル（Swiperスライダー）
      =============================================== -->
      <section class="p-hero">
        <div class="l-inner">
          <div class="p-hero__inner">
            <div class="p-hero__slider">
              <div class="p-hero__swiper-container">
                <div class="swiper p-hero__swiper">
                  <div class="swiper-wrapper p-hero__swiper-wrapper">
                    <!-- slide 01 -->
                    <div class="p-hero__slide swiper-slide">
                      <div class="p-hero__slider--inner">
                        <div class="p-hero__content">
                          <h2 class="p-hero__title">
                            <span class="u-yellow-text">自信</span>がつく、<br />
                            勉強が<span class="u-yellow-text">好き</span>になる
                          </h2>
                          <p class="p-hero__text">一人ひとりに寄り添う個別指導塾</p>
                        </div>
                        <div class="p-hero__image">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_fv1.webp" alt="授業を受ける生徒の写真" width="2000" height="1300" />
                        </div>
                      </div>
                    </div>
                    <!-- slide 02 -->
                    <div class="p-hero__slide swiper-slide">
                      <div class="p-hero__slider--inner">
                        <div class="p-hero__content">
                          <h2 class="p-hero__title">
                            <span class="u-yellow-text">自信</span>がつく、<br />
                            勉強が<span class="u-yellow-text">好き</span>になる
                          </h2>
                          <p class="p-hero__text">一人ひとりに寄り添う個別指導塾</p>
                        </div>
                        <div class="p-hero__image">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_fv2.webp" alt="授業を受ける生徒の写真" width="2000" height="1300" />
                        </div>
                      </div>
                    </div>
                    <!-- slide 03 -->
                    <div class="p-hero__slide swiper-slide">
                      <div class="p-hero__slider--inner">
                        <div class="p-hero__content">
                          <h2 class="p-hero__title">
                            <span class="u-yellow-text">自信</span>がつく、<br />
                            勉強が<span class="u-yellow-text">好き</span>になる
                          </h2>
                          <p class="p-hero__text">一人ひとりに寄り添う個別指導塾</p>
                        </div>
                        <div class="p-hero__image">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_fv3.webp" alt="授業を受ける生徒の写真" width="2000" height="1300" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination js-hero-pagination"></div>
              </div>
            </div>
            <div class="p-hero__cta">
              <p class="p-hero__cta--lead">\ 今なら入会金無料！/</p>
              <a href="#contact" class="c-btn c-btn-md">
                <div class="c-contact__btn--box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
                    <path d="M23.2764 0H0.723656C0.324469 0 0 0.332837 0 0.743042V2.20436L12 10.453L24 2.20359V0.743042C24 0.332837 23.6755 0 23.2764 0Z" fill="white" />
                    <path d="M0 5.24979V15.0296C0 16.6705 1.29567 17.9996 2.89598 17.9996H21.104C22.7044 17.9996 24 16.6705 24 15.0296V5.24902L12 13.4985L0 5.24979Z" fill="white" />
                  </svg>
                  <span class="c-btn--text">お問い合わせはこちら</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <circle cx="11" cy="11" r="11" fill="white" />
                    <path d="M14.667 11.0002L9.16699 14.1756L9.16699 7.82474L14.667 11.0002Z" fill="#66B1C5" />
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- ミッション -->
      <section id="mission" class="p-mission p-section--mission">
        <div class="l-inner">
          <div class="c-head js-fadein">
            <div class="c-heading">
              <h2 class="c-header__eyebrow">MISSION</h2>
              <span class="c-header__title">子どもの自信を育てる</span>
            </div>
            <p class="p-mission__lead">一人一人に合わせた個別カリキュラムで勉強のやり方を指導し、<br class="u-hidden-sp" />子どもたちを勉強好きに導きます。お子様が自ら喜びを見つけ、<br class="u-hidden-sp" />成長の喜びを感じられるよう、全力でサポートいたします。</p>
          </div>
          <div class="p-mission-list">
            <article class="p-mission-item js-fadein">
              <div class="p-mission-item__image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_mission1.webp" alt="ノートと鉛筆のアイコン" width="500" height="333" loading="lazy" class="mission__image--1" /></div>
              <div class="p-mission-item__textBox">
                <h3 class="p-mission-item__title">
                  自信をつける <br />
                  オリジナルの学習方法
                </h3>
                <p class="p-mission-item__text">「問題を1問解く」といった小さな成功体験を積み上げ、自信をつけていきます。</p>
              </div>
            </article>
            <article class="p-mission-item js-fadein">
              <div class="p-mission-item__image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_mission2.webp" alt="グラフと虫眼鏡のアイコン" width="500" height="333" loading="lazy" class="mission__image--2" /></div>
              <div class="p-mission-item__textBox">
                <h3 class="p-mission-item__title">
                  一人ひとりに合った<br />
                  目標設定
                </h3>
                <p class="p-mission-item__text">理解度に合わせたカリキュラムを提供。得意分野を伸ばし、苦手分野の克服を目指します。</p>
              </div>
            </article>
            <article class="p-mission-item js-fadein">
              <div class="p-mission-item__image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_mission3.webp" alt="眼鏡の男性のアイコン" width="500" height="333" loading="lazy" class="mission__image--3" />
              </div>
              <div class="p-mission-item__textBox">
                <h3 class="p-mission-item__title">
                  プロフェッショナルな <br />
                  講師陣
                </h3>
                <p class="p-mission-item__text">経験豊富な講師が、生徒の個性を見極めた指導を行います。</p>
              </div>
            </article>
            <article class="p-mission-item js-fadein">
              <div class="p-mission-item__image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_mission4.webp" alt="握手するアイコン" width="500" height="333" loading="lazy" class="mission__image--4" />
              </div>
              <div class="p-mission-item__textBox">
                <h3 class="p-mission-item__title">
                  苦手を克服する <br />
                  アットホームな環境
                </h3>
                <p class="p-mission-item__text">安心して質問できる環境を整備。勉強が楽しいと感じられる場づくりを心がけています。</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- CTA-1 -->
      <section class="p-section--cta p-section--cta-1">
        <div class="p-section--cta__bg js-parallax3"></div>
        <div class="l-inner">
          <div class="p-section--cta__inner">
            <div class="p-section--cta__heading">
              <h2 class="p-section--cta__title">「わからない」が <br class="u-hidden-pc" />「できた！」に変わる</h2>
              <p class="p-section--cta__lead">わかば個人指導塾は、地域に根ざした個別指導塾です。一人ひとりのペースに合わせた個別指導を大切にしており、自分らしく学べる環境を整えています。お子様が自信を持って成長できるよう、全力でサポートいたします。</p>
            </div>
            <div class="p-section--cta__actions">
              <a href="#contact" class="c-btn c-btn-lg p-section--cta__btn">
                <div class="c-contact__btn--box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
                    <path d="M23.2764 0H0.723656C0.324469 0 0 0.332837 0 0.743042V2.20436L12 10.453L24 2.20359V0.743042C24 0.332837 23.6755 0 23.2764 0Z" fill="white" />
                    <path d="M0 5.24979V15.0296C0 16.6705 1.29567 17.9996 2.89598 17.9996H21.104C22.7044 17.9996 24 16.6705 24 15.0296V5.24902L12 13.4985L0 5.24979Z" fill="white" />
                  </svg>
                  <span class="c-btn--text">お問い合わせはこちら</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <circle cx="11" cy="11" r="11" fill="white" />
                    <path d="M14.667 11.0002L9.16699 14.1756L9.16699 7.82474L14.667 11.0002Z" fill="#66B1C5" />
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- 選ばれる理由 -->
      <section id="reason" class="p-section p-reason">
        <div class="l-inner">
          <div class="p-reason__inner">
            <div class="c-head p-reason__head">
              <div class="c-heading">
                <h2 class="c-header__eyebrow">REASON</h2>
                <span class="c-header__title">選ばれる理由</span>
              </div>
              <div class="p-reason__head--image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_reson-title.webp" alt="女性生徒のイラスト" width="170" height="344" loading="lazy" />
              </div>
            </div>
            <div class="p-reason-list__scroll">
              <div class="p-reason-list">
                <article class="p-reason-item js-fadein">
                  <p class="p-reason-item__num">
                    <span class="p-reason-item__num--sub">REASON</span>
                    01
                  </p>
                  <div class="p-reason-item__box">
                    <div class="p-reason-item__textBox">
                      <h3 class="p-reason-item__heading">講師との距離が近い</h3>
                      <p class="p-reason-item__text">「いつでも気軽に質問できる」「何度でも丁寧に教えてくれる」「勉強以外の話も気軽にできる」――そんな親しみやすさが、多くの生徒に選ばれる理由です。</p>
                    </div>
                    <div class="p-reason-item__image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_reason1.webp" alt="女性の講師が生徒に笑顔で教えてる" width="612" height="456" loading="lazy" />
                    </div>
                  </div>
                </article>
                <article class="p-reason-item js-fadein">
                  <p class="p-reason-item__num">
                    <span class="p-reason-item__num--sub">REASON</span>
                    02
                  </p>
                  <div class="p-reason-item__box">
                    <div class="p-reason-item__textBox">
                      <h3 class="p-reason-item__heading">できるまでとことんサポート</h3>
                      <p class="p-reason-item__text">「講義→問題演習→解説」を繰り返します。「講義」で聞いたことが「わかった気」で終わってないかを確かめ、理解が不十分であれば何度でも説明をします。</p>
                    </div>
                    <div class="p-reason-item__image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_reason2.webp" alt="女性の講師が寄り添って教えてる" width="612" height="456" loading="lazy" />
                    </div>
                  </div>
                </article>
                <article class="p-reason-item js-fadein">
                  <p class="p-reason-item__num">
                    <span class="p-reason-item__num--sub">REASON</span>
                    03
                  </p>
                  <div class="p-reason-item__box">
                    <div class="p-reason-item__textBox">
                      <h3 class="p-reason-item__heading">学校に合わせた個別指導</h3>
                      <p class="p-reason-item__text">学校の授業内容や定期テストの傾向を把握し、それぞれの生徒に合った学習プランを提供しています。一人ひとりのレベルに寄り添った丁寧な指導で、無理なく学力を伸ばします。</p>
                    </div>
                    <div class="p-reason-item__image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_reason3.webp" alt="ノートと鉛筆" width="612" height="456" loading="lazy" />
                    </div>
                  </div>
                </article>
                <article class="p-reason-item js-fadein">
                  <p class="p-reason-item__num">
                    <span class="p-reason-item__num--sub">REASON</span>
                    04
                  </p>
                  <div class="p-reason-item__box">
                    <div class="p-reason-item__textBox">
                      <h3 class="p-reason-item__heading">みんなの自習室</h3>
                      <p class="p-reason-item__text">授業時間外も安心して学べる環境を提供しています。開校中のすべての時間、自習室を自由にご利用いただけます。自習中も講師が見守っており、学習の進捗や宿題の状況を把握します。</p>
                    </div>
                    <div class="p-reason-item__image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_reason4.webp" alt="仕切られた机が勉強している学生たち" width="612" height="456" loading="lazy" />
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 講師紹介（Swiperスライダー） -->
      <section id="teachers" class="p-section p-teachers">
        <div class="p-teachers__inner">
          <div class="c-head p-reason__head">
            <div class="c-heading">
              <h2 class="c-header__eyebrow">TEACHER</h2>
              <span class="c-header__title">講師紹介</span>
            </div>
          </div>
          <div class="p-teachers-slider">
            <div class="p-teachers-swiper-container">
              <div class="swiper js-teachers-slider">
                <div class="p-teachers-swiper__wrapper swiper-wrapper">
                  <article class="p-teachers-slider__slide swiper-slide">
                    <div class="p-teacher-card">
                      <div class="p-teacher-card__photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_teacher1.webp" alt="講師佐藤" width="704" height="520" loading="lazy" />
                      </div>
                      <div class="p-teacher-card__body">
                        <div class="p-teacher-card__head">
                          <div class="p-teacher-card__head--tags">
                            <span class="p-teacher-card__head--tag">国語</span>
                            <span class="p-teacher-card__head--tag">英語</span>
                          </div>
                          <h3 class="p-teacher-card__name">佐藤 翔太（さとう しょうた）</h3>
                        </div>
                        <p class="p-teacher-card__text">「難しい文章が苦手」「単語が覚えられない」などの悩みを一緒に解決しましょう！気軽に話せる兄貴分として、みんなを応援します！</p>
                      </div>
                    </div>
                  </article>
                  <article class="p-teachers-slider__slide swiper-slide">
                    <div class="p-teacher-card">
                      <div class="p-teacher-card__photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_teacher2.webp" alt="講師高橋" width="704" height="520" loading="lazy" />
                      </div>
                      <div class="p-teacher-card__body">
                        <div class="p-teacher-card__head">
                          <div class="p-teacher-card__head--tags">
                            <span class="p-teacher-card__head--tag">理科</span>
                            <span class="p-teacher-card__head--tag">社会</span>
                          </div>
                          <h3 class="p-teacher-card__name">高橋 彩音（たかはし あやね）</h3>
                        </div>
                        <p class="p-teacher-card__text">実験や歴史の話が好きなので、興味を引き出す工夫を心がけています。「勉強が苦手」と感じている子にも楽しんでもらえる授業を目指しています！</p>
                      </div>
                    </div>
                  </article>
                  <article class="p-teachers-slider__slide swiper-slide">
                    <div class="p-teacher-card">
                      <div class="p-teacher-card__photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_teacher3.webp" alt="講師松本" width="704" height="520" loading="lazy" />
                      </div>
                      <div class="p-teacher-card__body">
                        <div class="p-teacher-card__head">
                          <div class="p-teacher-card__head--tags">
                            <span class="p-teacher-card__head--tag">数学</span>
                            <span class="p-teacher-card__head--tag">英語</span>
                          </div>
                          <h3 class="p-teacher-card__name">松本 大輝（まつもと だいき）</h3>
                        </div>
                        <p class="p-teacher-card__text">勉強を「難しい」ではなく「楽しい」に変える方法を一緒に見つけましょう。「どうやって勉強するのがいいの？」などの相談もお気軽にしてくださいね。</p>
                      </div>
                    </div>
                  </article>
                  <article class="p-teachers-slider__slide swiper-slide">
                    <div class="p-teacher-card">
                      <div class="p-teacher-card__photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_teacher4.webp" alt="講師山田" width="704" height="520" loading="lazy" />
                      </div>
                      <div class="p-teacher-card__body">
                        <div class="p-teacher-card__head">
                          <div class="p-teacher-card__head--tags">
                            <span class="p-teacher-card__head--tag">社会</span>
                          </div>
                          <h3 class="p-teacher-card__name">山田 優子（やまだ ゆうこ）</h3>
                        </div>
                        <p class="p-teacher-card__text">勉強の「なぜ？」を一緒に解き明かすのが大好きです。趣味は手芸や料理です。勉強以外のことでも何でも気軽に話してくださいね！</p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>

            <div class="p-teachers-slider__controls">
              <div class="p-teachers-slider__scrollbar swiper-scrollbar js-teachers-scrollbar"></div>
              <div class="p-teachers-slider__btn">
                <button class="p-teachers-slider__nav p-teachers-slider__nav--prev js-teachers-prev" type="button" aria-label="前へ"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="p-teachers-slider__nav p-teachers-slider__nav--next js-teachers-next" type="button" aria-label="次へ"><i class="fa-solid fa-arrow-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA-2 -->
      <section class="p-section c-section--cta p-section--cta-2">
        <div class="p-section--cta__bg js-parallax3"></div>
        <div class="l-inner l-inner--narrow">
          <div class="p-section--cta-2__box">
            <h2 class="p-section--cta-2__title">
              まずはお気軽に <br class="u-hidden-pc" />
              ご相談ください
            </h2>
            <div class="p-section--cta-2__actions">
              <div class="p-section--cta-2__action">
                <p class="p-section--cta-2__lead">お電話でのお問い合わせ</p>
                <a class="p-section--cta-2__telBox">
                  <div class="p-section--cta-2__telIcon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_tel-cta2.webp" alt="電話アイコン" width="62" height="82" loading="lazy" /></div>
                  <p class="p-section--cta-2__tel">0120-12-3456</p>
                </a>
                <p class="p-section--cta-2__lead2">受付時間：平日 9:00〜19:00</p>
              </div>
              <div class="p-section--cta-2__action">
                <p class="p-section--cta-2__btn--lead">\ 今なら入会金無料！/</p>
                <a href="#contact" class="c-btn c-btn-md p-section--cta__btn">
                  <div class="c-contact__btn--box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
                      <path d="M23.2764 0H0.723656C0.324469 0 0 0.332837 0 0.743042V2.20436L12 10.453L24 2.20359V0.743042C24 0.332837 23.6755 0 23.2764 0Z" fill="white" />
                      <path d="M0 5.24979V15.0296C0 16.6705 1.29567 17.9996 2.89598 17.9996H21.104C22.7044 17.9996 24 16.6705 24 15.0296V5.24902L12 13.4985L0 5.24979Z" fill="white" />
                    </svg>
                    <span class="c-btn--text">お問い合わせはこちら</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                      <circle cx="11" cy="11" r="11" fill="white" />
                      <path d="M14.667 11.0002L9.16699 14.1756L9.16699 7.82474L14.667 11.0002Z" fill="#66B1C5" />
                    </svg>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- コース案内 -->
      <section id="courses" class="p-section p-courses">
        <div class="p-courses__inner">
          <div class="l-inner">
            <div class="c-head p-courses__head">
              <div class="c-heading">
                <h2 class="c-header__eyebrow">COURSE</h2>
                <span class="c-header__title">コース案内</span>
              </div>
              <div class="p-course__head--image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_course.webp" alt="女性生徒のイラスト" width="244" height="334" loading="lazy" />
              </div>
            </div>

            <div class="p-courses-tabs">
              <div class="p-courses-tabs__inner">
                <div class="p-courses-tabs__list" role="tablist">
                  <button class="p-courses-tabs__item" role="tab" id="tab1" aria-controls="panel1" aria-selected="true" tabindex="0">中学１・2年生</button>
                  <button class="p-courses-tabs__item" role="tab" id="tab2" aria-controls="panel2" aria-selected="false" tabindex="-1">中学3年生</button>
                </div>
                <div class="p-courses-tabs__contents">
                  <div class="p-courses-tabs__content-wrap js-show" role="tabpanel" id="panel1" aria-labelledby="tab1" tabindex="0">
                    <div class="p-courses-tabs__content --content1">
                      <div class="p-courses__boxes">
                        <div class="p-courses__box">
                          <h2 class="p-courses__heading">
                            自由選択コース <br class="u-hidden-pc" />
                            (週60分×１)
                          </h2>
                          <p class="p-courses__text">教科、授業内容を自由に選択できます。学校の予習復習、テスト勉強の習慣を身に付けます。1教科につき週1回です。</p>
                        </div>
                        <div class="p-courses__box">
                          <h2 class="p-courses__heading">苦手徹底強化コース <br class="u-hidden-pc" />(週120分×1)</h2>
                          <p class="p-courses__text">教科を問わず、毎週テーマを決めて苦手な分野を徹底的に強化します。各単元チェックテストで満点が取れるまで反復し基礎をしっかりと固めます。</p>
                        </div>
                        <button type="button" data-dialog="modal1" class="c-btn c-btn-sm p-courses-tab__btn modal__open-btn">
                          <span class="modal__open-btn--box">
                            <span class="c-btn--text">詳しくみる</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                              <circle cx="11" cy="11" r="11" fill="white" />
                              <path d="M14.667 11.0002L9.16699 14.1756L9.16699 7.82474L14.667 11.0002Z" fill="#66B1C5" />
                            </svg>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="p-courses-tabs__content-wrap" role="tabpanel" id="panel2" aria-labelledby="tab2" tabindex="0">
                    <div class="p-courses-tabs__content --content2">
                      <div class="p-courses__boxes">
                        <div class="p-courses__box">
                          <h2 class="p-courses__heading">内申点アップコース <br class="u-hidden-pc" />（週120分×3）</h2>
                          <p class="p-courses__text">学校より先取りで5教科の学習を進めます。定期テストの2週間前から目標を定めて定期テスト対策を行います。</p>
                        </div>
                        <div class="p-courses__box">
                          <h2 class="p-courses__heading">高校受験コース <br class="u-hidden-pc" />（週180分×4）</h2>
                          <p class="p-courses__text">志望校合格に向けて必要なことにターゲットを絞り、受験対策します。各単元チェックテストで満点が取れるまで反復し基礎をしっかりと固めます。</p>
                        </div>
                        <button type="button" data-dialog="modal2" class="c-btn c-btn-sm p-courses-tab__btn modal__open-btn">
                          <span class="modal__open-btn--box">
                            <span class="c-btn--text">詳しくみる</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                              <circle cx="11" cy="11" r="11" fill="white" />
                              <path d="M14.667 11.0002L9.16699 14.1756L9.16699 7.82474L14.667 11.0002Z" fill="#66B1C5" />
                            </svg>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- モーダル：中学1・2年生 -->
      <dialog id="modal1" aria-labelledby="modal-head1" aria-describedby="modal-text1" class="modal__content">
        <button type="button" class="modal__close-btn">&times;</button>
        <div class="modal__inner">
          <div class="modal__body">
            <div class="p-modal__contents">
              <div class="p-modal__content">
                <div class="p-modal__head">
                  <h3 class="p-modal__heading">自由選択コース</h3>
                  <p class="p-modal__heading--sub">
                    1週間に60分、自分に必要な教科や <br class="u-hidden-pc" />
                    内容を集中サポート！
                  </p>
                </div>
                <div class="p-modal__boxes">
                  <div class="p-modal__box">
                    <span class="modal__box--head">個別指導</span>
                    <p class="modal__box--text">60分×週1回 <br />月額 9,800円(税込)</p>
                  </div>
                  <div class="p-modal__box">
                    <span class="modal__box--head">グループ指導</span>
                    <p class="modal__box--text">60分×週1回 <br />月額 9,800円(税込)</p>
                  </div>
                </div>
              </div>
              <div class="p-modal__content">
                <div class="p-modal__head">
                  <h3 class="p-modal__heading">苦手徹底強化コース</h3>
                  <p class="p-modal__heading--sub">週1回120分で、苦手な教科を完全攻略！</p>
                </div>
                <div class="p-modal__boxes">
                  <div class="p-modal__box">
                    <span class="modal__box--head">個別指導</span>
                    <p class="modal__box--text">120分×週1回<br />月額 24,800円(税込)</p>
                  </div>
                  <div class="p-modal__box">
                    <span class="modal__box--head">グループ指導</span>
                    <p class="modal__box--text">120分×週1回<br />月額 24,800円(税込)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </dialog>

      <!-- モーダル：中学3年生 -->
      <dialog id="modal2" aria-labelledby="modal-head2" aria-describedby="modal-text2" class="modal__content">
        <button type="button" class="modal__close-btn">&times;</button>
        <div class="modal__inner">
          <div class="modal__body">
            <div class="p-modal__contents">
              <div class="p-modal__content">
                <div class="p-modal__head">
                  <h3 id="p-modal__heading">内申点アップコース</h3>
                  <p class="p-modal__heading--sub">テスト2週間前からの徹底対策で、成績アップ！</p>
                </div>
                <div class="p-modal__boxes">
                  <div class="p-modal__box">
                    <span class="modal__box--head">個別指導</span>
                    <p class="modal__box--text">120分×週3回<br />月額 38,000円(税込)</p>
                  </div>
                  <div class="p-modal__box">
                    <span class="modal__box--head">グループ指導</span>
                    <p class="modal__box--text">120分×週3回<br />月額 28,000(税込)</p>
                  </div>
                </div>
              </div>
              <div class="p-modal__content">
                <div class="p-modal__head">
                  <h3 class="p-modal__heading">高校受験コース</h3>
                  <p class="p-modal__heading--sub">受験本番を突破する実践力を鍛えます！</p>
                </div>
                <div class="p-modal__boxes">
                  <div class="p-modal__box">
                    <span class="modal__box--head">個別指導</span>
                    <p class="modal__box--text">150分×週4回<br />月額58,000円(税込)</p>
                  </div>
                  <div class="p-modal__box">
                    <span class="modal__box--head">グループ指導</span>
                    <p class="modal__box--text">150分×週4回<br />月額 42,000￥(税込)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </dialog>

      <!-- FAQ（アコーディオン） -->
      <section id="faq" class="p-section--faq">
        <div class="l-inner">
          <div class="p-section--faq__header">
            <div class="c-head p-faq__head">
              <div class="c-heading">
                <h2 class="c-header__eyebrow">FAQ</h2>
                <span class="c-header__title">よくある質問</span>
              </div>
              <div class="p-faq__head--image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_faq.webp" alt="" loading="lazy" />
              </div>
            </div>
          </div>

          <div class="p-faq__box js-accordion">
            <article class="p-faq-item">
              <h3 class="p-faq-item__head">
                <button class="p-faq-item__button js-accordion-toggle" type="button" aria-expanded="false">
                  <span class="p-faq-label q-label">Q</span>
                  <span class="p-faq-item__question">授業はどのような形式で進められますか？</span>
                  <span class="p-faq-item__toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="p-faq-item__body js-accordion-panel" aria-hidden="true">
                <div class="p-faq-item__answer">
                  <span class="p-faq-label a-label">A</span>
                  <p class="p-faq-item__text">授業は1対1または少人数制で、生徒一人ひとりに合わせた個別指導を行います。生徒が理解できるまで丁寧にサポートし、苦手克服から得意分野の伸長までしっかり対応します。また、各学校の授業進度に合わせた学習を心がけています。</p>
                </div>
              </div>
            </article>

            <article class="p-faq-item">
              <h3 class="p-faq-item__head">
                <button class="p-faq-item__button js-accordion-toggle" type="button" aria-expanded="false">
                  <span class="p-faq-label q-label">Q</span>
                  <span class="p-faq-item__question">勉強が苦手な子でもついていけますか？</span>
                  <span class="p-faq-item__toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="p-faq-item__body js-accordion-panel" aria-hidden="true">
                <div class="p-faq-item__answer">
                  <span class="p-faq-label a-label">A</span>
                  <p class="p-faq-item__text">もちろん大丈夫です！勉強に苦手意識を持つお子さま一人ひとりに寄り添い、小さな達成感を積み重ねて学ぶ楽しさを実感できるようサポートします。「まずはわかる喜びを感じてもらうこと」を大切に指導しています。</p>
                </div>
              </div>
            </article>

            <article class="p-faq-item">
              <h3 class="p-faq-item__head">
                <button class="p-faq-item__button js-accordion-toggle" type="button" aria-expanded="false">
                  <span class="p-faq-label q-label">Q</span>
                  <span class="p-faq-item__question">コースの変更などはできますか？</span>
                  <span class="p-faq-item__toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="p-faq-item__body js-accordion-panel" aria-hidden="true">
                <div class="p-faq-item__answer">
                  <span class="p-faq-label a-label">A</span>
                  <p class="p-faq-item__text">はい。月単位でコースの変更は可能です。</p>
                </div>
              </div>
            </article>

            <article class="p-faq-item">
              <h3 class="p-faq-item__head">
                <button class="p-faq-item__button js-accordion-toggle" type="button" aria-expanded="false">
                  <span class="p-faq-label q-label">Q</span>
                  <span class="p-faq-item__question">授業以外に何かサポートはありますか？</span>
                  <span class="p-faq-item__toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="p-faq-item__body js-accordion-panel" aria-hidden="true">
                <div class="p-faq-item__answer">
                  <span class="p-faq-label a-label">A</span>
                  <p class="p-faq-item__text">授業の振り返りを行う「学習カウンセリング」や「進路相談」、日々の勉強習慣をサポートする「自習スペース」も提供しています。また、定期的な保護者面談を通じて、お子さまの成長を一緒に見守ります。</p>
                </div>
              </div>
            </article>

            <article class="p-faq-item">
              <h3 class="p-faq-item__head">
                <button class="p-faq-item__button js-accordion-toggle" type="button" aria-expanded="false">
                  <span class="p-faq-label q-label">Q</span>
                  <span class="p-faq-item__question">塾の雰囲気に子供が慣れるか心配です。</span>
                  <span class="p-faq-item__toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="p-faq-item__body js-accordion-panel" aria-hidden="true">
                <div class="p-faq-item__answer">
                  <span class="p-faq-label a-label">A</span>
                  <p class="p-faq-item__text">無料体験学習を実施しておりますので、まずは教室にお越しいただき、ご確認後入塾していただくことができます。お気軽にご相談ください。</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- お問い合わせ（Contact Form 7） -->
      <section id="contact" class="p-contact">
        <div class="l-inner">
          <div class="p-p-contact__header">
            <div class="c-head p-contact__head">
              <div class="c-heading">
                <h2 class="c-header__eyebrow">CONTACT</h2>
                <span class="c-header__title">お問い合わせ</span>
              </div>
            </div>
          </div>
          <div class="p-contact__form--contents">
            <?php echo do_shortcode('[contact-form-7 id="1acf0ce" title="お問い合わせ"]'); ?>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
