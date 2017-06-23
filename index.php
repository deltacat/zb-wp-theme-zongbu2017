<?php get_header(); ?>
<!-- 轮播器 -->
<div id="hero" class="carousel slide first-carousel">
  <div class="zb-hero-content">
    <div class="zb-title">杭州宗布科技有限公司</div>
    <div class="zb-description">让您感受专业优质的软件技术服务，为您提供专业的技术支持。</div>
    <div class="zb-hero-button-group">
      <a href="#" class="zb-hero-button zb-service-btn">我们的服务</a>
      <a href="#" class="zb-hero-button zb-connact-btn">立刻联系</a>
    </div>
  </div>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php bloginfo('template_url')?>/assets/img/hero1.png" width="100%" alt="First slide">
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_url')?>/assets/img/hero1.png" width="100%" alt="Second slide">
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_url')?>/assets/img/hero1.png" width="100%" alt="Third slide">
    </div>
  </div>
</div> 

<!-- 业务内容 -->
<div class="zb-service">
  <div class="service-title">我们的服务</div>
  <div class="service-connact">
    <p>感兴趣吗？<a href="">查看更多~</a></p>
  </div>
  <div class="bubble"></div>
</div>
<div class="zb-service-detail">
  <?php  
    $args = array(  
      'cat' => 3,   // 分类ID  
      'posts_per_page' => 3, // 显示篇数  
    );  
    query_posts($args);  
    if(have_posts()) : $count=0;while (have_posts()) : the_post();  
  ?>
  <div class="zb-service-item">
    <div class="zb-service-item-logo <?php if ($count == 1) {echo 'back-orange';}else {echo 'back-black';} ?>"></div>
    <div class="zb-service-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="zb-service-item-content">
      <?php if (has_excerpt()) {  
          echo $description = get_the_excerpt(); //文章编辑中的摘要  
        }else {  
          echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 105,"……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要  
        } 
      ?>
    </div>
    <div class="zb-service-item-bottom <?php if ($count == 1) {echo 'back-orange';}else {echo 'back-black';} ?>"></div>
  </div>
  <?php  $count++;endwhile; endif; wp_reset_query(); ?>
</div>

<!-- 业务内容 -->
<div class="zb-case">
  <div class="zb-case-content">
    <div class="zb-case-content-title">我们的案例</div>
    <div class="zb-case-content-content">宗布科技在移动设备人机交互封面有独特的创新思维以及科学系统的体验设计方法论，在用研、交互、视觉方面累积了丰富发体验设计管理经验和高效的质量管控机制。在专业技能、输出质量以及综合服务方面获得客户一致好评。</div>
    <div class="zb-case-content-bottom back-black"></div>
  </div>
</div>
<div class="zb-case-img">
  <img src="<?php bloginfo('template_url')?>/assets/img/case.png" width="100%">
</div>
<div class="zb-strength" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/strength_bg.png);">
  <div class="zb-strength-content">
    <div class="zb-strength-content-title">我们的优势</div>
    <div class="zb-strength-content-content">企业服务+人才基地+技术研发三位一体</div>
    <div class="zb-strength-content-bottom back-orange"></div>
  </div>
  <div class="zb-strength-detail">
    <?php  
      $args = array(  
        'cat' => 4,   // 分类ID  
        'posts_per_page' => 4, // 显示篇数  
      );  
      query_posts($args);  
      if(have_posts()) : while (have_posts()) : the_post();  
    ?>
    <div class="zb-strength-detail-item">
      <div class="zb-strength-item-title" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/strength_item.png);"><?php the_title(); ?></div>
      <div class="zb-strength-item-content">
        <?php if (has_excerpt()) {  
            echo $description = get_the_excerpt(); //文章编辑中的摘要  
          }else {  
            echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要  
          } 
        ?>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_query(); ?>
  </div>
</div>

<!-- 公司简介 -->
<div class="zb-introduction">
  <div class="zb-introduction-main">
    <div class="zb-introduction-main-title">宗布科技简介</div>
    <div class="zb-introduction-main-sectitle">是技术合伙人，不是技术承包商</div>
    <div class="zb-introduction-main-bottom back-black"></div>
    <div class="zb-introduction-main-content">
    杭州宗布科技有限公司，成立于2015年5月。 宗布科技为缺少IT背景的企业和创业团队提供全方位的技术支持服务。同时，基于特定服务内容，研发易用的SaaS服务，更好地服务企业和个人用户。
我们的服务可以提供全方位的产品设计、研发和推广建议，确保创意可以高质量的转化为实际的互联网产品。
    </div>
    <div class="zb-introduction-main-more"><a href="#">查看详情</a></div>
  </div>
  <div class="zb-introduction-img"><img src="<?php bloginfo('template_url')?>/assets/img/pad.png" width="100%"></div>
</div>

<!-- 波浪过度 -->
<div class="zb-wave">
  <img src="<?php bloginfo('template_url')?>/assets/img/wave.png" width="100%">
</div>

<!-- 合作机构 -->
<div class="zb-partner">
  <div class="zb-partner-show">
    <div class="zb-partner-show-img">
      <img src="<?php bloginfo('template_url')?>/assets/img/plan.png" width="100%">
    </div>
    <div class="zb-partner-show-main">
      <div class="zb-partner-show-title">部分合作机构</div>
      <div class="zb-partner-show-bottom back-black"></div>
      <div class="zb-partner-show-content">
        独角兽孵化器：技术支持，双向合作<br/>
        同芯资本：战略合作伙伴<br/>
        网易“易启计划”，网易云：“首批签约合作伙伴”<br/>
        聚募联盟<br/>
        六合桥投融资平台<br/>
        阿里云<br/>
        创客邦<br/>
      </div>
    </div>
  </div>
  <div class="zb-partner-icons">
    <div class="zb-partner-icon"><img src="<?php bloginfo('template_url')?>/assets/img/partner_1.png" width="100%"></div>
    <div class="zb-partner-icon"><img src="<?php bloginfo('template_url')?>/assets/img/partner_2.png" width="100%"></div>
    <div class="zb-partner-icon"><img src="<?php bloginfo('template_url')?>/assets/img/partner_3.png" width="100%"></div>
    <div class="zb-partner-icon"><img src="<?php bloginfo('template_url')?>/assets/img/partner_4.png" width="100%"></div>
  </div>
</div>

<!-- 最新文章 -->
<div class="zb-article" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/article_bg.png);">
  <div class="zb-article-hditem">
    <div class="zb-article-hditem-title">最新文章</div>
    <div class="zb-article-hditem-content">这里有最新的与科技有关的趣味知识和精彩干货，你会了解一个更不一样的宗布。</div>
    <div class="zb-article-hditem-more"><a href="#">查看更多</a></div>
  </div>
  <?php  
    $args = array(  
      'cat' => 5,   // 分类ID  
      'posts_per_page' => 3, // 显示篇数  
    );  
    query_posts($args);  
    if(have_posts()) : while (have_posts()) : the_post();  
  ?>
  <div class="zb-article-item">
    <div class="zb-article-item-img"><img src="<?php echo catch_the_image() ?>" width="100%"></div>
    <div class="zb-article-item-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="zb-article-item-btn"><a href="#">技术专栏</a></div>
  </div>
  <?php endwhile; endif; wp_reset_query(); ?>
</div>

<!-- 联系我们 -->
<div class="zb-contact">
  <div class="zb-contact-title">
    联系我们
  </div>
  <div class="zb-contact-form">
  <form id="commentform" name="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
    <div class="zb-contact-form-group">
      <label>您的名字（必填）</label>
      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="23" tabindex="2"/>
    </div>
    <div class="zb-contact-form-group">
      <label>您的邮箱（必填）</label>
      <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="23" tabindex="2"/>
    </div>
    <div class="zb-contact-form-group">
      <label>主题</label>
      <input type="text" name="">
    </div>
    <div class="zb-contact-form-group">
      <label>您的留言</label>
      <textarea id="message comment" name="comment" tabindex="4"></textarea>
    </div>
    <div class="zb-contact-form-group">
      <label>为避免垃圾邮件，请回答问题：G20在哪召开？</label>
      <input type="text" name="">
    </div>
    <div class="zb-contact-form-group">
      <a class="zb-contact-send" href="javascript:void(0);" onClick="Javascript:document.forms['commentform'].submit()">立即发送</a>
    </div>
    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  </div>
  <div class="zb-code">
    <div class="zb-code-content">扫描二维码关注我们的公众号随时获取最新信息。您可以在此处留言。也可以直接通过邮件把您的需求、商业计划书发送至下面的邮箱。我们会尽快处理。</div>
    <div class="zb-code-img">
      <img src="<?php bloginfo('template_url')?>/assets/img/zb_code.png" width="100%">
    </div>
    <div class="zb-code-bottom">
      <span class="zb-code-icon"></span>
      <span>杭州市西湖国际科技大厦D南4F</span>
    </div>
    <div class="zb-code-bottom">
      <span class="zb-code-icon"></span>
      <a class="zb-code-email">biz@zongbutech.com</a>
    </div>
  </div>
</div>

<!-- 首页地步信息 -->
<div class="zb-info" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/strength_bg.png);">
  <div class="zb-info-introduce">
    <div class="zb-info-introduce-title">
      <img src="<?php bloginfo('template_url')?>/assets/img/logo_w.png" width="40" height="40">
      <span>宗布科技</span>
    </div>
    <div class="zb-info-introduce-content">
      让您感受专业优质的软件技术服务，为您提供专业的技术支持。
    </div>
  </div>
  <div class="zb-info-main">
    <div class="zb-info-main-item border-green">
      <p class="zb-info-main-head">关于我们</p>
      <p>简介</p>
      <p>团队</p>
      <p>机构合作</p>
      <p>媒体报道</p>
    </div>
    <div class="zb-info-main-item border-blue">
      <p class="zb-info-main-head">服务内容</p>
      <p>移动应用开发</p>
      <p>社群系统定制</p>
      <p>网站及微信开发</p>
      <p>微商城开发</p>
    </div>
    <div class="zb-info-main-item border-yellow">
      <p class="zb-info-main-head">文章</p>
      <p>宗布故事</p>
      <p>技术专栏</p>
    </div>
    <div class="zb-info-main-item border-purple">
      <p class="zb-info-main-head">联系我们</p>
      <p>057128120021</p>
      <p>biz@zongbutech.com</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>