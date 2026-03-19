document.addEventListener("DOMContentLoaded", () => {
    // 1. HTMLのクラス名と完全に一致させました
    const toggleBtn = document.querySelector(".js-sp-menu-toggle");
    const spMenu = document.querySelector(".p-sp-menu"); // HTMLのclassに合わせて変更

    // 2. 念のため取得の確認（コンソールでチェック可能）
    if (!toggleBtn || !spMenu) {
        console.error("要素が取得できていません。HTMLのクラス名を確認してください。");
        return;
    }

    // 3. クリックイベント
    toggleBtn.addEventListener("click", (e) => {
        e.stopPropagation(); // documentへの伝播を防ぐ

        // クラスの付け替え
        const isOpen = spMenu.classList.toggle("js-show");
        toggleBtn.classList.toggle("js-show");

        // アクセシビリティの更新
        toggleBtn.setAttribute("aria-expanded", isOpen);
        spMenu.setAttribute("aria-hidden", !isOpen);

        // 背景スクロール制御
        if (isOpen) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = "";
        }
    });

    // 4. メニューの外側をクリックしたら閉じる
    document.addEventListener("click", (e) => {
        if (spMenu.classList.contains("js-show") && !spMenu.contains(e.target) && !toggleBtn.contains(e.target)) {
            spMenu.classList.remove("js-show");
            toggleBtn.classList.remove("js-show");
            document.body.style.overflow = "";
        }
    });

    // 5. メニュー内のリンクをクリックしたら閉じる（スムーススクロール用）
    const menuLinks = spMenu.querySelectorAll('a[href^="#"]');
    menuLinks.forEach(link => {
        link.addEventListener("click", () => {
            spMenu.classList.remove("js-show");
            toggleBtn.classList.remove("js-show");
            document.body.style.overflow = "";
        });
    });
});