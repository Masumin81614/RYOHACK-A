document.addEventListener("DOMContentLoaded", function () {
  // メインビジュアル
  new Swiper(".js-hero-slider", {
    loop: true,
    speed: 800,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".js-hero-pagination",
      clickable: true,
    },
  });

  // Tab
  const tabs = document.querySelectorAll(".p-courses-tabs__item");
  const panels = document.querySelectorAll(".p-courses-tabs__content-wrap");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      // 全部のタブを未選択に、パネルを非表示にする
      tabs.forEach((t) => t.setAttribute("aria-selected", "false"));
      panels.forEach((p) => p.classList.remove("js-show"));

      // クリックされたやつだけ選択状態にする
      tab.setAttribute("aria-selected", "true");
      panels[index].classList.add("js-show");
    });
  });

  // Modal
  document.addEventListener("DOMContentLoaded", function () {
    // --- 1. モーダルを開く処理 ---
    // HTMLのクラス名「.p-courses-tab__btn」に合わせて取得
    const openBtns = document.querySelectorAll(".p-courses-tab__btn");

    if (openBtns.length > 0) {
      // ボタンが存在するときだけ実行
      openBtns.forEach((button) => {
        button.addEventListener("click", () => {
          const dialogId = button.getAttribute("data-dialog");
          const dialog = document.getElementById(dialogId);

          if (dialog) {
            // ダイアログが存在するときだけ実行
            dialog.showModal();
            dialog.classList.add("js-show");
          } else {
            console.error("ID: " + dialogId + " のdialogが見つかりません");
          }
        });
      });
    }

    // --- 2. モーダルを閉じる処理 ---
    const closeBtns = document.querySelectorAll(".modal__close-btn");
    closeBtns.forEach((button) => {
      button.addEventListener("click", () => {
        const dialog = button.closest("dialog");
        if (dialog) {
          dialog.classList.remove("js-show");
          // transitionの時間を待ってからclose()を呼ぶとアニメーションが消えません
          setTimeout(() => {
            dialog.close();
          }, 300);
        }
      });
    });

    // --- 3. オーバーレイ（外側）クリックで閉じる ---
    const allDialogs = document.querySelectorAll("dialog");
    allDialogs.forEach((dialog) => {
      dialog.addEventListener("click", (event) => {
        // 背景部分がクリックされたか判定
        if (event.target === dialog) {
          dialog.classList.remove("js-show");
          setTimeout(() => {
            dialog.close();
          }, 300);
        }
      });
    });
  });

  // FAQ アコーディオン
  document.querySelectorAll(".js-accordion").forEach(function (accordion) {
    accordion.querySelectorAll(".js-accordion-toggle").forEach(function (btn) {
      btn.addEventListener("click", function () {
        const item = btn.closest(".p-faq-item");
        const panel = item.querySelector(".js-accordion-panel");
        const expanded = btn.getAttribute("aria-expanded") === "true";
        btn.setAttribute("aria-expanded", String(!expanded));
        panel.setAttribute("aria-hidden", String(expanded));
        item.classList.toggle("is-open", !expanded);
      });
    });
  });
});
