<?PHP
// This theme uses wp_nav_menu() in one location.
register_nav_menus();
//获取第一张图片
function catch_the_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){  
        $first_img = bloginfo('template_url'). '/images/default-thumb.jpg'; 
    } 
    return $first_img;
}

// define('SETTING_ID_BEIAN_ICP', 'zh_cn_l10n_icp_num');
// define('SETTING_ID_BEIAN_GONGAN', 'zh_cn_l10n_gongan_num');

// // 增加主题选项
// add_action( 'customize_register', 'zbu_customize_register' );
// function zbu_customize_register( $wp_customize ) {    

// 	// ICP 备案信息
//     $wp_customize->add_setting( SETTING_ID_BEIAN_ICP, array(
//         'default'        => '浙ICP备0000000号',
//         'type'           => 'option',
//         'capability'     => 'edit_theme_options',
//         'transport'      => 'refresh'
//     ) );

//     $wp_customize->add_control( new WP_Customize_Control( 
//     	$wp_customize, SETTING_ID_BEIAN_ICP, array(
//         'label'      => __( 'ICP备案号', 'onepress-zongbu' ),
//         'section'    => 'title_tagline',
//         'settings'   => SETTING_ID_BEIAN_ICP,
//     ) ) );

//     // 公安备案信息
//     $wp_customize->add_setting( SETTING_ID_BEIAN_GONGAN, array(
//         'default'        => '浙公网安备00000000000000号',
//         'type'           => 'option',
//         'capability'     => 'edit_theme_options',
//         'transport'      => 'refresh'
//     ) );

//     $wp_customize->add_control( new WP_Customize_Control( 
//     	$wp_customize, SETTING_ID_BEIAN_GONGAN, array(
//         'label'      => __( '公安备案号', 'onepress-zongbu' ),
//         'section'    => 'title_tagline',
//         'settings'   => SETTING_ID_BEIAN_GONGAN,
//     ) ) );

// }

/**
 * Custom template tags for this theme.
 *
 * @since ZBPress 1.0
 */
require get_template_directory() . '/inc/template-tags.php';
?>