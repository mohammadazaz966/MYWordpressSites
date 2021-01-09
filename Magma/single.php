<?php get_header(); ?>

<!-- Main Section -->
<section id="main-row">
    <div class="container">
        <div class="row">
            <div class="col-8 p-0">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <div class="page">
                    <div class="page-title">
                        <h5 class="title"><?php the_title(); ?></h5>
                        <ul class="slider-post-info">
                            <li class="slider-post-info-item"><a href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')));?>"><i class="fa fa-calendar"></i><?php the_time('F, j, Y');?></a>
                                    </li>
                            <li class="slider-post-info-item"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user"></i><?php the_author();?></a>
                                    </li>
                            <li class="slider-post-info-item"><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number();?></a>
                                    </li>
							<li class="slider-post-info-item"><?php $count = get_post_meta( get_the_ID(), 'post_views_count', true ); echo $count.' views';?></li>

                            <?php 
                                $categories=get_the_category();
                                $i=2;
                                foreach($categories as $category){
                                    if($i>=1){
                                echo '
                                    <li class="slider-post-info-item"><a href="'.get_category_link($category->term_id).'"><i
                                    class="fa fa-folder"></i>'.$category->name.'</a></li>';
                                }
                                $i--;
                                    }
                            ?>
                        </ul>
                    </div>
                    <div class="page-content">
                        <div class="card">
                                        
                            <?php if(has_post_thumbnail()):?>
                            <?php the_post_thumbnail('slider-blog-post_3',array('class'=>'card-img-top')); ?>
                            <?php else: ?>
                            <img class="card-img-top" src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-3.png"
                            alt="Card image cap">
                            <?php endif;?>
                                        
                            <div class="card-body">
                                <p class="card-text"><?php the_content();?></br></br></p>
                            </div>
                            <div class="card-footer">
                                <h5>Labels:</h5>
                                    <ul>

                                        <?php 
                                            $tags=get_the_tags();
                                            if($tags):
                                                foreach($tags as $tag):?>
                                                <li><a href="<?php echo esc_url(get_tag_link($tag->term_id));?>"><?php echo esc_html($tag->name);?></a>
                                                </li>
                                                <?php endforeach;?>
                                            <?php endif;?>

                                    </ul>
                            </div>
                            <div class="card-footer">
                                <h5>Share This Post:</h5>
                                    <ul class="social-sites">
                                        <li style="background: #3b5999;"><a href="<?php echo get_theme_mod('facebook'); ?>"><i
                                                                                class="fab fa-facebook-f"></i></a></li>
                                        <li style="background: #55acee;"><a href="<?php echo get_theme_mod('twitter'); ?>"><i
                                                                                class="fab fa-twitter"></i></a></li>
                                        <li style="background: #e4405f;"><a href="<?php echo get_theme_mod('instagram'); ?>"><i
                                                                                class="fab fa-instagram"></i></a></li>
                                        <li style="background: #bd081c;"><a href="<?php echo get_theme_mod('pinterest'); ?>"><i
                                                                                class="fab fa-pinterest"></i></a></li>
                                        <li style="background: #cd201f;"><a href="<?php echo get_theme_mod('youtube'); ?>"><i
                                                                                class="fab fa-youtube"></i></a></li>
                                        <li style="background: #0077B5;"><a href="<?php echo get_theme_mod('linkedin'); ?>"><i
                                                                                class="fab fa-linkedin"></i></a></li>
                                        <li style="background: #ff6600;"><a href="<?php echo get_theme_mod('side-rssfeed'); ?>"><i
                                                                                class="fa fa-rss"></i></a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="heading-block">
                                <h4 class="title">Related Post</h4>
                        </div>
                        <div class="related-post">
                                <div class="splide">
                                    <div class="my_arrows">
                                        <div class="my_arrow my_arrow_prev">
                                            <i class="fa fa-chevron-left"></i>
                                        </div>
                                        <div class="my_arrow my_arrow_next">
                                            <i class="fa fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <?php global $post;?>

                                            <?php 
                                            $tags = wp_get_post_tags($post->ID);
                                            if ($tags) {
                                            $first_tag = $tags[0]->term_id;
                                            $args=array(
                                            'tag__in' => array($first_tag),
                                            'post__not_in' => array($post->ID),
                                            'posts_per_page'=>-1,
                                            'caller_get_posts'=>1
                                            );
                                            ?>
                                            <?php $the_query = new WP_Query($args); ?>                       
                                            <?php if($the_query->have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                                            <li class="splide__slide">
                                                <div class="card featured-blog-2">

                                                    <?php if(has_post_thumbnail()):?>
                                                    <?php the_post_thumbnail('featured',array('class'=>'card-img')); ?>
                                                    <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                    <?php endif;?>

                                                    <div class="card-body">
                                                        <div class="card-body-tags">
                                                            <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-carousel'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('mainblogpost-carousel'); ?></a></span>
                                                            <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
                                                        </div>
                                                        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h1>
                                                        <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                        <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                        <p><?php echo set_excerpt_length_blog_post(10); ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endwhile;endif;}?>
                                            <?php wp_reset_query();?>
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
                    </div>
                </div>
            <?php endwhile;endif;?>
            </div>

        <?php get_template_part('sidebar'); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>