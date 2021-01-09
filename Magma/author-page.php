<?php 

/* 

Template Name: Author Page 
Author Name: Mohammad Azaz
Email: mohammadazaz966@gmail.com

*/

?>

<?php get_header(); ?>

<!-- Add Hero Carousel -->
<section id="hero">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="splide splide-carousel">
                                    <div class="my_arrows">
                                        <div class="my_arrow my_arrow_prev"></div>
                                        <div class="my_arrow my_arrow_next"></div>
                                    </div>
                                    <div class="splide__track">
                                        <ul class="splide__list">

                                            <?php global $post;?>
                                            <?php $the_query=
                                            array(
                                                'post_type' => 'slider_feature',
                                                'order'=>'ASC',
                                                'tax_query' => array(
                                                  array(
                                                    'taxonomy' => 'slider_cat',
                                                    'field' => 'slug',
                                                    'terms' => get_theme_mod('aboutuspageslider')
                                                  )
                                                  ),
                                                'posts_per_page'=>-1
                                              );?>

                                            <?php $posts = get_posts($the_query);?>

                                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                                            <li class="splide__slide">
                                                <?php $largeimage=wp_get_attachment_image_src(get_post_thumbnail_id($posts->ID),'slider_feature'); ?>
                                                <div class="carousel-item active" style="background-image: url('<?php echo $largeimage[0]; ?>');">
                                                        <div class="carousel-container">
                                                            <div class="carousel-content">
                                                                <h2><?php the_title(); ?></h2>
                                                                <p><?php echo get_the_excerpt(); ?></p>
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
                    </div>
</section>


<section id="headerblogpost6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-block">
                        <h4 class="title f-20">About Author</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="author">
                        <div class="author-img">
                            
                            <?php if(get_avatar(get_the_author_meta('ID'))):?>
                            <?php echo get_avatar(get_the_author_meta('ID'),350,$default,$alt,$args);?>
                            <?php else: ?>
                            <img class="card-img-top" src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-1.png" alt="Card image cap">
                            <?php endif;?>
                            
                            <div class="social">

                                <?php
                                $page_url = get_the_author_posts_link();
                                $title = get_the_author();
                                $description = get_the_author_meta('description');
								$noposts=count_user_posts(get_the_author_meta('ID'));
                                ?>

                                <a href="http://twitter.com/home?status=<?php print(urlencode($title)); ?>+<?php print(urlencode($page_url)); ?>" target=’_blank’><i class="fab fa-twitter"></a></i>

                                <a href="http://www.facebook.com/share.php?u=<?php print(urlencode($page_url)); ?>&title=<?php print(urlencode($title)); ?> " target=’_blank’><i class="fab fa-facebook-f"></a></i>

                                <a href="https://plus.google.com/share?url=<?php print(urlencode($page_url)); ?> " target=’_blank’><i class="fab fa-google-plus-g"></i></a>

                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print(urlencode($page_url)); ?>&title=<?php print(urlencode($title)); ?>&summary=<?php echo $description; ?>&source=<?php bloginfo('url'); ?>"  target=’_blank’><i class="fab fa-linkedin"></a></i>

                            </div>
                        </div>
                        <div class="author-info">
                            <h5><?php the_author();?></h5>
                            <span>Website Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="author-content">
                        <p><?php the_author_meta('description');?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="heading-block">
                        <h4 class="title f-20">Author Posts </h4>
						<h4 class="title f-20" style="position:absolute;right:0;">No of Posts : <span><?php echo $noposts;?></span></h4>
                    </div>
                </div>
            </div>
            <div class="row">
					<div class="author-blogpost-list-item">
                            <?php 
                                $args = array(
									'post_type' => 'post',
									'post_status'   => 'publish',
									'posts_per_page' => -1, 
									);
								$the_query = new WP_Query( $args );?>

                            <?php if($the_query->have_posts() ) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

						<div class="first-block col-md-4 col-lg-4 col-sm-4">
                        
                            <div class="card h-100">

                                   <?php if(has_post_thumbnail()):?>
                                   <div class="img-overlay"></div>
                                   <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img-top')); ?>
                                   <?php else: ?>
                                   <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                   <?php endif;?>
								   
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
								   <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('M j');?></span>
                                <div class="card-body">
									<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
								</div>
								<div class="card-footer">
                                    <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                    <span class="author-comments"><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
								</div>
                            </div>
                        </div>

						<?php endwhile;endif;?>
						<?php wp_reset_query();?>
<div class="pagination-container"></div>
					</div>
						

            </div>
        </div>
</section>

<?php get_footer(); ?>