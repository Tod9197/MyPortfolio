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
