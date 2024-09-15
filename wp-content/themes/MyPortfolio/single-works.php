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
        <div class="worksDetail__category"><?php the_category(' '); ?></div>
        <div class="worskDetail__linkWrap">
        <?php  
        $custom_url = get_field('custom_url'); 
        if($custom_url) : ?>
          <a class="worksDetail__link" href="<?php echo esc_html($custom_url); ?>" target="_blank" rel="noopener noreferrer"><span>URL : </span><?php echo esc_html($custom_url); ?></a>
        <?php endif; ?>
        <?php  
        $github_url = get_field('github_url');
        if($github_url) : ?>
        <a class="worksDetail__githubLink" href="<?php echo esc_html($github_url); ?>" target="_blank" rel="noopener noreferrer"><span>GitHub : </span><?php echo esc_html($github_url); ?></a>
        <?php endif; ?>
        </div>
        </div>
        <?php if(has_post_thumbnail()) : ?>
          <a class="worksDetail__photosLink" href="<?php echo esc_html($custom_url); ?>" target="_blank" rel="noopener noreferrer">
          <?php the_post_thumbnail('full',array('class'=>'worksDetail__photosItem')); ?>
          </a>
        <?php endif; ?>
      </div>
      <div><?php the_content(); ?></div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>
