<?php 

/* 

Template Name: Demo Page 
Author Name: Mohammad Azaz
Email: mohammadazaz966@gmail.com

*/

?>

<?php get_header(); ?>

<section id="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="owl-carousel owl-theme" id="owl-example">

                    <?php global $post;?>

                    <?php $the_query=array('post_type'=>'slider_feature','order'=>'ASC','taxonomy ' => get_theme_mod('contactuspageslider'),'posts_per_page'=>-1);?>

                    <?php $posts = get_posts($the_query);?>

                    <?php foreach ($posts as $post):setup_postdata($posts)?>
                    <?php $largeimage=wp_get_attachment_image_src(get_post_thumbnail_id($posts->ID),'slider_feature'); ?>
                        <div class="slide" style="background-image: url('<?php echo $largeimage[0]; ?>');">
                            <div class="slide-content">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                    <?php wp_reset_query();?> 
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>