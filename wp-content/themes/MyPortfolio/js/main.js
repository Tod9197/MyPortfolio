// ヘッダーと文字の色を変更
window.addEventListener("scroll", function () {
  const header = document.querySelector(".header");
  const headerTitle = document.querySelector(".headerTitle");
  const headerNavItems = document.querySelectorAll(
    ".headerNav__listItem__link"
  );
  const hamburgerLines = document.querySelectorAll(".hamburgerLine");
  const mainVisual = document.querySelector(".mainVisual");
  const mainVisualHeight = mainVisual.clientHeight - 100;

  if (this.window.scrollY >= mainVisualHeight) {
    header.style.backgroundColor = "white";
    header.style.borderBottom = "2px solid #ddd";
    headerTitle.style.color = "black";
    headerNavItems.forEach(function (item) {
      item.style.color = "black";
    });
    hamburgerLines.forEach(function (item) {
      item.style.backgroundColor = "black";
    });
  } else {
    header.style.backgroundColor = "transparent";
    header.style.borderBottom = "none";
    headerTitle.style.color = "white";
    headerNavItems.forEach(function (item) {
      item.style.color = "white ";
    });
    hamburgerLines.forEach(function (item) {
      item.style.backgroundColor = "white";
    });
  }
});

// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", function () {
  const hamburgerBtn = document.getElementById("js-hamburger");
  const hamburgerLineFirst = document.getElementById("js-hamburgerLine-first");
  const hamburgerLineSecond = document.getElementById(
    "js-hamburgerLine-second"
  );
  const hamburgerLineThird = document.getElementById("js-hamburgerLine-third");
  const hamburgerNav = document.getElementById("js-hamburger-nav");
  const hamburgerNavItems = document.querySelectorAll(
    ".hamburgerNav__listItem__link"
  );

  hamburgerBtn.addEventListener("click", function () {
    hamburgerLineFirst.classList.toggle("rotateRight");
    hamburgerLineSecond.classList.toggle("opacity");
    hamburgerLineThird.classList.toggle("rotateLeft");
    hamburgerNav.classList.toggle("active");
  });
  hamburgerNavItems.forEach(function (item) {
    item.addEventListener("click", function () {
      hamburgerNav.classList.remove("active");
    });
  });
});

// 文字数制限
document.addEventListener("DOMContentLoaded", function () {
  const linkElement = document.getElementById("shortened-link");

  if (linkElement) {
    const fullText = linkElement.textContent;
    const maxLength = 40;

    if (fullText.length > maxLength) {
      const truncatedText = fullText.substring(0, maxLength) + "...";
      linkElement.textContent = truncatedText;
    }
  }
});

//カテゴリータブ切り替え(フロントページ)
document.addEventListener("DOMContentLoaded", function () {
  showTab("clientWorks");
});

function showTab(tabId) {
  let contents = document.querySelectorAll(".worksTab__content");
  contents.forEach(function (content) {
    content.style.display = "none";
  });

  let tabContent = document.getElementById(tabId);
  if (tabContent) {
    tabContent.style.display = "block";
  }
  // 全てのボタンからactiveクラスを削除
  let buttons = document.querySelectorAll(".worksTabs__button");
  buttons.forEach(function (button) {
    button.classList.remove("active");
  });
  // 選択されたボタンにactiveクラスを追加
  let activeButton = document.querySelector(
    `.worksTabs__button[onClick="showTab('${tabId}')"]`
  );
  if (activeButton) {
    activeButton.classList.add("active");
  }
}
