<?php 

/* 

Template Name: Home Page 
Author Name: Mohammad Azaz
Email: mohammadazaz966@gmail.com

*/

?>

<?php get_header(); ?>

<section id="main-wrapper">
    <div class="row">
        <?php get_template_part('content'); ?>
        <?php get_template_part('sidebar'); ?>
    </div>
</section>

<?php get_footer(); ?>