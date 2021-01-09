<?php 

$option=get_theme_mod('featuredcarouseloption');
if($option==true){
    ?>
    <style> #headercarousel{display:none;}</style>
    <?php
}else{
    ?>
    <style> #headercarousel{display:block;}</style>
    <?php
}

?>

<section id="headercarousel">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="header-carousel splide">
                        <div class="splide__track">
                            <div class="my_arrows">
                                <div class="my_arrow my_arrow_prev">
                                </div>
                                <div class="my_arrow my_arrow_next">
                                </div>
                            </div>
                            <ul class="splide__list">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredcarousel'),'posts_per_page'=>-1);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <li class="splide__slide">
                                    <div class="card">
                                    
                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredcarousel',array('class'=>'card-img')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                        <div class="card-body-overlay">
                                            <div class="card-body">
                                                <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredcarousel'), 'category') ); ?>"><?php echo get_theme_mod('featuredcarousel'); ?></a></span>
                                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                                <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                <p class="card-text"><?php echo get_the_excerpt(); ?></p>
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