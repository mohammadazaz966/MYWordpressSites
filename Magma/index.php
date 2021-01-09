<?php get_header(); ?>

<!-- Blog Post Section 1 -->
<section id="blog-post-widget-1">
    <div class="container">
        <div class="row" >
                <div class="col-6 p-0">

                    <?php global $post;?>

                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredpost-blog1'),'posts_per_page'=>1,'offset'=>1);?>

                    <?php $posts = get_posts($the_query);?>

                    <?php foreach ($posts as $post):setup_postdata($posts)?>

                    <div class="card" >
                        <?php if(has_post_thumbnail()):?>
                            <?php the_post_thumbnail('featured',array('class'=>'card-img')); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                        <?php endif;?>

                        <div class="card-body">
                            <div class="card-body-tags">
                                <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost-blog1'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('featuredpost-blog1'); ?></a></span>
                                <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
                            </div>
                            <h1 class="title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h1>
                            <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                            <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                            <p><?php echo set_excerpt_length_blog_post(20); ?></p>
                        </div>
                    </div>

                    <?php endforeach;?>
                    <?php wp_reset_query();?>

                </div>
                <div class="col-3 p-0">

                    <?php global $post;?>

                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredpost-blog1'),'posts_per_page'=>2,'offset'=>2);?>

                    <?php $posts = get_posts($the_query);?>

                    <?php foreach ($posts as $post):setup_postdata($posts)?>

                    <div class="card featured-blog-2">
                        <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail('featured-blog-small',array('class'=>'card-img')); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                        <?php endif;?>

                        <div class="card-body">
                            <div class="card-body-tags">
                                <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost-blog1'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('featuredpost-blog1'); ?></a></span>
                                <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
                            </div>
                            <h1 class="title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h1>
                            <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                            <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                            <p><?php echo set_excerpt_length_blog_post(10); ?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php wp_reset_query();?>
                </div>
                <div class="col-3 p-0">

                    <?php global $post;?>

                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredpost-blog1'),'posts_per_page'=>1,'offset'=>4);?>

                    <?php $posts = get_posts($the_query);?>

                    <?php foreach ($posts as $post):setup_postdata($posts)?>

                    <div class="card featured-blog-3">
                        <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail('featured-blog-small',array('class'=>'card-img')); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                        <?php endif;?>

                        <div class="card-body">
                            <div class="card-body-tags">
                                <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost-blog1'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('featuredpost-blog1'); ?></a></span>
                                <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
                            </div>
                            <h1 class="title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h1>
                            <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                            <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                            <p><?php echo set_excerpt_length_blog_post(10); ?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php wp_reset_query();?>
                </div>
        </div>
    </div>
</section>
<!-- End Blog Post Section 1 -->

<!-- Ad Section -->
<section id="ad-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="ad-heading">
                    <h1 class="title">RESPONSIVE AD SECTION</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Ad Section -->

<!-- Heading Section -->
<section id="heading-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="heading-block">
                    <h4 class="title"><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost-carousel'), 'category') ); ?>"><?php echo get_theme_mod('featuredpost-carousel'); ?></a></h4>
                    <a class="btn" href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost-carousel'), 'category') ); ?>">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Heading Section -->

<!-- Blog Carousel Section -->
<section id="blog-carousel">
    <div class="container">
        <div class="row" >
            <div class="col-lg-12 p-0">
                <div class="splide blog-carousel-splide-m-1">
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

                            <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredpost-carousel'),'posts_per_page'=>-1);?>

                            <?php $posts = get_posts($the_query);?>

                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                            <li class="splide__slide">
                                <div class="card">

                                    <?php if(has_post_thumbnail()):?>
                                    <?php the_post_thumbnail('featured',array('class'=>'card-img')); ?>
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                    <?php endif;?>

                                    <div class="card-body">
                                        <div class="card-body-tags">
                                            <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost-blog1'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('featuredpost-blog1'); ?></a></span>
                                            <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
                                        </div>
                                        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h1>
                                        <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                        <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                        <p><?php echo set_excerpt_length_blog_post(20); ?></p>
                                        <a href="#" class="btn">Read More</a>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach;?>
                            <?php wp_reset_query();?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Carousel Section -->

<!-- Main Section -->
<section id="main-row">
    <div class="container">
        <div class="row">

        <?php get_template_part('main-content'); ?>
        <?php get_template_part('sidebar'); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>