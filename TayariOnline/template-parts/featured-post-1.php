<?php 

$option=get_theme_mod('featuredpost1option');
if($option==true){
    ?>
    <style> #headerblogpost1 .header-blogpost1-style-1{display:none;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost1 .header-blogpost1-style-1{display:block;}</style>
    <?php
}

$option2=get_theme_mod('featuredpost2option');
if($option2==true){
    ?>
    <style> #headerblogpost1 .header-blogpost1-style-2{display:none;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost1 .header-blogpost1-style-2{display:block;}</style>
    <?php
}
?>

<section id="headerblogpost1">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-8 p-0" style="float: left;">
                        <div class="header-blogpost1-style-1">

                            <?php global $post;?>

                            <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredpost1'),'posts_per_page'=>1);?>

                            <?php $posts = get_posts($the_query);?>

                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                            <div class="card">

                                <?php if(has_post_thumbnail()):?>
                                <div class="img-overlay"></div>
                                <?php the_post_thumbnail('featured',array('class'=>'card-img')); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                <?php endif;?>

                                <div class="card-body">

                                    <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost1'), 'category') ); ?>"><?php echo get_theme_mod('featuredpost1'); ?></a></span>
                                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                    <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                    <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                    <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                                </div>
                            </div>

                            <?php endforeach;?>
                            <?php wp_reset_query();?>

                        </div>
                    </div>
                    <div class="col-4" style="float: right;">
                        
                        <?php global $post;?>

                        <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredpost2'),'posts_per_page'=>3);?>

                        <?php $posts = get_posts($the_query);?>

                        <?php foreach ($posts as $post):setup_postdata($posts)?>

                        <div class="header-blogpost1-style-2">
                            <div class="card">

                                <?php if(has_post_thumbnail()):?>
                                <div class="img-overlay"></div>
                                <?php the_post_thumbnail('featured',array('class'=>'card-img')); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                <?php endif;?>

                                <div class="card-body">
                                    <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredpost2'), 'category') ); ?>"><?php echo get_theme_mod('featuredpost2'); ?></a></span>
                                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h5>
                                    <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                    <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;?>
                        <?php wp_reset_query();?>

                    </div>
                </div>
            </div>
        </div>
</section>