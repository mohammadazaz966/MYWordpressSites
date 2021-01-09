<?php 

function wpb_customize_Top_sections( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'topbar', array(
        'title'    => __( 'Top Bar', 'TayariOnline' ),
        'priority' => 2,
    ) );

    //2nd add section
	$wp_customize->add_section( 'social_icons', array(
        'title'    => __( 'Social Sites', 'TayariOnline' ),
        'description'=>sprintf('Options For Social Media Sites','TayariOnline'),
        'priority' => 2,
        'panel'=>'topbar'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'facebook', array(
		'type' => 'theme_mod'
    ) );
    
    //4th add controls
    $wp_customize->add_control( 'facebook', array(
        'label'=>__('FaceBook Url','TayariOnline'),
        'section'=>'social_icons'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'twitter', array(
		'type' => 'theme_mod'
    ) );
    
    //4th add controls
    $wp_customize->add_control( 'twitter', array(
        'label'=>__('Twitter Url','TayariOnline'),
        'section'=>'social_icons'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'youtube', array(
        'type' => 'theme_mod'
    ) );
        
    //4th add controls
    $wp_customize->add_control( 'youtube', array(
        'label'=>__('YouTube Url','TayariOnline'),
        'section'=>'social_icons'
    ) );

    //3rd add settings
    $wp_customize->add_setting( 'instagram', array(
        'type' => 'theme_mod'
    ) );
        
    //4th add controls
    $wp_customize->add_control( 'instagram', array(
        'label'=>__('Instagram Url','TayariOnline'),
        'section'=>'social_icons'
    ) );

    //add ad section
    $wp_customize->add_section( 'ad-section', array(
        'title'    => __( 'Ad Section', 'TayariOnline' ),
        'description'=>sprintf('Options For Banner and Advertisement','TayariOnline'),
        'priority' => 2,
        'panel'=>'topbar'
    ) );

    $wp_customize->add_setting( 'banner-ad', array(
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'banner-ad', array(
        'type'=>'textarea',
        'label'=>__('Add Banner Script','TayariOnline'),
        'section'=>'ad-section'
    ) );

}

add_action('customize_register','wpb_customize_Top_sections');

function wpb_customize_Featured_Blog_sections( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'featuredblogpost', array(
        'title'    => __( 'Featured Blogpost', 'TayariOnline' ),
        'priority' => 2,
    ) );

    //add Option
    $wp_customize->add_setting( 'featuredpost1option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredpost1option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Post','TayariOnline'),
        'section'=>'featured-post1'
    ) );
        
    //add Featured Post 1
    $wp_customize->add_section( 'featured-post1', array(
        'title'    => __( 'Featured Post 1', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Post','TayariOnline'),
        'priority' => 2,
        'panel'=>'featuredblogpost'
    ) );
    
    $wp_customize->add_setting( 'featuredpost1', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredpost1', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featured-post1'
    ) );

    //add Option
    $wp_customize->add_setting( 'featuredpost2option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredpost2option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Post','TayariOnline'),
        'section'=>'featured-post2'
    ) );

    //add Featured Post 2
    $wp_customize->add_section( 'featured-post2', array(
        'title'    => __( 'Featured Post 2', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Post','TayariOnline'),
        'priority' => 2,
        'panel'=>'featuredblogpost'
    ) );
            
    $wp_customize->add_setting( 'featuredpost2', array(
        'type' => 'theme_mod'
    ) );
            
    $wp_customize->add_control( 'featuredpost2', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featured-post2'
    ) );
}

add_action('customize_register','wpb_customize_Featured_Blog_sections');

function wpb_customize_Featured_Carousel_sections( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'featuredcarousel', array(
        'title'    => __( 'Featured Carousel', 'TayariOnline' ),
        'priority' => 2,
    ) );

    //add Option
    $wp_customize->add_setting( 'featuredcarouseloption', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredcarouseloption', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Carousel','TayariOnline'),
        'section'=>'featuredcarousel'
    ) );

    $wp_customize->add_section( 'featuredcarousel', array(
        'title'    => __( 'Featured Carousel', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Carousel','TayariOnline'),
        'priority' => 2,
        'panel'=>'featuredcarousel'
    ) );
    
    //2nd add settings
    $wp_customize->add_setting( 'featuredcarousel', array(
        'type' => 'theme_mod'
    ) );

    //3rd add controls
    $wp_customize->add_control( 'featuredcarousel', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featuredcarousel'
    ) );

    //add ad section
    $wp_customize->add_section( 'ad-section', array(
        'title'    => __( 'Ad Section', 'TayariOnline' ),
        'description'=>sprintf('Options For Banner and Advertisement','TayariOnline'),
        'priority' => 2,
        'panel'=>'featuredcarousel'
    ) );
    
    $wp_customize->add_setting( 'featured-banner-ad', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featured-banner-ad', array(
        'type'=>'textarea',
        'label'=>__('Add Banner Script','TayariOnline'),
        'section'=>'ad-section'
    ) );
}

add_action('customize_register','wpb_customize_Featured_Carousel_sections');


function wpb_customize_Featured_Blog_2_sections( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'featuredblogpost2', array(
        'title'    => __( 'Featured Blogpost 2', 'TayariOnline' ),
        'priority' => 3,
    ) );

    //add Option
    $wp_customize->add_setting( 'featured-blog2-post1option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featured-blog2-post1option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Blogpost','TayariOnline'),
        'section'=>'featured-blog2-post1'
    ) );
        
    //add Featured Post 1
    $wp_customize->add_section( 'featured-blog2-post1', array(
        'title'    => __( 'Featured Post 1', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'featuredblogpost2'
    ) );
    
    $wp_customize->add_setting( 'featuredblog2post1', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredblog2post1', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featured-blog2-post1'
    ) );

    //add Option
    $wp_customize->add_setting( 'tabsoption', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'tabsoption', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Tabs','TayariOnline'),
        'section'=>'featured-blog2-post1'
    ) );

    //add Option
    $wp_customize->add_setting( 'featured-blog2-post2option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featured-blog2-post2option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Blogpost','TayariOnline'),
        'section'=>'featured-blog2-post2'
    ) );

    //add Featured Post 2
    $wp_customize->add_section( 'featured-blog2-post2', array(
        'title'    => __( 'Featured Post 2', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Post','TayariOnline'),
        'priority' => 2,
        'panel'=>'featuredblogpost2'
    ) );
    
    $wp_customize->add_setting( 'featuredblog2post2', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredblog2post2', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featured-blog2-post2'
    ) );

    //add Option
    $wp_customize->add_setting( 'featured-blog2-post3option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featured-blog2-post3option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Blogpost 3','TayariOnline'),
        'section'=>'featured-blog2-post3'
    ) );

    //add Featured Post 3
    $wp_customize->add_section( 'featured-blog2-post3', array(
        'title'    => __( 'Featured Post 3', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Post','TayariOnline'),
        'priority' => 3,
        'panel'=>'featuredblogpost2'
    ) );
    
    $wp_customize->add_setting( 'featuredblog2post3', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredblog2post3', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featured-blog2-post3'
    ) );

    //add Option
    $wp_customize->add_setting( 'featured-blog2-post4option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featured-blog2-post4option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Blogpost','TayariOnline'),
        'section'=>'featured-blog2-post4'
    ) );

    //add Featured Post 4
    $wp_customize->add_section( 'featured-blog2-post4', array(
        'title'    => __( 'Featured Post 4', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Post','TayariOnline'),
        'priority' => 4,
        'panel'=>'featuredblogpost2'
    ) );
    
    $wp_customize->add_setting( 'featuredblog2post4', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredblog2post4', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featured-blog2-post4'
    ) );

    //add Option
    $wp_customize->add_setting( 'featured-blog2-post5option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featured-blog2-post5option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Featured Blogpost','TayariOnline'),
        'section'=>'featured-blog2-post5'
    ) );

    //add Featured Post 5
    $wp_customize->add_section( 'featured-blog2-post5', array(
        'title'    => __( 'Featured Post 5', 'TayariOnline' ),
        'description'=>sprintf('Options For Featured Post','TayariOnline'),
        'priority' => 5,
        'panel'=>'featuredblogpost2'
    ) );
    
    $wp_customize->add_setting( 'featuredblog2post5', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'featuredblog2post5', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'featured-blog2-post5'
    ) );
}

add_action('customize_register','wpb_customize_Featured_Blog_2_sections');

function wpb_customize_Main_Section_Blog_sections( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'mainblogpost', array(
        'title'    => __( 'Main Blogpost ', 'TayariOnline' ),
        'priority' => 3,
    ) );

    //add Option
    $wp_customize->add_setting( 'mainblog-post1option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblog-post1option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Main Blogpost','TayariOnline'),
        'section'=>'mainblog-post1'
    ) );
        
    //add Main Post 1
    $wp_customize->add_section( 'mainblog-post1', array(
        'title'    => __( 'Main Post 1', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'mainblogpost'
    ) );
    
    $wp_customize->add_setting( 'mainblogpost1', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblogpost1', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'mainblog-post1'
    ) );

    //add Option
    $wp_customize->add_setting( 'mainblog-post2option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblog-post2option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Main Blogpost','TayariOnline'),
        'section'=>'mainblog-post2'
    ) );

    //add Main Post 2
    $wp_customize->add_section( 'mainblog-post2', array(
        'title'    => __( 'Main Post 2', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'mainblogpost'
    ) );
    
    $wp_customize->add_setting( 'mainblogpost2', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblogpost2', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'mainblog-post2'
    ) );

    //add Option
    $wp_customize->add_setting( 'mainblog-post3option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblog-post3option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Main Blogpost','TayariOnline'),
        'section'=>'mainblog-post3'
    ) );

    //add Main Post 3
    $wp_customize->add_section( 'mainblog-post3', array(
        'title'    => __( 'Main Post 3', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'mainblogpost'
    ) );
    
    $wp_customize->add_setting( 'mainblogpost3', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblogpost3', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'mainblog-post3'
    ) );

    //add Option
    $wp_customize->add_setting( 'mainblog-post4option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblog-post4option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Main Blogpost','TayariOnline'),
        'section'=>'mainblog-post4'
    ) );

    //add Main Post 4
    $wp_customize->add_section( 'mainblog-post4', array(
        'title'    => __( 'Main Post 4', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'mainblogpost'
    ) );
    
    $wp_customize->add_setting( 'mainblogpost4', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblogpost4', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'mainblog-post4'
    ) );

    //add Option
    $wp_customize->add_setting( 'mainblog-post5option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblog-post5option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Main Blogpost','TayariOnline'),
        'section'=>'mainblog-post5'
    ) );

    //add Main Post 5
    $wp_customize->add_section( 'mainblog-post5', array(
        'title'    => __( 'Main Post 5', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'mainblogpost'
    ) );
    
    $wp_customize->add_setting( 'mainblogpost5', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblogpost5', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'mainblog-post5'
    ) );

    //add Main Post 5
    $wp_customize->add_section( 'mainblog-post6', array(
        'title'    => __( 'Main Post 6', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post 6','TayariOnline'),
        'priority' => 1,
        'panel'=>'mainblogpost'
    ) );
    
    $wp_customize->add_setting( 'mainblogpost6', array(
        'type' => 'theme_mod'
    ) );

    //add Main Post 6
    //add Option
    $wp_customize->add_setting( 'mainblog-post6option', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'mainblog-post6option', array(
        'type'=>'checkbox',
        'label'=>__('Hide Main Blogpost 6','TayariOnline'),
        'section'=>'mainblog-post6'
    ) );
    
}

add_action('customize_register','wpb_customize_Main_Section_Blog_sections');

function wpb_customize_Sidebar_Section( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'sidebarblog', array(
        'title'    => __( 'Sidebar ', 'TayariOnline' ),
        'priority' => 3,
    ) );

    //add Option
    $wp_customize->add_section( 'sidebarblogoption', array(
        'title'    => __( 'Hide Sidebar', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'sidebarblog'
    ) );
    
    $wp_customize->add_setting( 'sidebarblogoption', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'sidebarblogoption', array(
        'type'=>'checkbox',
        'label'=>__('Hide Sidebar','TayariOnline'),
        'section'=>'sidebarblogoption'
    ) );
        
    //add Main Post 1
    $wp_customize->add_section( 'sidebarblog-post1', array(
        'title'    => __( 'Sidebar Post 1', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'sidebarblog'
    ) );
    
    $wp_customize->add_setting( 'sidebarblogpost1', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'sidebarblogpost1', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'sidebarblog-post1'
    ) );

    //add Main Post 2
    $wp_customize->add_section( 'sidebarblog-post2', array(
        'title'    => __( 'Sidebar Post 2', 'TayariOnline' ),
        'description'=>sprintf('Options For Main Post','TayariOnline'),
        'priority' => 1,
        'panel'=>'sidebarblog'
    ) );
    
    $wp_customize->add_setting( 'sidebarblogpost2', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'sidebarblogpost2', array(
        'type'=>'select',
        'choices'=>get_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'sidebarblog-post2'
    ) );


    //2nd add section
	$wp_customize->add_section( 'sidebar_social_icons', array(
        'title'    => __( 'Social Sites', 'TayariOnline' ),
        'description'=>sprintf('Options For Social Media Sites','TayariOnline'),
        'priority' => 2,
        'panel'=>'sidebarblog'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'side-facebook', array(
		'type' => 'theme_mod'
    ) );
    
    //4th add controls
    $wp_customize->add_control( 'side-facebook', array(
        'label'=>__('FaceBook Url','TayariOnline'),
        'section'=>'sidebar_social_icons'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'side-twitter', array(
		'type' => 'theme_mod'
    ) );
    
    //4th add controls
    $wp_customize->add_control( 'side-twitter', array(
        'label'=>__('Twitter Url','TayariOnline'),
        'section'=>'sidebar_social_icons'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'side-youtube', array(
        'type' => 'theme_mod'
    ) );
        
    //4th add controls
    $wp_customize->add_control( 'side-youtube', array(
        'label'=>__('YouTube Url','TayariOnline'),
        'section'=>'sidebar_social_icons'
    ) );

    //3rd add settings
    $wp_customize->add_setting( 'side-instagram', array(
        'type' => 'theme_mod'
    ) );
        
    //4th add controls
    $wp_customize->add_control( 'side-instagram', array(
        'label'=>__('Instagram Url','TayariOnline'),
        'section'=>'sidebar_social_icons'
    ) );

    //3rd add settings
    $wp_customize->add_setting( 'side-rssfeed', array(
        'type' => 'theme_mod'
    ) );
        
    //4th add controls
    $wp_customize->add_control( 'side-rssfeed', array(
        'label'=>__('Rss Feed Url','TayariOnline'),
        'section'=>'sidebar_social_icons'
    ) );

    //3rd add settings
    $wp_customize->add_setting( 'side-pinterest', array(
        'type' => 'theme_mod'
    ) );
        
    //4th add controls
    $wp_customize->add_control( 'side-pinterest', array(
        'label'=>__('Pinterest Url','TayariOnline'),
        'section'=>'sidebar_social_icons'
    ) );

    //add ad section
    $wp_customize->add_section( 'sidebar-ad-section', array(
        'title'    => __( 'Ad Section', 'TayariOnline' ),
        'description'=>sprintf('Options For Banner and Advertisement','TayariOnline'),
        'priority' => 2,
        'panel'=>'sidebarblog'
    ) );

    $wp_customize->add_setting( 'side-banner-ad', array(
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'side-banner-ad', array(
        'type'=>'textarea',
        'label'=>__('Add Banner Script','TayariOnline'),
        'section'=>'sidebar-ad-section'
    ) );

    
}

add_action('customize_register','wpb_customize_Sidebar_Section');


function wpb_customize_Contact_sections( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'contactpanel', array(
        'title'    => __( 'Contact Us Page ', 'TayariOnline' ),
        'priority' => 3,
    ) );

    //2nd add section
	$wp_customize->add_section( 'contactpage', array(
        'title'    => __( 'Contact Us Page', 'TayariOnline' ),
        'description'=>sprintf('Options For Contact Us Page','TayariOnline'),
        'priority' => 2,
        'panel'=>'contactpanel'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'address', array(
		'type' => 'theme_mod'
    ) );
    
    //4th add controls
    $wp_customize->add_control( 'address', array(
        'label'=>__('Address','TayariOnline'),
        'section'=>'contactpage'
    ) );
    
    //3rd add settings
    $wp_customize->add_setting( 'email', array(
		'type' => 'theme_mod'
    ) );
    
    //4th add controls
    $wp_customize->add_control( 'email', array(
        'label'=>__('Email','TayariOnline'),
        'section'=>'contactpage'
    ) );

    //3rd add settings
    $wp_customize->add_setting( 'call', array(
		'type' => 'theme_mod'
    ) );
    
    //4th add controls
    $wp_customize->add_control( 'call', array(
        'label'=>__('Call Us','TayariOnline'),
        'section'=>'contactpage'
    ) );

    //2nd add section
	$wp_customize->add_section( 'contactpageslidersection', array(
        'title'    => __( 'Contact Us Page Slider', 'TayariOnline' ),
        'description'=>sprintf('Options For Contact Us Page','TayariOnline'),
        'priority' => 2,
        'panel'=>'contactpanel'
    ) );
    
    $wp_customize->add_setting( 'contactuspageslider', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'contactuspageslider', array(
        'type'=>'select',
        'choices'=>get_Slider_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'contactpageslidersection'
    ) );

}

add_action('customize_register','wpb_customize_Contact_sections');

function wpb_customize_Author_Slider_sections( $wp_customize ) {

    //1st add panel
    $wp_customize->add_panel( 'aboutuspanel', array(
        'title'    => __( 'About Us Page ', 'TayariOnline' ),
        'priority' => 3,
    ) );

    //2nd add section
	$wp_customize->add_section( 'aboutuspage', array(
        'title'    => __( 'About Us Page', 'TayariOnline' ),
        'description'=>sprintf('Options For About Us Page','TayariOnline'),
        'priority' => 2,
        'panel'=>'aboutuspanel'
    ) );

    //2nd add section
	$wp_customize->add_section( 'aboutuspageslidersection', array(
        'title'    => __( 'About Us Page Slider', 'TayariOnline' ),
        'description'=>sprintf('Options For About Us Page','TayariOnline'),
        'priority' => 2,
        'panel'=>'aboutuspanel'
    ) );
    
    $wp_customize->add_setting( 'aboutuspageslider', array(
        'type' => 'theme_mod'
    ) );
    
    $wp_customize->add_control( 'aboutuspageslider', array(
        'type'=>'select',
        'choices'=>get_Slider_categories_select(),
        'label'=>__('Select Category','TayariOnline'),
        'section'=>'aboutuspageslidersection'
    ) );

}

add_action('customize_register','wpb_customize_Author_Slider_sections');



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

  function get_Slider_categories_select() {
    $args2 = array(
        'taxonomy' => 'slider_cat',
        'orderby' => 'name',
        'order'   => 'ASC'
    );

    $teh_cats2 = get_categories($args2);
    $results2;
   
    $count2 = count($teh_cats2);
    for ($i=0; $i < $count2; $i++) {
      if (isset($teh_cats2[$i])){
        $results2[$teh_cats2[$i]->slug] = $teh_cats2[$i]->name;
      }
      else{
        $count2++;
      }
    }
    return $results2;
  }

?>