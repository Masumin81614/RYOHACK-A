// public/js/script.js

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

  // 背景クリックで閉じる（ここはそのままでOK）
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
});
