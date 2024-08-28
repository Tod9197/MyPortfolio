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
