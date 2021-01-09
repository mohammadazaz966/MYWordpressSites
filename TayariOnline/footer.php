

    <section id="footersection">
        <div class="container p-0">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-4">
                        <div class="header-blogpost5-title">
                            <h3>About Us</h3>
                        </div>
                        <p><?php echo set_author_description(25); ?></p>
                        <div class="header-blogpost5-title">
                            <h3>Social Icons</h3>
                        </div>
                        <ul class="footer-social-sites">
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style a2a_follow">
                                <a class="a2a_button_twitter btn" data-a2a-follow="AddToAny"><i class="fab fa-twitter"></i></a>
                                <a class="a2a_button_facebook btn" data-a2a-follow="AddToAny"><i class="fab fa-facebook-f"></i></a>
                                <a class="a2a_button_instagram btn" data-a2a-follow="kevin"><i class="fab fa-instagram"></i></a>
                                <a class="a2a_button_pinterest btn" data-a2a-follow="Pinterest"><i class="fab fa-pinterest"></i></a>
                                <a class="a2a_button_linkedin btn" data-a2a-follow="reidhoffman"><i class="fab fa-linkedin"></i></a>
                                <a class="a2a_button_youtube btn" data-a2a-follow="YouTube"><i class="fab fa-youtube"></i></a>
                                <a class="a2a_button_tumblr btn" data-a2a-follow="staff"><i class="fab fa-tumblr-square"></i></a>
                                <a class="a2a_button_email btn" data-a2a-follow="AddToAny"><i class="fas fa-envelope"></i></a>
                            </div>
                        </ul>
                        <div class="header-blogpost5-title">
                            <h3>Our NewsLetter</h3>
                        </div>
                        <form>
                            <div class="form-group">
                                <p class="card-text">Make sure you don't miss interesting happenings by joining our newsletter
                                        program.
                                </p>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                    <div class="col-4">
                        <div class="header-blogpost5-title">
                            <h3>Latest Post</h3>
                        </div>

                        
                                <?php $the_query = new WP_Query( array(
                                    'posts_per_page'=>2,
                                    'numberposts' => 2,
                                    'category' => 0,
                                    'orderby' => 'post_date',
                                    'order' => 'DESC',
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'suppress_filters' => true) ); ?>                       
                                <?php if($the_query->have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                                <div class="card style2">
                                    <div class="row no-gutters">
                                        <div class="col-sm-5">

                                            <?php if(has_post_thumbnail()):?>
                                            <div class="img-overlay"></div>
                                            <?php the_post_thumbnail('featuredblog2post2',array('class'=>'card-img-top')); ?>
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                            <?php endif;?>

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card-body">

                                            <h5 class="card-title"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo wp_trim_words(get_the_title( $next_post->ID ),8); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php endwhile;endif;?>
                                <?php wp_reset_query();?>

                    </div>
                    <div class="col-4">
                        <div class="header-blogpost5-title">
                            <h3>Category Post</h3>
                        </div>

                                    <?php

                                    $terms = get_terms( array( 
                                        'taxonomy' => 'category',
                                        'parent'   => 0
                                    ) );

                                    if ( $terms ) {
                                            foreach( $terms as $term ) {		
                                    ?>	
                                <?php $args = array(
                                    'post_type' => 'post',
                                    'orderby' => 'rand',
                                    'posts_per_page' => 3,
                                    'tax_query' => array(
                                        array(
                                        'taxonomy' => 'category',
                                        'field'    => 'slug',
                                        'terms'    => $term,
                                        ),
                                    )
                                    );  
                                    $the_query = new WP_query ( $args );
                                    ?>                       
                                <?php if($the_query->have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                                <div class="card style2">
                                    <div class="row no-gutters">
                                        <div class="col-sm-5">

                                            <?php if(has_post_thumbnail()):?>
                                            <div class="img-overlay"></div>
                                            <?php the_post_thumbnail('featuredblog2post2',array('class'=>'card-img-top')); ?>
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                            <?php endif;?>

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card-body">

                                            <h5 class="card-title"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo wp_trim_words(get_the_title( $next_post->ID ),8); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            <?php endwhile;endif;
                                }
                            }	
                            ?>
                            <?php wp_reset_query();?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="copyrightsection">
        <div class="container p-0">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-6">
                        <div class="copyright">
                            &copy; Copyright 2020 - <strong><a href="index.php">Tayari<span>Online</span></a></strong>
                            Designed by <a href="#">Mohammad Azaz</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <nav>
                        <?php $args = [ 'theme_location' => 'footer' ]; ?>
                        <?php wp_nav_menu( $args ) ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

<?php wp_footer(); ?>

</div>
</body>

</html>