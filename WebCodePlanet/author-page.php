<?php 

/* 

Template Name: Author Page 
Author Name: Mohammad Azaz
Email: mohammadazaz966@gmail.com

*/

?>

<?php get_header(); ?>

<section id="headerblogpost6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-blogpost5-title">
                        <h4 class="title">About Author</h4>
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
						
        </div>
</section>

<?php get_footer(); ?>