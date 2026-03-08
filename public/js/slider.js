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
