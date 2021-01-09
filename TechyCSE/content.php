<div class="col-8 p-0">
<div class="main-post">
<?php
$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
$args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => get_option('posts_per_page'), 
	'paged'=>$paged
    );


$custom_query = new WP_Query( $args );

$temp_query = $wp_query;
$wp_query = null;
$wp_query = $custom_query;

if ( $custom_query->have_posts() ){
while ( $custom_query->have_posts() ) {
    $custom_query->the_post();
?>
<div class="card featured-blog-1">
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
            <?php 
                $categories=get_the_category();
                $i=1;
                foreach($categories as $category){
                    if($i>=1){
                    echo '
                        <span class="category"><a href="'.get_category_link($category->term_id).'"><i class="fa fa-tags"></i>'.$category->name.'</a></span>';
                    }
                $i--;
                }
            ?>
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
<?php
}
}
wp_reset_postdata();
 
the_posts_pagination(); 

$wp_query = NULL;
$wp_query = $temp_query;
?>

</div>

</div>