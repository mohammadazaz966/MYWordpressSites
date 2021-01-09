<div class="col-8 p-0">
                <div class="main-wrapper" id="main-wrapper">
                    <!-- Main Blog 1 -->
                    <div class="main-blog-1">
                        <div class="heading-block" >
                            <h4 class="title"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-1'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost-1'); ?></a></h4>
                            <a class="btn" href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-1'), 'category') ); ?>">View All</a>
                        </div>
                        <div class="main-blog-1-post">
                            <div class="col-6 p-0">
                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-1'),'posts_per_page'=>1);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>
                                
                                <div class="card-outer">
                                        <div class="card-inner-image">
                                            <?php if(has_post_thumbnail()):?>
                                            <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                            <?php endif;?>
                                            <div class="card-body inner">
                                                <div class="card-body-tags">
                                                    <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-1'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('mainblogpost-1'); ?></a></span>
                                                    <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
                                                </div>
                                                <h1 class="title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h1>
                                                <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                            </div>
                                        </div>
                                        <div class="card-body-outer">
                                            <p><?php echo set_excerpt_length_blog_post(20); ?></p>
                                            <button type="button" class="btn">Read More</button>
                                        </div>
                                </div>
                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredpost-blog1'),'posts_per_page'=>1,'offset'=>1);?>

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
                            <div class="col-6 p-0">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-1'),'posts_per_page'=>4,'offset'=>2);?>

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
                                            <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-1'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('mainblogpost-1'); ?></a></span>
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
                    <!-- Main Blog 2 -->
                    <div class="main-blog-2">
                        <div class="heading-block" >
                            <h4 class="title"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-2'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost-2'); ?></a></h4>
                            <a class="btn" href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-2'), 'category') ); ?>">View All</a>
                        </div>
                        <div class="main-blog-1-post">
                            <div class="col-6 p-0">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-2'),'posts_per_page'=>1);?>

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
                                            <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-2'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('mainblogpost-2'); ?></a></span>
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
                            <div class="col-6 p-0">
                                <ul>
                                    <?php global $post;?>

                                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-2'),'posts_per_page'=>3,'offset'=>1);?>

                                    <?php $posts = get_posts($the_query);?>

                                    <?php foreach ($posts as $post):setup_postdata($posts)?>
                                    <li>
                                        <div class="card featured-blog-4">
                                            <div class="row no-gutters">
                                                <div class="col-sm-5">
                                                    <?php if(has_post_thumbnail()):?>
                                                    <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img b-tr')); ?>
                                                    <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                    <?php endif;?>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="card-body">
                                                        <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h1>
                                                        <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                        <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach;?>
                                    <?php wp_reset_query();?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Main Blog 3 -->
                    <div class="main-blog-3">
                        <div class="heading-block" >
                            <h4 class="title"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-carousel'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost-carousel'); ?></a></h4>
                            <a class="btn" href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-carousel'), 'category') ); ?>">View All</a>
                        </div>
                        <div class="splide main-carousel">
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

                                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-carousel'),'posts_per_page'=>-1);?>

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
                                    <?php endforeach;?>
                                    <?php wp_reset_query();?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Main Blog 4 -->
                    <div class="main-blog-4">
                        <div class="main-blog-1-post">
                            <div class="col-6 p-0">
                                <div class="heading-block" >
                                    <h4 class="title"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-3'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost-3'); ?></a></h4>
                                    <a class="btn" href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-3'), 'category') ); ?>">View All</a>
                                </div>
                                <div class="first-block">
                                    <?php global $post;?>

                                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-3'),'posts_per_page'=>1);?>

                                    <?php $posts = get_posts($the_query);?>

                                    <?php foreach ($posts as $post):setup_postdata($posts)?>

                                    <div class="card featured-blog-5">
                                        <?php if(has_post_thumbnail()):?>
                                        <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                        <div class="card-body">
                                            <div class="card-body-tags">
                                                <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-3'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('mainblogpost-3'); ?></a></span>
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

                                    <ul>
                                        <?php global $post;?>

                                        <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-2'),'posts_per_page'=>3,'offset'=>1);?>

                                        <?php $posts = get_posts($the_query);?>

                                        <?php foreach ($posts as $post):setup_postdata($posts)?>
                                        <li>
                                            <div class="card featured-blog-4 bg-c">
                                                <div class="row no-gutters">
                                                    <div class="col-sm-5">
                                                        <?php if(has_post_thumbnail()):?>
                                                        <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                                        <?php else: ?>
                                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                        <?php endif;?>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="card-body">
                                                            <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h1>
                                                            <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                            <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach;?>
                                        <?php wp_reset_query();?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 p-0">
                                <div class="heading-block" >
                                    <h4 class="title"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-2'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost-2'); ?></a></h4>
                                    <a class="btn" href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-2'), 'category') ); ?>">View All</a>
                                </div>
                                <div class="second-block">
                                    <?php global $post;?>

                                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-4'),'posts_per_page'=>1);?>

                                    <?php $posts = get_posts($the_query);?>

                                    <?php foreach ($posts as $post):setup_postdata($posts)?>

                                    <div class="card featured-blog-5">
                                        <?php if(has_post_thumbnail()):?>
                                        <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                        <div class="card-body">
                                            <div class="card-body-tags">
                                                <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-4'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('mainblogpost-4'); ?></a></span>
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

                                    <ul>
                                        <?php global $post;?>

                                        <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-2'),'posts_per_page'=>3,'offset'=>1);?>

                                        <?php $posts = get_posts($the_query);?>

                                        <?php foreach ($posts as $post):setup_postdata($posts)?>
                                        <li>
                                            <div class="card featured-blog-4 bg-c">
                                                <div class="row no-gutters">
                                                    <div class="col-sm-5">
                                                        <?php if(has_post_thumbnail()):?>
                                                        <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                                        <?php else: ?>
                                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                        <?php endif;?>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="card-body">
                                                            <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h1>
                                                            <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                            <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                        </div>
                                                    </div>
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
                    <!-- Main Blog 5 -->
                    <div class="main-blog-5">
                        <div class="heading-block" >
                            <h4 class="title"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-5'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost-5'); ?></a></h4>
                            <a class="btn" href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-5'), 'category') ); ?>">View All</a>
                        </div>
                        <div class="first-block">
                            <?php global $post;?>

                            <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-5'),'posts_per_page'=>3,'offset'=>1);?>

                            <?php $posts = get_posts($the_query);?>

                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                            <div class="card featured-blog-6">
                                <h1 class="card-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <div class="card-body">
                                    <div class="col-5">
                                        <?php if(has_post_thumbnail()):?>
                                        <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body-tags">
                                            <span><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost-5'), 'category') ); ?>"><i class="fa fa-tags"></i><?php echo get_theme_mod('mainblogpost-5'); ?></a></span>
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><span><i class="fa fa-user"></i> <?php the_author();?></span></a>
                                            <a href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')));?>"><span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span></a>
                                            <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
                                        </div>
                                            <p><?php echo get_the_excerpt(); ?></p>
                                            <div class="first-block">
                                                <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                                                <ul class="footer-social-sites">
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
                                    </div>
                            </div>
                            <?php endforeach;?>
                            <?php wp_reset_query();?>
                            <?php the_posts_pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>