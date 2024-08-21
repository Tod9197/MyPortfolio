<?php  
/** 
 * Template Name:CLANE Webサイト
 *
 *  
*/
get_header();
?>

<!-- メインビジュアル -->
<section class="mainVisual -worksDetail">
  <h2 class="worksDetail__title">Works Detail</h2>
</section>

<!-- 詳細 -->
<section class="worksDetail">
  <div class="inner">
    <h3 class="worksDetail__subTitle">株式会社CLANE様</h3>
    <a class="worksDetail__link" href="https://clane.co.jp/" target="_blank" rel="noopener noreferrer">https://clane.co.jp/</a>
    <div class="worksDetail__photos">
      <a class="worksDetail__photosLink" href="https://clane.co.jp/" target="_blank" rel="noopener noreferrer">
      <img class="worksDetail__photosItem" src="<?php echo esc_url(get_theme_file_uri('/img/clane-03.png')) ?>" alt="コーポレートサイト画像1">
      </a>
      <a class="worksDetail__photosLink" href="https://clane.co.jp/blog/" target="_blank" rel="noopener noreferrer">
      <img class="worksDetail__photosItem" src="<?php echo esc_url(get_theme_file_uri('/img/clane-02.png')) ?>" alt="コーポレートサイト画像2">
      </a>
      <a class="worksDetail__photosLink" href="https://clane.co.jp/" target="_blank" rel="noopener noreferrer">
      <img class="worksDetail__photosItem" src="<?php echo esc_url(get_theme_file_uri('/img/clane-01.png')) ?>" alt="コーポレートサイト画像3">
      </a>
      <a class="worksDetail__photosLink" href="https://clane.co.jp/service/" target="_blank" rel="noopener noreferrer">
      <img class="worksDetail__photosItem" src="<?php echo esc_url(get_theme_file_uri('/img/clane-05.png')) ?>" alt="コーポレートサイト画像4">
      </a>
    </div>
    <p class="worksDetail__description">コーポレートサイト制作</p>
    <p class="worksDetail__description">東京の<span class="worksDetail__fontbold">WEB制作会社CLANE</span>様の自社ホームページ、フルリニューアルに伴いコーディング業務を担当させていただきました。
    </p>
    <p class="worksDetail__description">デザイナー様が作成されたデザインを元に全26ページのコーディングを担当</p>
    <p class="worksDetail__description -lang">使用言語・システム・ツールなど :</p>
    <ul class="worksDetail__toolFlex">
    <li class="worksDetail__tool">WordPress</li><li class="worksDetail__tool">HTML</li><li class="worksDetail__tool">CSS</li><li class="worksDetail__tool">SCSS</li><li class="worksDetail__tool">JavaScript</li><li class="worksDetail__tool">jQuery</li><li class="worksDetail__tool">Adobe XD</li>
    </ul>
    <p class="worksDetail__description">JavaScript→クライアント様からのご要望で、後にVue.jsに切り替える可能性のあるため素のJavaScriptで実装</p>
  </div>
</section>