<?php get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual">

</section>


<!-- 制作一覧 -->
<section class="works">
  <div class="inner">
  <h2 class="worksTitle">Works</h2>
  <?php  
  if(get_query_var('paged')){
    $paged = ger_query_var('paged');
  } elseif(get_query_var('page')){
    $paged = get_query_var('page');
  } else {
    $paged = 1;
  }
  $works_category_slug = get_query_var('works_category');//カテゴリースラッグを取得

  $args = array(
    'post_type' => 'works',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'paged' => $paged,
  );

  $works_query = new WP_Query($args);
  ?>
  <?php if($works_query->have_posts()) : ?>
    <ul class="worksList">
      <?php while($works_query->have_posts()) : $works_query->the_post(); ?>
        <li class="worksList__item">
          <a class="worksList__itemLink" href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full',array('class' => 'worksList__itemImg')); ?>
            <?php endif; ?>
            <p class="worksList__itemTitle"><?php the_title(); ?></p>
            <div class="worksList__itemCategory">
              <?php 
              $categories = get_the_category(); 
              if(!empty($categories)){
                echo esc_html($categories[0] -> name);
              }
              ?>
            </div>
            <p class="worksList__tagList">
              <?php  
              $tags = get_the_tags();
              if($tags){
                $tags_name = array();
                foreach($tags as $tag){
                  $tags_name[] = '<span class="worksList__tagItem">' . esc_html($tag->name) . '</span>';
                }
                echo implode('',$tags_name);
              }
              ?>
            </p>
            
            <p class="worksList__itemButton">詳しく見る</p>
          </a>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  <?php endif; ?>


  </div>
</section>

<!-- スキル -->
<section class="skills">
  <div class="inner">
  <h2 class=" skillsTitle">Skills</h2>

  <ul class="skillsList">
    <li class="skillsList__item">
    </li>
  </ul>
</div>
</section>

  <?php wp_footer(); ?>
</body>
</html>
