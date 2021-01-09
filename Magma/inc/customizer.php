<?php 
function wpb_customize_Top_sections( $wp_customize ) {

        //1st add panel
        $wp_customize->add_panel( 'tayarionlinetheme', array(
            'title'    => __( 'Tayari Online Theme Customize', 'TayariOnline' ),
            'priority' => 1,
        ) );
    
        //2nd add section
        $wp_customize->add_section( 'tayarionlinetheme_section', array(
            'title'    => __( 'Social Sites', 'TayariOnline' ),
            'description'=>sprintf('Options For Social Media Sites','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );
        
        //3rd add settings or faceBook
        $wp_customize->add_setting( 'facebook', array(
            'type' => 'theme_mod'
        ) );
        
        //4th add controls or faceBook
        $wp_customize->add_control( 'facebook', array(
            'label'=>__('FaceBook Url','TayariOnline'),
            'section'=>'tayarionlinetheme_section'
        ) );

        //3rd add settings
        $wp_customize->add_setting( 'twitter', array(
            'type' => 'theme_mod'
        ) );
        
        //4th add controls
        $wp_customize->add_control( 'twitter', array(
            'label'=>__('Twitter Url','TayariOnline'),
            'section'=>'tayarionlinetheme_section'
        ) );
        
        //3rd add settings
        $wp_customize->add_setting( 'youtube', array(
            'type' => 'theme_mod'
        ) );
            
        //4th add controls
        $wp_customize->add_control( 'youtube', array(
            'label'=>__('YouTube Url','TayariOnline'),
            'section'=>'tayarionlinetheme_section'
        ) );

        //3rd add settings
        $wp_customize->add_setting( 'instagram', array(
            'type' => 'theme_mod'
        ) );
            
        //4th add controls
        $wp_customize->add_control( 'instagram', array(
            'label'=>__('Instagram Url','TayariOnline'),
            'section'=>'tayarionlinetheme_section'
        ) );

        //3rd add settings
        $wp_customize->add_setting( 'pinterest', array(
            'type' => 'theme_mod'
        ) );
            
        //4th add controls
        $wp_customize->add_control( 'pinterest', array(
            'label'=>__('Pinterest Url','TayariOnline'),
            'section'=>'tayarionlinetheme_section'
        ) );

        /*==============Featured Blog Post=========== */
        $wp_customize->add_section( 'featuredpostsection', array(
            'title'    => __( 'Featured Blog Post', 'TayariOnline' ),
            'description'=>sprintf('Options For Featured Blog Post','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'featuredpost-blog1', array(
            'type' => 'theme_mod'
        ) );
        
        $wp_customize->add_control( 'featuredpost-blog1', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'featuredpostsection',
            'settings'=>'featuredpost-blog1'
        ) );

        // Add partial for Featured Blog Post.
		$wp_customize->selective_refresh->add_partial(
			'featuredpost-blog1',
			array(
				'selector' => '#blog-post-widget-1 .row'
			)
		);

        /*============ Featured Carousel============= */
        $wp_customize->add_section( 'featuredcarouselsection', array(
            'title'    => __( 'Featured Carousel', 'TayariOnline' ),
            'description'=>sprintf('Options For Featured Carousel','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'featuredpost-carousel', array(
            'type' => 'theme_mod'
        ) );
        
        $wp_customize->add_control( 'featuredpost-carousel', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'featuredcarouselsection'
        ) );

        // Add partial for Featured Carousel.
		$wp_customize->selective_refresh->add_partial(
			'featuredpost-carousel',
			array(
				'selector' => '#blog-carousel .splide'
			)
		);

        /*============ Main Blog Post 1============= */
        $wp_customize->add_section( 'mainblogpost1', array(
            'title'    => __( 'Main Blog Post 1', 'TayariOnline' ),
            'description'=>sprintf('Options For Main Blog Post','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'mainblogpost-1', array(
            'type' => 'theme_mod'
        ) );
        
        $wp_customize->add_control( 'mainblogpost-1', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'mainblogpost1'
        ) );

        // Add partial for Main Blog Post 1.
		$wp_customize->selective_refresh->add_partial(
			'mainblogpost-1',
			array(
				'selector' => '#main-wrapper .main-blog-1 .main-blog-1-post .card-outer'
			)
		);

        /*============ Main Blog Post 2============= */
        $wp_customize->add_section( 'mainblogpost2', array(
            'title'    => __( 'Main Blog Post 2', 'TayariOnline' ),
            'description'=>sprintf('Options For Main Blog Post','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'mainblogpost-2', array(
            'type' => 'theme_mod'
        ) );
        
        $wp_customize->add_control( 'mainblogpost-2', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'mainblogpost2'
        ) );

        // Add partial for Main Blog Post 1.
		$wp_customize->selective_refresh->add_partial(
			'mainblogpost-2',
			array(
				'selector' => '#main-wrapper .main-blog-2 .main-blog-1-post .card.featured-blog-3'
			)
		);

        /*============ Main Blog Post Carousel============= */
        $wp_customize->add_section( 'mainblogpostcarousel', array(
            'title'    => __( 'Main Blog Post Carousel', 'TayariOnline' ),
            'description'=>sprintf('Options For Main Blog Post Carousel','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'mainblogpost-carousel', array(
            'type' => 'theme_mod'
        ) );
        
        $wp_customize->add_control( 'mainblogpost-carousel', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'mainblogpostcarousel'
        ) );

        // Add partial for Main Blog Post 1.
		$wp_customize->selective_refresh->add_partial(
			'mainblogpost-carousel',
			array(
				'selector' => '#main-wrapper .main-blog-3 .splide'
			)
		);

        /*============ Main Blog Post 3============= */
        $wp_customize->add_section( 'mainblogpost3', array(
            'title'    => __( 'Main Blog Post 3', 'TayariOnline' ),
            'description'=>sprintf('Options For Main Blog Post','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'mainblogpost-3', array(
            'type' => 'theme_mod'
        ) );
        
        $wp_customize->add_control( 'mainblogpost-3', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'mainblogpost3'
        ) );

        // Add partial for Main Blog Post 1.
		$wp_customize->selective_refresh->add_partial(
			'mainblogpost-3',
			array(
				'selector' => '#main-wrapper .main-blog-4 .main-blog-1-post .first-block .card.featured-blog-5'
			)
		);

        /*============ Main Blog Post 4============= */
        $wp_customize->add_section( 'mainblogpost4', array(
            'title'    => __( 'Main Blog Post 4', 'TayariOnline' ),
            'description'=>sprintf('Options For Main Blog Post','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'mainblogpost-4', array(
            'type' => 'theme_mod'
        ) );
        
        $wp_customize->add_control( 'mainblogpost-4', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'mainblogpost4'
        ) );

        // Add partial for Main Blog Post 5.
		$wp_customize->selective_refresh->add_partial(
			'mainblogpost-4',
			array(
				'selector' => '#main-wrapper .main-blog-4 .main-blog-1-post .second-block .card.featured-blog-5'
			)
		);

        /*============ Main Blog Post 5============= */
        $wp_customize->add_section( 'mainblogpost5', array(
            'title'    => __( 'Main Blog Post 5', 'TayariOnline' ),
            'description'=>sprintf('Options For Main Blog Post','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'mainblogpost-5', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ) );
        
        $wp_customize->add_control( 'mainblogpost-5', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'mainblogpost5'
        ) );

        // Add partial for Main Blog Post 5.
		$wp_customize->selective_refresh->add_partial(
			'mainblogpost-5',
			array(
				'selector' => '#main-wrapper .main-blog-5 .first-block'
			)
		);

        /*============ Sidebar Blog Post 5============= */
        $wp_customize->add_section( 'sidebarblogpost1', array(
            'title'    => __( 'Sidebar Blog Post 1', 'TayariOnline' ),
            'description'=>sprintf('Options For Sidebar Blog Post','TayariOnline'),
            'priority' => 1,
            'panel'=>'tayarionlinetheme'
        ) );

        $wp_customize->add_setting( 'sidebarblogpost-1', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ) );
        
        $wp_customize->add_control( 'sidebarblogpost-1', array(
            'type'=>'select',
            'choices'=>get_categories_select(),
            'label'=>__('Select Category','TayariOnline'),
            'section'=>'sidebarblogpost1'
        ) );

		// Add partial for Sidebar Blog Post 5.
		$wp_customize->selective_refresh->add_partial(
			'sidebarblogpost-1',
			array(
				'selector' => '.sidebar-blog'
			)
		);

}
add_action('customize_register','wpb_customize_Top_sections');

function get_categories_select() {
    $teh_cats = get_categories();
    $results;
   
    $count = count($teh_cats);
    for ($i=0; $i < $count; $i++) {
      if (isset($teh_cats[$i])){
        $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
      }
      else{
        $count++;
      }
    }
    return $results;
  }

?>