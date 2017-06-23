<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php if ( is_home() ) {
      bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
      single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
      single_post_title();
    } elseif (is_search() ) {
      echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
      echo '页面未找到!';
    } else {
      wp_title('',true);
    } ?>
  </title>
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
  <script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url')?>/assets/js/theme.js" type="text/javascript"></script>
  <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url')?>/style.css" rel="stylesheet">
  <link id="favicon" href="<?php bloginfo('template_url')?>/assets/img/logo_w.png" rel="icon"/>
</head>
  <body>
    <div class="container">
      <!-- 菜单 -->
      <nav class="navbar navbar-default" role="navigation">  
        <div class="container-fluid">  
          <!--header section -->  
          <div class="navbar-header">  
            <button type="button" class="navbar-toggle"   
                data-toggle="collapse"   
                data-target=".navbar-ex1-collapse">  
              <span class="sr-only">Toggle navigation</span>  
              <span class="icon-bar"></span>  
              <span class="icon-bar"></span>  
              <span class="icon-bar"></span>  
            </button>  
            <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url')?>/assets/img/logo.png" width="100"></a>  
          </div>  
          <!-- menu section -->  
          <div class="collapse navbar-collapse navbar-ex1-collapse">  
            <ul class="nav navbar-nav navbar-right">  
              <?php 
                // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
                wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 1));
              ?>
            </ul>  
          </div>  
        </div>  
      </nav>