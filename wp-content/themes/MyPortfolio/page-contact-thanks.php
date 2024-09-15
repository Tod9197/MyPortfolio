<?php
/**
 * Template Name: お問い合わせ完了ページ
 * @package WordPress
 *
 */
?>
<?php get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual -pageContact__thanks">
  <h2 class="pageContact__title -thanks">Contact</h2>
</section>

<!-- コンタクトフォーム -->
<section class="pageContact__thanks">
  <div class="inner">
    <div class="pageContact__thanksContent">
      <h2 class="pageContact__thanksTitle">
        送信完了
      </h2>
      <p class="pageContact__thanksText">
        この度はメッセージを送信いただき誠にありがとうございます。
        <br>
        お問い合わせいただいた内容につきましては3日以内に返信いたします。</p>
         <p class="pageContact__thanksText">※自動返信メールを送らせていただいています。</p>
        <a class="pageContact__backButton" href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a>
    </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
