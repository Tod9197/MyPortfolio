<?php  

get_header();
?>

<!-- メインビジュアル -->
<section class="mainVisual -worksDetail">
  <h2 class="worksDetail__title">Works</h2>
</section>


<!-- 詳細 -->
<section class="worksDetail">
  <div class="inner">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <div class="worksDetail__flex">
        <div class="worksDetail__subTitlePart">
        <h3 class="worksDetail__subTitle"><?php the_title(); ?></h3>
        <div class="worksDetail__category"><?php the_category(','); ?></div>
        <?php  
        $custom_url = get_field('custom_url'); 
        if($custom_url) : ?>
          <a class="worksDetail__link" href="<?php echo esc_html($custom_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($custom_url); ?></a>
        </div>
        <?php if(has_post_thumbnail()) : ?>
          <a class="worksDetail__photosLink" href="<?php echo esc_html($custom_url); ?>" target="_blank" rel="noopener noreferrer">
          <?php the_post_thumbnail('full',array('class'=>'worksDetail__photosItem')); ?>
          </a>
        <?php endif; ?>
        <?php endif; ?>
      </div>
      <div><?php the_content(); ?></div>

    <?php 
      $tags = get_the_terms(get_the_ID(), 'post_tag'); // 'post_tag' はタグのタクソノミー
      if ($tags && !is_wp_error($tags)) : ?>
        <div class="worksDetail__tags">
          <ul class="worksDetail__tagsList">
            <?php foreach ($tags as $tag) : ?>
              <li class="worksDetail__tagsItem <?php echo esc_attr($tag->slug);?>" ><?php echo esc_html($tag->name); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
    <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>
