<?php get_header(); ?>

<section id="headerblogpost6">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-8">
                        <div class="header-blogpost5-title">
                            <h3>Category : <?php single_cat_title();?></h3>
                        </div>
                        <ul class="header-blogpost6-blogs">

                          <?php if(have_posts() ) : while (have_posts()) : the_post(); ?>

                            <li>
                                <div class="card style2">
                                    <div class="row no-gutters">
                                        <div class="col-sm-5">
                                           
                                        <?php 
                                            $categories=get_the_category();
                                            $i=1;
                                            foreach($categories as $category){
                                                if($i>=1){
                                                    echo '
                                                        <span class="category"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></span>';
                                                        }
                                                    $i--;
                                                }
                                        ?>
                                            
                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredblog2post3',array('class'=>'card-img-top')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card-body">

                                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                <span class="published-date"><i class="fa fa-calendar-alt"></i><a href="<?php echo get_day_link(get_post_time('Y'),get_post_time('m'),get_post_time('j')); ?>"><?php the_time('F j, Y');?></a></span>
                                                <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                                                
                                                <div class="first-block">
                                                    <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                                                    <ul class="footer-social-sites">
                                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                            <a class="a2a_button_facebook btn"><i class="fab fa-facebook-f"></i></a>
                                                            <a class="a2a_button_twitter btn"><i class="fab fa-twitter"></i></a>
                                                            <a class="a2a_button_email btn"><i class="fas fa-envelope"></i></a>
                                                            <a class="a2a_button_pinterest btn"><i class="fab fa-pinterest"></i></a>
                                                            <a class="a2a_button_linkedin btn"><i class="fab fa-linkedin"></i></a>
                                                            <a class="a2a_button_tumblr btn"><i class="fab fa-tumblr-square"></i></a>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <?php endwhile;endif;?>

                        </ul>
                        <?php the_posts_pagination(); ?>
                    </div>

                        <!-- Add Sidebar -->
                        <?php get_template_part('sidebar'); ?>

                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>