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

<div class="b-body shadow-lg p-3 mb-5 ">

<!-- Topbar Section -->
<section id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-8">
                    <div class="category-list-top">
                        <ul class="topbar-category-list">
                            <?php 
                                $args=array(
                                    'taxonomy'   => 'category',
                                    'orderby'    => 'name',
                                    'hide_empty' => 1, // change to 1 to hide categores not having a single post
                                    );
                                $categories=get_categories($args);
                                $i=3;
                                foreach($categories as $category){
                                    if($i>=1){
                                        echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
                                    }
                                    $i--;
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <div class="social-list-top">
                        <ul class="topbar-social-media">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Topbar Section -->

<!-- Brand Section -->
<section id="brand">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-4">
                    <div class="brand-name">
                        <div class="title-brand">
                            <h1 class="title"><?php bloginfo('name');  ?></h1>
                        </div>
                        <div class="sub-title-brand">
                            <h6 class="sub-title"><?php bloginfo('description');  ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="banner-name">
                        <h1 class="title">729 X 90</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Brand Section -->

<!-- Top Navbar Section -->
<section id="top-navigation-menu">
    <div class="container">
        <div class="row" >
            <div class="col-12">
                <button class="menu-toggle" id="menu-toggle"><i class=" fa fa-bars"></i></button>
                <div class="home-icon" >
                    <a href="<?php echo home_url(); ?>"><i class="fa fa-home"></i></a>
                </div>
                <nav class="nav-menu d-none d-lg-block">
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
    </div>
</section>
<!-- End Top Navbar Section -->

<!-- Sidebar Navbar Section -->
<section id="mySidenav" class="navigation-bottom-menu" role="navigation">
    <div class="container">
        <div class="row">
            <button class="menu-toggle-close" id="menu-toggle-close"><i class=" fa fa-times"></i></button>
                <div class="col-12">
                    <div class="navigation-menu">
                        <?php $args = [ 'theme_location' => 'primary' ]; ?>
                        <?php wp_nav_menu( $args ) ?>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- End Sidebar Navbar Section -->

<!-- News Ticker Section -->
<section id="newslatest">
    <div class="container news-container">
        <div class="row">
            <div class="col-12">
                <div class="news-ticker">
                    <div class="news-headings">
                        <h3 class="title"><i class="fa fa-newspaper"></i>Latest</h3>
                    </div>
                    <div class="news-latest">
                        <marquee behavior="" direction="left"> 

                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'orderby' => 'rand',
                                    'posts_per_page' => -1
                                );		
                            ?>

                            <?php $the_query=new WP_Query($args);?>
                            <?php if ( $the_query->have_posts() ): while ($the_query->have_posts()):$the_query->the_post();?>
                                <div class="news-box">
                                    <?php if(has_post_thumbnail()):?>
                                        <?php the_post_thumbnail('ticker'); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-5.png"  alt="Card image cap">
                                    <?php endif;?>
                                    <div class="card-body">
                                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                        <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y')?></span>
                                    </div>
                                </div>
                            <?php endwhile;?>
                            <?php endif;?>

                         </marquee> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Ticker Section -->