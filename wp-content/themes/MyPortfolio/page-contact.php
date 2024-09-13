<?php
/**
 * Template Name: お問い合わせ
 * @package WordPress
 *
 */
?>
<?php get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual -pageContact">
  <h2 class="pageContact__title">Contact</h2>
</section>

<!-- コンタクトフォーム -->
<section class="pageContact">
  <div class="inner">
    <div class="pageContact__content">
      <div class="pageContact__contentInner">
        <?php echo do_shortcode('[contact-form-7 id="53a539b" title="お問い合わせフォーム"]'); ?>
    </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

