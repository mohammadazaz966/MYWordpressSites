<?php 

$option3=get_theme_mod('featured-blog2-post3option');
if($option3==true){
    ?>
    <style> #headerblogpost4 {display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost4 {display:block;}</style>
    <?php
}

?>

<section id="headerblogpost4">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-8">
                        <div class="header-blogpost4-title">

                            <h3><?php echo get_theme_mod('featuredblog2post3'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredblog2post3'),'posts_per_page'=>1,'offset'=>0));?>
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
                        <ul class="header-blogpost4-blogs">

                            <?php global $post;?>

                            <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredblog2post3'),'posts_per_page'=>4,'offset'=>0);?>

                            <?php $posts = get_posts($the_query);?>

                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                            <li>
                                <div class="card style2">
                                    <div class="row no-gutters">
                                        <div class="col-sm-5">
                                            
                                            <?php if(has_post_thumbnail()):?>
                                            <div class="img-overlay"></div>
                                            <?php the_post_thumbnail('featuredblog2post3',array('class'=>'card-img-top')); ?>
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                            <?php endif;?>

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                            
                                            <h5 class="card-title"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo wp_trim_words(get_the_title( $next_post->ID ),8); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                            <p class="card-text"><?php echo set_excerpt_length_blog_post(7); ?></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <?php endforeach;?>
                            <?php wp_reset_query();?>

                        </ul>
                        <div class="header-ad">
                            <h3>Ad Section</h3>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="header-blogpost4-title">
                            <h3>Category Posts</h3>
                        </div>
                        <ul class="header-blogpost4-blogs">

                                    <?php

                                    $terms = get_terms( array( 
                                        'taxonomy' => 'category',
                                        'parent'   => 0
                                    ) );

                                    if ( $terms ) {
                                            foreach( $terms as $term ) {		
                                    ?>	
                                    <?php $args = array(
                                    'post_type' => 'post',
                                    'orderby' => 'rand',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                        'taxonomy' => 'category',
                                        'field'    => 'slug',
                                        'terms'    => $term,
                                        ),
                                    )
                                    );  
                                    $the_query = new WP_query ( $args );
                                    ?>                      
                                <?php if($the_query->have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

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

                                            <h5 class="card-title"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo wp_trim_words(get_the_title( $next_post->ID ),8); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </li>
                             
                            <?php endwhile;endif;}}?>
                            <?php wp_reset_query();?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>