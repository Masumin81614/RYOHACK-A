document.addEventListener("DOMContentLoaded", function () {
  // --- 1. Tabの切り替え処理 ---
  const tabs = document.querySelectorAll(".p-courses-tabs__item");
  const panels = document.querySelectorAll(".p-courses-tabs__content-wrap");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", (e) => {
      e.preventDefault(); // ★タブクリック時のジャンプも防止
      tabs.forEach((t) => t.setAttribute("aria-selected", "false"));
      panels.forEach((p) => p.classList.remove("js-show"));
      tab.setAttribute("aria-selected", "true");
      if (panels[index]) panels[index].classList.add("js-show");
    });
  });

  // --- 2. モーダルの処理 ---
  const openBtns = document.querySelectorAll(".modal__open-btn");

  openBtns.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault(); // 開く時のジャンプを防止

      const dialogId = button.getAttribute("data-dialog");
      const dialog = document.getElementById(dialogId);

      if (dialog) {
        dialog.showModal();
        requestAnimationFrame(() => {
          dialog.classList.add("js-show");
        });
      }
    });
  });

  // 閉じるボタンの処理
  const closeBtns = document.querySelectorAll(".modal__close-btn");
  closeBtns.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault(); // ★閉じる時のジャンプも防止
      const dialog = button.closest("dialog");
      if (dialog) {
        dialog.classList.remove("js-show");
        setTimeout(() => {
          dialog.close();
        }, 300);
      }
    });
  });

  // 背景クリックで閉じる
  const allDialogs = document.querySelectorAll("dialog");
  allDialogs.forEach((dialog) => {
    dialog.addEventListener("click", (event) => {
      if (event.target === dialog) {
        dialog.classList.remove("js-show");
        setTimeout(() => dialog.close(), 300);
      }
    });
  });

  // --- 3. FAQ アコーディオン ---
  document.querySelectorAll(".js-accordion").forEach(function (accordion) {
    accordion.querySelectorAll(".js-accordion-toggle").forEach(function (btn) {
      btn.addEventListener("click", function (e) {
        e.preventDefault(); // ★画面がジャンプするのを防ぐ必須コード

        const item = btn.closest(".p-faq-item");
        const panel = item.querySelector(".js-accordion-panel");
        const expanded = btn.getAttribute("aria-expanded") === "true";

        // 状態の切り替え
        btn.setAttribute("aria-expanded", String(!expanded));
        panel.setAttribute("aria-hidden", String(expanded));
        item.classList.toggle("is-open", !expanded);
      });
    });
  });

  // --- 4. セレクトボックスのプレースホルダー色変更 ---
  const selects = document.querySelectorAll(".wpcf7-select");

  selects.forEach(function (select) {
    // 状態をチェックしてクラスを付け外しする関数
    function updateColor() {
      if (select.value === "") {
        select.classList.remove("is-selected"); // 未選択なら薄いまま
      } else {
        select.classList.add("is-selected"); // 何か選ばれたら濃くする
      }
    }

    // ① ページ読み込み時に1回チェック
    updateColor();

    // ② 選択が変わった時にチェック
    select.addEventListener("change", updateColor);
  });
});

const fadeElements = document.querySelectorAll(".js-fadein");

const fadeObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-active");
        observer.unobserve(entry.target);
      }
    });
  },
  {
    root: null,
    rootMargin: "0px 0px -20% 0px",
    threshold: 0,
  },
);

fadeElements.forEach((el) => {
  fadeObserver.observe(el);
});

// =========================================================
// 背景パララックス（CTAセクション）
// =========================================================
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".js-parallax3").forEach((wrap) => {
  const y = wrap.getAttribute("data-y") || -200;
  gsap.to(wrap, {
    y: y,
    scrollTrigger: {
      trigger: wrap.parentElement, // 親要素（CTAのセクション自体）が画面に入ったら動かす
      start: "top bottom",
      end: "bottom top",
      scrub: 0.5,
    },
  });
});

// =========================================================
// スムーススクロール
// =========================================================

const smoothScrollTriggers = document.querySelectorAll('a[href^="#"]');

smoothScrollTriggers.forEach(function (trigger) {
  trigger.addEventListener("click", function (e) {
    e.preventDefault();

    const href = trigger.getAttribute("href");

    const targetElement = href === "#" ? document.body : document.querySelector(href);

    if (targetElement) {
      targetElement.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

$(window).on("scroll", function () {
  const scrollTop = $(this).scrollTop();
  const windowHeight = $(window).height();
  const $contact = $("#contact");
  const $jsBtn = $(".p-main__fix--btn"); // クラス名に合わせて修正

  const contactTop = $contact.length ? $contact.offset().top : Infinity;
  const isShow = scrollTop > 80 && (scrollTop + windowHeight < contactTop);

  if (isShow) {
    $jsBtn.addClass("is-show"); // クラスを付与
  } else {
    $jsBtn.removeClass("is-show"); // クラスを削除
  }
});

// クリックイベント
$(".p-main__fix--btn-link").on("click", function () {
  $("html, body").animate({ scrollTop: 0 }, 500);
  return false;
});