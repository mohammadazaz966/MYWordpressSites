<?php 

/* 

Template Name: Home Page 
Author Name: Mohammad Azaz
Email: mohammadazaz966@gmail.com

*/

?>

<?php get_header(); ?>

<!-- Add featured-post-1 -->
<?php get_template_part('template-parts/featured','post-1'); ?>

<!-- Add featured-post-1 -->
<?php get_template_part('template-parts/featured','carousel'); ?>

<section id="headerad">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="header-ad">
                    <?php echo get_theme_mod('featured-banner-ad'); ?>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Add featured-post-2 -->
<?php get_template_part('template-parts/featured','post-2'); ?>

<!-- Add featured-post-3 -->
<?php get_template_part('template-parts/featured','post-3'); ?>

<!-- Add featured-post-4 -->
<?php get_template_part('template-parts/featured','post-4'); ?>

<!-- Add featured-post-5 -->
<?php get_template_part('template-parts/featured','post-5'); ?>

<!-- Add MainSection -->
<?php get_template_part('maincontent'); ?>

<?php get_footer(); ?>