
<?php 

$option=get_theme_mod('sidebarblogoption');
if($option==true){
    ?>
    <style> #headerblogpost6 .col-4{display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost6 .col-4{display:block;}</style>
    <?php
}

?>         
                    
                    <div class="col-4">
                        <div class="header-blogpost5-title">
                            <h3><?php echo get_theme_mod('sidebarblogpost1'); ?></h3>
                        </div>
                        <div class="header-blogpost1-style-2">

                            <?php global $post;?>

                            <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('sidebarblogpost1'),'posts_per_page'=>1,'offset'=>0);?>

                            <?php $posts = get_posts($the_query);?>

                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                            <div class="card">
                                
                                <?php if(has_post_thumbnail()):?>
                                <div class="img-overlay"></div>
                                <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img')); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                <?php endif;?>

                                <div class="card-body">

                                    <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('sidebarblogpost1'), 'category') ); ?>"><?php echo get_theme_mod('sidebarblogpost1'); ?></a></span>
                                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                    <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                    <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>

                                </div>
                            </div>

                            <?php endforeach;?>
                            <?php wp_reset_query();?>

                        </div>
                        <ul class="header-blogpost4-blogs">

                            <?php global $post;?>

                            <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('sidebarblogpost1'),'posts_per_page'=>3,'offset'=>1);?>

                            <?php $posts = get_posts($the_query);?>

                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                            <li>
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

                                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <?php endforeach;?>
                            <?php wp_reset_query();?>

                        </ul>
                        <div class="header-blogpost5-title">
                            <h3><?php echo get_theme_mod('sidebarblogpost2'); ?></h3>
                        </div>
                        <ul class="header-blogpost4-blogs">
                            <li>
                                <div class="header-blogpost1-style-2">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('sidebarblogpost2'),'posts_per_page'=>3,'offset'=>0);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <div class="card">
                                    
                                    <?php if(has_post_thumbnail()):?>
                                    <div class="img-overlay"></div>
                                    <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img')); ?>
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                    <?php endif;?>

                                    <div class="card-body">

                                        <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('sidebarblogpost2'), 'category') ); ?>"><?php echo get_theme_mod('sidebarblogpost2'); ?></a></span>
                                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                        <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                        <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>

                                    </div>
                                </div>

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                                </div>
                            </li>
                        </ul>
                        <div class="header-blogpost5-title">
                            <h3>Follow Our Sites</h3>
                        </div>
                        <div class="side-social-sites">
                            <ul>
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
                        </div>
                        <div class="header-ad">
                            <?php echo get_theme_mod('side-banner-ad'); ?>
                        </div>
                        <div class="header-blogpost5-title">
                            <h3>Category</h3>
                        </div>
                        <div class="category-list-sidebar">
                            <ul>
                                <?php 
                                    $args=array(
                                            'taxonomy'   => 'category',
                                            'orderby'    => 'name',
                                            'hide_empty' => 1, // change to 1 to hide categores not having a single post);
                                                );
                                    $categories=get_categories($args);
                                    foreach($categories as $category){
                                    echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a><span>'.$category->category_count.'</span></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="header-blogpost5-title">
                            <h3>Archive</h3>
                        </div>
                        <div class="category-list-sidebar">
                            <?php wp_get_archives(array('type'=>'monthly','limit'=>10,'order'=>'desc'));?>
                        </div>
                    </div>