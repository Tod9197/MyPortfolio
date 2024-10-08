<?php get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual">
  <h2 class="mainVisual__topTitle">My Portfolio</h2>
</section>

<!-- 制作一覧 -->
<section class="works" id="works">
  <div class="inner">
  <h2 class="worksTitle">Works</h2>
  <div class="worksText__wrap">
  <p class="worksText">「<span>実務案件</span>」の項目には今まで携わらせていただいた業務でポートフォリオに掲載可能な案件を載せています。公開されているURLとGitHubのリポジトリはクライアント様に掲載許可をいただいています。
  </p>
  <p class="worksText">「<span>オリジナルアプリ</span>」は自身で企画・設計・実装・デプロイして公開したWebアプリを掲載しています。実際に利用できるアプリで、ユーザーの方にも使っていただいています。</p>
  <p class="worksText">「<span>オリジナルサイト</span>」はこのポートフォリオや、スクール課題で作成した架空のサイトを掲載しています。</p>
  </div>

  <?php $post_client_count = get_category_post_count('client-work'); ?>
  <?php $post_original_count = get_category_post_count('original-application'); ?>
  <?php $post_originalwebiste_count = get_category_post_count('original-website'); ?>

  <div class="worksTabs">
    <button class="worksTabs__button" onClick="showTab('clientWorks')">実務案件 (<?php echo esc_html($post_client_count); ?>)</button>
    <button class="worksTabs__button" onClick="showTab('orginalWorks')">オリジナル<br class="sp-only">アプリ (<?php echo esc_html($post_original_count); ?>)</button>
    <button class="worksTabs__button" onClick="showTab('orginalWebSite')">オリジナル<br class="sp-only">サイト (<?php echo esc_html($post_originalwebiste_count); ?>)</button>
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
          <a class="worksList__itemLink" href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
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

<!-- オリジナルアプリ -->
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
          <a class="worksList__itemLink" href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
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
<!-- オリジナルアプリここまで -->

<!-- オリジナルサイト -->
<div id="orginalWebSite" class="worksTab__content -originalWebSite">
<?php  
$args_originalwebsite = array(
    'post_type' => 'works',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'paged' => $paged,
    'tax_query' => array(
      array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => 'original-website',
      ),
    ),
  );

  $original_querysite = new WP_Query($args_originalwebsite);
?>
  <?php if($original_querysite->have_posts()) : ?>
    <ul class="worksList">
      <?php while($original_querysite->have_posts()) : $original_querysite->the_post(); ?>
        <li class="worksList__item">
          <a class="worksList__itemLink" href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
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
<!-- オリジナルサイトここまで -->
  </div>
</section>
<!-- 制作一覧ここまで -->


<!-- 自己紹介 About -->
<section class="profile" id="profile">
  <div class="inner">
    <h2 class="profileTitle">Profile</h2>
    <p class="profileName">山口理</p>
    <span class="profileName -english"> -Yamaguchi Tadashi-</span>
      <a class="profile__github" href="https://github.com/Tod9197"  target="_blank" rel="noopener noreferrer">
      <img class="profile__githubImg" src="<?php echo esc_url(get_theme_file_uri('/img/github-icon-01.png')); ?>" alt="GitHubアイコン">  
      </a>
    <div class="profileText__wrap">
      <div class="profileText__ouline">
    <p class="profileText">京都市在住。携帯電話販売スタッフ、通信会社の営業、フィリピンにある英会話スクールのスタッフなどの職歴を経て、 2020年にプログラミングの学習をスタートしました。</p>
    <p class="profileText">2022年より東京にあるWeb制作会社様より継続的にお仕事をいただき、主に<span>WordPress</span>や<span>JavaScript</span>などを使用したコーディング業務に携わらせていただいています(業務委託)</p>
    <p class="profileText">今までに<span>IT企業の自社サイトのフルリニューアル</span>、<span>土木建築会社のコーポレートサイト構築</span>といった数々のプロジェクトに入り、実務経験を積んできました。様々な経験をする中でどんどんとWebの世界にのめり込んでいき、もっとWebの世界を広く、深く知りたいと思い、Web開発と呼ばれる分野の学習範囲を広げてました。
    </p>
    <p class="profileText">2023年の後半から<span>Laravel,React,TypeScript,Next.js,GitHub,Docker</span>などを学習し、これらの技術を使いアプリなどを作成しています。また、個人で開発するだけではなく<span>チーム開発</span>にも携わることがあり、多くの人とコミュニュケーションを取り、周りを巻き込んで開発を進めていく楽しさ、醍醐味を日々感じています。これからはフロントエンド、バックエンド、インフラと全方向に自身のスキルを伸ばしていき、関わる企業様やクライアント様の利益に貢献したいと考えております。
    </p>
    </div>
    </div>
  </div>
</section>

<!-- 自己紹介 About ここまで -->

<!-- スキル -->
<section class="skills" id="skills">
  <div class="inner">
  <h2 class=" skillsTitle">Skills</h2>

  <h3 class="skillsCategory -frontEnd">FrontEnd</h3>
  <ul class="skillsList">
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/html-icon-01.png')); ?>" alt="HTMLアイコン">
      <span class="skillsList__itemText">HTML</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/css-icon-01.png')); ?>" alt="CSSアイコン">
      <span class="skillsList__itemText">CSS</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/scss-icon-01.png')); ?>" alt="SCSSアイコン">
      <span class="skillsList__itemText">SCSS</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/tailwindcss-icon-01.png')); ?>" alt="Tailwind CSSアイコン">
      <span class="skillsList__itemText">Tailwind CSS</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/js-icon-01.png')); ?>" alt="JavaScriptアイコン">
      <span class="skillsList__itemText">JavaScript</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/react-icon-01.png')); ?>" alt="Reactアイコン">
      <span class="skillsList__itemText">React</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/next.js-icon-01.png')); ?>" alt="Next.jsアイコン">
      <span class="skillsList__itemText">Next.js</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/typescript-icon-01.png')); ?>" alt="TypeScriptアイコン">
      <span class="skillsList__itemText">TypeScript</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/jquery-icon-01.png')); ?>" alt="jQueryアイコン">
      <span class="skillsList__itemText">jQuery</span>
    </li>
  </ul>

  <h3 class="skillsCategory -backEnd">BackEnd</h3>
  <ul class="skillsList">
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/php-icon-02.png')); ?>" alt="PHPアイコン">
      <span class="skillsList__itemText">PHP</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/laravel-icon-01.png')); ?>" alt="Laravelアイコン">
      <span class="skillsList__itemText">Laravel</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/mysql-icon-01.png')); ?>" alt="MySQLアイコン">
      <span class="skillsList__itemText">MySQL</span>
    </li>
  </ul>

  <h3 class="skillsCategory -others">System/Others</h3>
  <ul class="skillsList">
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/wordpress-icon-01.png')); ?>" alt="WordPressアイコン">
      <span class="skillsList__itemText">WordPress</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/github-icon-01.png')); ?>" alt="GitHubアイコン">
      <span class="skillsList__itemText">GitHub</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/docker-icon-01.png')); ?>" alt="Dockerアイコン">
      <span class="skillsList__itemText">Docker</span>
    </li>
    <li class="skillsList__item">
      <img class="skillsList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/xd-icon-01.png')); ?>" alt="XDアイコン">
      <span class="skillsList__itemText">XD</span>
    </li>
  </ul>
</div>
</section>
<!-- スキルここまで -->

<!-- Contactセクション -->
<section class="contact" id="contact">
  <div class="inner">
    <div class="contactWrap">
      <div class="contactOutline">
        <h3 class="contactTitle">Contact</h3>
        <a href="<?php echo esc_url(home_url('/contact-page')); ?>" class="contactButton">お問い合わせはこちら</a>
      </div>
    </div>
  </div>
</section>
<!-- Contactセクションここまで -->

<?php get_footer(); ?>
