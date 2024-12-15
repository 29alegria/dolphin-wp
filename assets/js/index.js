// 初回のみのオープニングアニメーション
function openingAnime() {
  const body = document.querySelector(".js_body");
  body.classList.toggle("is-active");

  gsap.timeline()
    .from(".js_opening-logo", {
      duration: 2,
      autoAlpha: 0,
      y: 40,
    })
    .to(".js_opening-logo", {
      duration: 0.6,
      scale: 0.8,
      y: 40,
    })
    .to(".js_opening-logo", {
      duration: 0.6,
      y: -8, // 上に移動
      yoyo: true, // 移動を逆方向に繰り返す
      repeat: -1, // 無限ループ
      ease: "power1.inOut", // スムーズなバウンド効果
    } ,"<")
    .from(".js_opening-txt", {
      duration: 2,
      autoAlpha: 0,
      y: 40,
    })
    .to(".js_opening", {
      autoAlpha: 0,
      duration: 3,
      onComplete: function () {
        body.classList.toggle("is-active");
        underlineAnimation(); // 初回アニメーションの最後に下線アニメーションを実行
        gsap.killTweensOf(".js_opening-logo"); // バウンドアニメーションを停止
      },
    });

}

// 常時実行する下線のアニメーション
function underlineAnimation() {
  gsap.timeline()
    .to(".js_copy .line1", {
      duration: 1,
      backgroundSize: "100% 8px",
      ease: "power1.out",
    })
    .to(".js_copy .line2", {
      duration: 1,
      backgroundSize: "100% 8px",
      ease: "power1.out",
    }, "+=0.2"); // 0.2秒遅延
}

// openingAnime();

// 初回アクセス時の処理
const opening = document.querySelector(".js_opening");

function webStorage() {
  if (sessionStorage.getItem('access')) {
    // 初回以外のアクセス時は下線アニメーションのみ実行
    underlineAnimation();
    opening.classList.add("is-active");
  } else {
    // 初回アクセス時の処理
    sessionStorage.setItem('access', 0);
    openingAnime(); // 初回アニメーション（下線アニメーションを含む）
  }
}

webStorage();
