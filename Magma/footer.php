<section id="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <!-- Category Post Section -->
                <div class="category-post-section" >
                    <div class="footer-heading-block" >
                        <h4 class="title">CATEGORY POSTS</h4>
                    </div>
	
                    <?php $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby'   => 'rand',
                    'posts_per_page' => 4
                    );
                    $the_query = new WP_query ( $args );
                    ?>                      
                    <?php if($the_query->have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                    <div class="card featured-blog-4">
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
                                    <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(6); ?></a></h1>
                                    <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                    <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;endif;?>
                    <?php wp_reset_query();?>

                </div> <!-- End Category Post Section -->
            </div>
            <div class="col-4">
                <!-- Recent Post Section -->
                <div class="recent-post-section" >
                    <div class="footer-heading-block" >
                        <h4 class="title">Recent Posts In <?php echo get_theme_mod('mainblogpost-5'); ?></h4>
                    </div>
	
                    <?php $args = array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost-5'),'posts_per_page'=>5);  
                    $the_query = new WP_query ( $args );
                    ?>                      
                    <?php if($the_query->have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                    <div class="card featured-blog-4">
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
                                    <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(6); ?></a></h1>
                                    <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                    <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;endif;?>
                    <?php wp_reset_query();?>

                </div> <!-- End Recent Post Section -->
            </div>
            <div class="col-4">
                <div class="footer-heading-block">
                    <h4>About Us</h4>
                </div>
                <p><?php echo set_author_description_length(25);?></p>
                <div class="footer-heading-block">
                    <h4>Social Icons</h4>
                </div>
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
                <div class="footer-heading-block">
                    <h4>Our NewsLetter</h4>
                </div>
                <form>
                    <div class="form-group">
                        <p class="card-text">Make sure you don't miss interesting happenings by joining our newsletter
                                        program.
                        </p>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
        <div class="row row-copyright">
            <div class="col-8">
                <div class="copyright-section">
                    <div class="copyright">
                        &copy; Copyright <strong><span><?php bloginfo('name');  ?></span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();  ?></a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="privacy-section">
                    <?php $args = [ 'theme_location' => 'footer' ]; ?>
                    <?php wp_nav_menu( $args ) ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Footer Section -->

<a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
<div id="preloader"></div>
	
<?php wp_footer(); ?>

</div>

</body>

</html>