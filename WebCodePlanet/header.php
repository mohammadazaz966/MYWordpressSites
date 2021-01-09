<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta <?php bloginfo('charset');  ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');  ?>">
    <meta name="author" content="<?php the_author();  ?>">

    <title><?php bloginfo('name');  ?></title>

    <?php wp_head(); ?>

</head>

<body>

<div class="mainbody">

<section id="topbar">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-8 p-0" style="float: left;">
                        <div class="topbar-left-block">
                            <div class="social-sharing">
                                <ul>
                                    <li><a href="<?php echo get_theme_mod('facebook'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo get_theme_mod('twitter'); ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo get_theme_mod('youtube'); ?>"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="<?php echo get_theme_mod('instagram'); ?>"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="news-ticker">
                                <h3>Trending</h3>
                                <marquee direction=left>
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'orderby' => 'rand',
                                    'posts_per_page' => -1
                                );		
                                ?>

                                <?php $the_query=new WP_Query($args);?>
                                <?php if ( $the_query->have_posts() ): while ($the_query->have_posts()):$the_query->the_post();?>
                                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                
                                <?php endwhile;?>
                                <?php endif;?>

                                </marquee>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-0" style="float: right;">
                        <div class="topbar-right-block">
                            <div class="top-category-list">
                                <ul>
                                    <?php 
                                    $args=array(
                                            'taxonomy'   => 'category',
                                            'orderby'    => 'name',
                                            'hide_empty' => 1, // change to 1 to hide categores not having a single post
                                            );
                                    $categories=get_categories($args);
                                    $i=2;
                                    foreach($categories as $category){
                                    if($i>=1){
                                    echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
                                    }
                                    $i--;
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="top-todays-date">
                                <span><?php the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<section id="brand">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-4 p-0" style="float: left;">
                        <div class="site-logo">
                            <h3 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name');  ?></a></h3>
                            <span class="site-sub-title"><?php bloginfo('description');  ?></span>
                        </div>
                    </div>
                    <div class="col-8 p-0" style="float: right;">
                        <div class="site-ad">
                        <?php echo get_theme_mod('banner-ad'); ?>
                        </div>
                    </div>
                </div>
            </div>
</section>

<section id="topnavbar">
            <div class="row">
                <div class="col-12 p-0">
                    <button class="menu-toggle" id="menu-toggle"><i class=" fa
                        fa-bars"></i></button>
                    <div class="home-icon">
                        <a href="<?php echo home_url(); ?>"><i class="fa fa-home"></i></a></div>
                    <nav>
                    <?php $args = [ 'theme_location' => 'primary' ]; ?>
                    <?php wp_nav_menu( $args ) ?>
                    </nav>
                    <button class="search-open btn"><i class="fa fa-search"></i></button>
                    <button class="search-close btn"><i class="fa fa-times-circle"></i></button>
                    <div class="topbar-search-form">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
</section>

<section id="sidenavbar">
            <div class="row">
                <div class="col-12">
                    <button class="menu-toggle-close" id="menu-toggle-close" onclick="closeNav()"><i
                            class="fas fa-times-circle"></i></button>
                    <nav>
                    <?php $args = [ 'theme_location' => 'primary' ]; ?>
                    <?php wp_nav_menu( $args ) ?>
                    </nav>
                </div>
            </div>
</section>

