document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".l-header");
    const logoImg = document.querySelector(".p-header-branding__link--image");

    // 固定ヘッダー用：実測高さをCSS変数へ
    const setHeaderOffset = () => {
        if (!header) return;
        const h = Math.ceil(header.getBoundingClientRect().height);
        document.documentElement.style.setProperty("--header-h", `${h}px`);
    };

    const showHeader = () => {
        if (header) header.style.visibility = "";
    };

    if (header) header.style.visibility = "hidden";

    const fontsReady = document.fonts ? document.fonts.ready : Promise.resolve();
    const logoReady =
        logoImg && typeof logoImg.decode === "function"
            ? logoImg.decode().catch(() => undefined)
            : Promise.resolve();

    const fallbackTimer = setTimeout(showHeader, 1500);

    Promise.all([fontsReady, logoReady])
        .then(() => {
            clearTimeout(fallbackTimer);
            showHeader();
            setHeaderOffset();
        })
        .catch(() => {
            clearTimeout(fallbackTimer);
            showHeader();
            setHeaderOffset();
        });

    // 初期値設定とリサイズ追従
    setHeaderOffset();
    window.addEventListener("resize", setHeaderOffset, { passive: true });
    if (document.fonts?.ready) {
        document.fonts.ready.then(setHeaderOffset).catch(() => {});
    }
    if ("ResizeObserver" in window && header) {
        new ResizeObserver(setHeaderOffset).observe(header);
    }

    // 1. HTMLのクラス名と完全に一致させました
    const toggleBtn = document.querySelector(".js-sp-menu-toggle");
    const spMenu = document.querySelector(".p-sp-menu"); // HTMLのclassに合わせて変更

    // 2. 念のため取得の確認（コンソールでチェック可能）
    if (!toggleBtn || !spMenu) {
        console.error("要素が取得できていません。HTMLのクラス名を確認してください。");
        return;
    }

    // 1024px以上になったらSPメニューを強制的に閉じる
        const mql = window.matchMedia("(min-width: 1024px)");
        const closeSpMenu = () => {
        spMenu.classList.remove("js-show");
        toggleBtn.classList.remove("js-show");
        toggleBtn.setAttribute("aria-expanded", "false");
        spMenu.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
        };
        const onBreakpointChange = (e) => {
        if (e.matches) closeSpMenu();
        };
        // 初期状態がすでにPC幅なら閉じる
        if (mql.matches) closeSpMenu();
        // 監視
        if (typeof mql.addEventListener === "function") {
        mql.addEventListener("change", onBreakpointChange);
        } else {
        // 古いSafari用
        mql.addListener(onBreakpointChange);
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