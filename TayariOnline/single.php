<?php get_header(); ?>

<section id="headerblogpost6" class="maincontent" style="margin-top: 0;">

        <div class="container p-0">
            <div class="row">
                <div class="col-12 p-0">
        <?php if(have_posts() ) : while (have_posts()) : the_post(); ?>
        
        <?php if(has_post_thumbnail()):?>
        <div class="img-overlay container p-0"></div>
        <?php the_post_thumbnail('featuredblog',array('class'=>'card-img')); ?>
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
        <?php endif;?>

        <?php endwhile;endif;?>
        </div>
        </div>
        </div>

        <div class="container">
        <?php if(have_posts() ) : while (have_posts()) : the_post(); ?>
            <div class="mycard-body card-body container">

                <?php 
                    $categories=get_the_category();
                    $i=2;
                    foreach($categories as $category){
                        if($i>=1){
                            echo '
                                <span class="category"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></span>';
                                }
                            $i--;
                        }
                ?>
                <h5 class="card-title blogs"><?php the_title(); ?></h5>
            </div>
        <?php endwhile;endif;?>

            <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="col-8">
                                  <?php if(have_posts() ) : while (have_posts()) : the_post(); ?>

                                    <div class="page-content">
                                        <div class="page-content-blogs">
                                            <div class="header-ad">
                                                <h3>Site Ad</h3>
                                            </div>
                                            <p class="card-text"><?php the_content();?></p>
                                            <p><?php dynamic_sidebar('print_table_widgets'); ?></p>
                                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                            <h3 class="card-title">Share It:</h3>
                                            <a class="a2a_button_facebook btn"><i class="fab fa-facebook-f"></i></a>
                                            <a class="a2a_button_twitter btn"><i class="fab fa-twitter"></i></a>
                                            <a class="a2a_button_email btn"><i class="fas fa-envelope"></i></a>
                                            <a class="a2a_button_pinterest btn"><i class="fab fa-pinterest"></i></a>
                                            <a class="a2a_button_linkedin btn"><i class="fab fa-linkedin"></i></a>
                                            <a class="a2a_button_tumblr btn"><i class="fab fa-tumblr-square"></i></a>
                                            </div>
                                            <div class="header-ad">
                                                <h3>Site Ad</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <div class="card">
                                            <div class="row no-gutters">
                                                <div class="col-sm-3">
                                                    <img class="card-img-top" src="<?php echo get_template_directory_uri();  ?>/vendor/img/Business/pexels-img12.jpg"
                                                        alt="Card img top" />
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="card-body">
                                                        <h3 class="card-title"><?php the_author(); ?></h3>
                                                        <p class="card-text"><?php the_author_meta('description');?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="related-post">
                                        <div class="header-blogpost5-title">

                                        <?php 
                                            $categories=get_the_category();
                                            $i=1;
                                            foreach($categories as $category){
                                            if($i>=1){
                                                echo '
                                                <h3>'.$category->name.'</h3>';
                                                }
                                                $i--;
                                            }
                                            ?>

                                        </div>
                                        <div class="splide">
                                            <div class="splide__track">
                                                <div class="my_arrows">
                                                    <div class="my_arrow my_arrow_prev">
                                                    </div>
                                                    <div class="my_arrow my_arrow_next">
                                                    </div>
                                                </div>
                                                <ul class="splide__list">

                                                        <?php
                                                        //for use in the loop, list 5 post titles related to first tag on current post
                                                        $tags = wp_get_post_tags($post->ID);
                                                        if ($tags) {
                                                        $first_tag = $tags[0]->term_id;
                                                        $args=array(
                                                        'tag__in' => array($first_tag),
                                                        'post__not_in' => array($post->ID),
                                                        'posts_per_page'=>-1,
                                                        'caller_get_posts'=>1
                                                        );
                                                        $my_query = new WP_Query($args);
                                                        if( $my_query->have_posts() ) {
                                                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                                    <li class="splide__slide">
                                                        <div class="header-blogpost1-style-2">
                                                            <div class="card">
                                                            
                                                            <?php if(has_post_thumbnail()):?>
                                                            <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img')); ?>
                                                            <?php else: ?>
                                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                            <?php endif;?>

                                                            <div class="card-img-overlay">

                                                                <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('sidebarblogpost2'), 'category') ); ?>"><?php echo get_theme_mod('sidebarblogpost2'); ?></a></span>
                                                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                                <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                                <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>

                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>

                                                        <?php
                                                            endwhile;
                                                            }
                                                            wp_reset_query();
                                                            }
                                                        ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cooler-nav" class="page-navigation">
                                            <?php
                                            $prevPost = get_previous_post(); 
                                            $id = $prevPost->ID ;
                                            $permalink = get_permalink( $id );
                                            if($prevPost) {?>
                                            <div class="nav-box previous card">
                                            <?php $prevthumbnail = get_the_post_thumbnail($id);?>
                                            <?php previous_post_link('%link'," <div class=img-overlay></div> $prevthumbnail <span class=meta-nav>&#xf137;</span><span class=meta-prev>Previous</span> <p>%title</p>", TRUE); ?>
                                            </div>
                                            
                                            <?php } 
                                            $nextPost = get_next_post();
                                            $nid = $nextPost->ID ;
                                            $permalink = get_permalink($nid);
                                            if($nextPost) { ?>
                                            <div class="nav-box next card" style="float:right;">
                                            <?php $nextthumbnail = get_the_post_thumbnail($nid); ?>
                                            <?php next_post_link('%link',"<div class=img-overlay></div> $nextthumbnail  <span class=meta-next>Next</span> <span class=meta-nav>&#xf138;</span> <p>%title</p>", TRUE); ?>
                                            </div>
                                            <?php } ?>
                                    </div>
                                  
                                    <div class="comments-section">
                                                
                                        <?php if ( comments_open() || get_comments_number() ) {
                                            comments_template();
                                        } ?>
                                                
                                    </div>

                                  <?php endwhile;endif;?>
                                </div>
                            
                                <!-- Add Sidebar -->
                                <?php get_template_part('sidebar'); ?>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>