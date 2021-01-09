<?php 

$option2=get_theme_mod('featured-blog2-post2option');
if($option2==true){
    ?>
    <style> #headerblogpost3 {display:none;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost3 {display:block;}</style>
    <?php
}

?>


<section id="headerblogpost3">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="header-blogpost3-title">
                    <h3><?php echo get_theme_mod('featuredblog2post2'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredblog2post2'),'posts_per_page'=>1,'offset'=>0));?>
                            <?php if($the_query->have_posts()): while ($the_query->have_posts()):$the_query->the_post();?>
                            <?php 
                            $tags=get_the_tags();
                            $i=2;
                            if($tags){
                            foreach($tags as $tag){
                            if($i>=1){
                            ?>
                            <span><a href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name;?></a></span>
                            <?php }$i--;}}?>
                            <?php endwhile;endif;?>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 p-0">
                    <div class="headerblogpost3_splide splide">
                        <div class="splide__track">
                            <div class="my_arrows">
                                <div class="my_arrow my_arrow_prev">
                                </div>
                                <div class="my_arrow my_arrow_next">
                                </div>
                            </div>
                            <ul class="splide__list">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredblog2post2'),'posts_per_page'=>-1,'offset'=>0);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <li class="splide__slide">
                                    <div class="header-blogpost3-style-1">
                                        <div class="card">
                                        
                                            <?php if(has_post_thumbnail()):?>
                                            <div class="img-overlay"></div>
                                            <?php the_post_thumbnail('featuredblog2post3',array('class'=>'card-img')); ?>
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                            <?php endif;?>

                                            <div class="card-body">
                                                
                                                <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredblog2post2'), 'category') ); ?>"><?php echo get_theme_mod('featuredblog2post2'); ?></a></span>
                                                <h5 class="card-title"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo wp_trim_words(get_the_title( $next_post->ID ),8); ?></a></h5>
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
</section>