<?php get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual -worksArchive">
  <h2 class="worksArchive__title">Works</h2>
</section>


<!-- 制作一覧 -->
<section class="works">
  <div class="inner">
  <h2 class="worksTitle">Works</h2>

  <?php $post_client_count = get_category_post_count('client-work'); ?>
  <?php $post_original_count = get_category_post_count('original-application'); ?>

  <div class="worksTabs">
    <button class="worksTabs__button" onClick="showTab('clientWorks')">実務案件 (<?php echo esc_html($post_client_count); ?>)</button>
    <button class="worksTabs__button" onClick="showTab('orginalWorks')">オリジナル制作 (<?php echo esc_html($post_original_count); ?>)</button>
  </div>

  <?php  
  if(get_query_var('paged')){
    $paged = ger_query_var('paged');
  } elseif(get_query_var('page')){
    $paged = get_query_var('page');
  } else {
    $paged = 1;
  }
  ?>
  
<!-- 実務案件 -->
<div id="clientWorks" class="worksTab__content">
<?php  
$args_client = array(
    'post_type' => 'works',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'paged' => $paged,
    'tax_query' => array(
      array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => 'client-work',
      ),
    ),
  );
  $client_query = new WP_Query($args_client);
?>
  <?php if($client_query->have_posts()) : ?>
    <ul class="worksList">
      <?php while($client_query->have_posts()) : $client_query->the_post(); ?>
        <li class="worksList__item">
          <a class="worksList__itemLink" href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full',array('class' => 'worksList__itemImg')); ?>
            <?php endif; ?>
            <p class="worksList__itemTitle"><?php the_title(); ?></p>
            <div class="worksList__categoryFlex">
              <?php 
              $categories = get_the_category(); 
              if(!empty($categories)){
                foreach($categories as $category){
                  echo '<span class="worksList__itemCategory">' . esc_html($category->name) . '</span>';
                }
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
<!-- 実務案件ここまで -->

<!-- オリジナル制作 -->
<div id="orginalWorks" class="worksTab__content -originalWorks">
<?php  
$args_original = array(
    'post_type' => 'works',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'paged' => $paged,
    'tax_query' => array(
      array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => 'original-application',
      ),
    ),
  );

  $original_query = new WP_Query($args_original);
?>
  <?php if($original_query->have_posts()) : ?>
    <ul class="worksList">
      <?php while($original_query->have_posts()) : $original_query->the_post(); ?>
        <li class="worksList__item">
          <a class="worksList__itemLink" href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full',array('class' => 'worksList__itemImg')); ?>
            <?php endif; ?>
            <p class="worksList__itemTitle"><?php the_title(); ?></p>
            <div class="worksList__categoryFlex">
              <?php 
              $categories = get_the_category(); 
              if(!empty($categories)){
                foreach($categories as $category){
                  echo '<span class="worksList__itemCategory">' . esc_html($category->name) . '</span>';
                }
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
<!-- オリジナル制作ここまで -->
  </div>
</section>