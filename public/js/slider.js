// HTMLにあるクラス名「.p-hero__swiper」を正確に指定します
const cardSwiper = new Swiper(".p-hero__swiper", {
  speed: 1000,
  effect: "fade",
  fadeEffect: {
    crossFade: true, // フェードが重ならないように必須
  },
  loop: true,
  allowTouchMove: true,

  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },

  // フェードの時は slidesPerView は必ず 1 です
  slidesPerView: 1,

  // ページネーション（コンテナの外にある場合はこれでOK）
  pagination: {
    el: ".js-hero-pagination",
    clickable: true,
  },
  on: {
    init: function () {
      // 1枚目のスライドの中にある画像とタイトルを取得
      const activeSlide = this.slides[this.activeIndex];
      const heroImage = activeSlide.querySelector(".p-hero__image");
      const heroContent = activeSlide.querySelector(".p-hero__content");

      // ボタンはスライダーの外にいるので全体から取得
      const heroCta = document.querySelector(".p-hero__cta");

      // GSAPのタイムライン（連続アニメーション）を作成
      const tl = gsap.timeline();

      // ① 画像：透明からふわっと下から上に（30px）
      tl.from(heroImage, {
        autoAlpha: 0, // opacity: 0 と visibility: hidden を兼ねた便利機能
        y: 30,
        duration: 1,
        ease: "power2.out",
      })
        // ② タイトル：画像の完了0.5秒前に「食い気味」でスタート
        .from(
          heroContent,
          {
            autoAlpha: 0,
            y: 20,
            duration: 0.8,
            ease: "power2.out",
          },
          "-=0.5",
        )
        // ③ ボタン：タイトルの完了0.4秒前に「食い気味」でスタート
        .from(
          heroCta,
          {
            autoAlpha: 0,
            y: 20,
            duration: 0.8,
            ease: "power2.out",
          },
          "-=0.4",
        );
    },
  },
});

const swiper = new Swiper(".js-teachers-slider", {
  slidesPerView: 1.2,
  spaceBetween: 24,

  breakpoints: {
    1024: {
      slidesPerView: 3.2, // PCでは2枚半見せる
      spaceBetween: 40, // PC用の余白
    },
  },

  scrollbar: {
    el: ".js-teachers-scrollbar", //.swiper-scrollbarをスクロールバーに指定
    hide: false, // スクロールバーが常に表示される
    draggable: true, // スクロールバーをドラッグ可能にする
  },

  // ナビゲーション
  navigation: {
    prevEl: ".js-teachers-prev",
    nextEl: ".js-teachers-next",
  },
});
