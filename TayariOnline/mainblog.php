<?php 

$option=get_theme_mod('mainblog-post1option');
if($option==true){
    ?>
    <style> #headerblogpost6 .header-blogpost5-title.mainblogpost1,#headerblogpost6 .splide,#headerblogpost6 .header-ad{display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost6 .header-blogpost5-title.mainblogpost1,#headerblogpost6 .splide,#headerblogpost6 .header-ad{display:block;}</style>
    <?php
}

$option2=get_theme_mod('mainblog-post2option');
if($option2==true){
    ?>
    <style> #headerblogpost6 .header-blogpost5-title.mainblogpost2,#headerblogpost6 .header-blogpost6-style1.mainblogpost2style,#headerblogpost6 .header-ad{display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost6 .header-blogpost5-title.mainblogpost2,#headerblogpost6 .header-blogpost6-style1.mainblogpost2style,#headerblogpost6 .header-ad{display:block;}</style>
    <?php
}

$option3=get_theme_mod('mainblog-post3option');
if($option3==true){
    ?>
    <style> #headerblogpost6 .header-blogpost6-style1 .header-blogpost6-style2.mainblogpost3style1,#headerblogpost6 .header-ad{display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost6 .header-blogpost6-style1 .header-blogpost6-style2.mainblogpost3style1,#headerblogpost6 .header-ad{display:block;}</style>
    <?php
}

$option4=get_theme_mod('mainblog-post4option');
if($option4==true){
    ?>
    <style> #headerblogpost6 .header-blogpost6-style1 .header-blogpost6-style2.mainblogpost3style2,#headerblogpost6 .header-ad{display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost6 .header-blogpost6-style1 .header-blogpost6-style2.mainblogpost3style2,#headerblogpost6 .header-ad{display:block;}</style>
    <?php
}

$option5=get_theme_mod('mainblog-post5option');
if($option5==true){
    ?>
    <style> #headerblogpost6 .header-blogpost6-style3.mainblogpost4,#headerblogpost6 .header-ad{display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost6 .header-blogpost6-style3.mainblogpost4,#headerblogpost6 .header-ad{display:block;}</style>
    <?php
}

$option6=get_theme_mod('mainblog-post6option');
if($option6==true){
    ?>
    <style> #headerblogpost6 .header-blogpost6-style3.mainblogpost5{display:none !important;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost6 .header-blogpost6-style3.mainblogpost5{display:block;}</style>
    <?php
}
?>
                   
                    <div class="col-8">
                        <div class="header-blogpost5-title mainblogpost1">
                            <h3><?php echo get_theme_mod('mainblogpost1'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost1'),'posts_per_page'=>1));?>
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
                        <div class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <?php global $post;?>

                                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost1'),'posts_per_page'=>-1);?>

                                    <?php $posts = get_posts($the_query);?>

                                    <?php foreach ($posts as $post):setup_postdata($posts)?>

                                    <li class="splide__slide">
                                        <div class="card style1">
                                            <div class="col-sm-5 p-0">
                                            
                                            <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost1'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost1'); ?></a></span>

                                                <?php if(has_post_thumbnail()):?>
                                                <div class="img-overlay"></div>
                                                <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img-top')); ?>
                                                <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                <?php endif;?>

                                            </div>
                                            <div class="col-sm-7 p-0">
                                                <div class="card-body">

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
                        <div class="header-blogpost5-title mainblogpost2">

                            <h3><?php echo get_theme_mod('mainblogpost2'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost2'),'posts_per_page'=>1,'offset'=>0));?>
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
                        <div class="header-blogpost6-style1 mainblogpost2style">
                            <div class="header-blogpost6-style2">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost2'),'posts_per_page'=>1,'offset'=>0);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <div class="card style1">
                                    <div class="col-sm-5 p-0">
                                            
                                        <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost2'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost2'); ?></a></span>

                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img-top')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                    </div>
                                    <div class="col-sm-7 p-0">
                                        <div class="card-body">

                                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                            <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                                        </div>
                                    </div>
                                </div>

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost2'),'posts_per_page'=>1,'offset'=>1);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

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

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                            </div>

                            <div class="header-blogpost6-style2">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost1'),'posts_per_page'=>1,'offset'=>2);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <div class="card style1">
                                    <div class="col-sm-5 p-0">
                                            
                                        <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost1'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost1'); ?></a></span>

                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img-top')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                    </div>
                                    <div class="col-sm-7 p-0">
                                        <div class="card-body">

                                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                            <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                                        </div>
                                    </div>
                                </div>

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost1'),'posts_per_page'=>1,'offset'=>3);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

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

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                            </div>
                        </div>
                        <div class="header-blogpost6-style1 mainblogpost3">
                            <div class="header-blogpost6-style2 mainblogpost3style1">
                                <div class="header-blogpost5-title">
                                <h3><?php echo get_theme_mod('mainblogpost3'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost3'),'posts_per_page'=>1,'offset'=>0));?>
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
                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost3'),'posts_per_page'=>1,'offset'=>0);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <div class="card style1">
                                    <div class="col-sm-5 p-0">
                                            
                                        <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost3'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost3'); ?></a></span>

                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img-top')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                    </div>
                                    <div class="col-sm-7 p-0">
                                        <div class="card-body">

                                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                            <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                                        </div>
                                    </div>
                                </div>

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost3'),'posts_per_page'=>3,'offset'=>1);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

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

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                            </div>
                            <div class="header-blogpost6-style2 mainblogpost3style2">
                                <div class="header-blogpost5-title">
                                <h3><?php echo get_theme_mod('mainblogpost4'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost4'),'posts_per_page'=>1,'offset'=>0));?>
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
                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost4'),'posts_per_page'=>1,'offset'=>0);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <div class="card style1">
                                    <div class="col-sm-5 p-0">
                                            
                                        <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost4'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost4'); ?></a></span>

                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img-top')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                    </div>
                                    <div class="col-sm-7 p-0">
                                        <div class="card-body">

                                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php echo set_title_length(10); ?></a></h5>
                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                            <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                                        </div>
                                    </div>
                                </div>

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost4'),'posts_per_page'=>3,'offset'=>1);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

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

                                <?php endforeach;?>
                                <?php wp_reset_query();?>

                            </div>
                        </div>
                        <div class="header-blogpost6-style3 mainblogpost4">
                            <div class="header-blogpost5-title">
                                <h3><?php echo get_theme_mod('mainblogpost5'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost5'),'posts_per_page'=>1,'offset'=>0));?>
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
                            <ul class="header-blogpost6-style3-blogs-list">

                                <?php global $post;?>

                                <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('mainblogpost5'),'posts_per_page'=>4,'offset'=>0);?>

                                <?php $posts = get_posts($the_query);?>

                                <?php foreach ($posts as $post):setup_postdata($posts)?>

                                <li>
                                <div class="card style1">
                                    <div class="col-sm-5 p-0">
                                            
                                        <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('mainblogpost5'), 'category') ); ?>"><?php echo get_theme_mod('mainblogpost5'); ?></a></span>

                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredblog2post1',array('class'=>'card-img-top')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                    </div>
                                    <div class="col-sm-7 p-0">
                                        <div class="card-body">

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
                        <div class="header-blogpost6-style3 mainblogpost5">
                            <div class="header-blogpost5-title">
                                <h3>All Posts</h3>
                            </div>
                            <ul class="header-blogpost6-blogs">

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
                                'orderby' => 'DESC',
                                'posts_per_page' => -1,
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
                                            
                                        <?php 
                                            $categories=get_the_category();
                                            $i=1;
                                            foreach($categories as $category){
                                                if($i>=1){
                                                    echo '
                                                        <span class="category"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></span>';
                                                        }
                                                    $i--;
                                                }
                                        ?>
                                            
                                        <?php if(has_post_thumbnail()):?>
                                        <div class="img-overlay"></div>
                                        <?php the_post_thumbnail('featuredblog2post3',array('class'=>'card-img-top')); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                        <?php endif;?>

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card-body">

                                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                <span class="published-date"><i class="fa fa-calendar-alt"></i><a href="<?php echo get_day_link(get_post_time('Y'),get_post_time('m'),get_post_time('j')); ?>"><?php the_time('F j, Y');?></a></span>
                                                <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                                                <div class="first-block">
                                                    <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                                                    <ul class="footer-social-sites">

                                                    <div class="fb-share-button social-block" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large">
                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" style="background: #3b5999;"><i
                                                                    class="fab fa-facebook-f"></i></a></div>

                                                        <li style="background: #55acee;"><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"><i
                                                                    class="fab fa-twitter"></i></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>

                                                        <li style="background: #e4405f;"><a href="<?php echo get_theme_mod('instagram'); ?>"><i
                                                                    class="fab fa-instagram"></i></a></li>

                                                        <li style="background: #bd081c;">
                                                        <a data-pin-do="embedPin" data-pin-width="large" href="https://www.pinterest.com/pin/99360735500167749/"><i class="fab fa-pinterest"></i></a>
                                                        <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
                                                        </li>

                                                        <li style="background: #cd201f;">
                                                        <script src="https://apis.google.com/js/platform.js"></script>
                                                        <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
                                                        <i class="fab fa-youtube"></i></li>

                                                        <li style="background: #0077B5;">
                                                        <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                                                        <script type="IN/Share" data-url="https://www.linkedin.com"></script><i
                                                                    class="fab fa-linkedin"></i></li>

                                                        <li style="background: #ff6600;"><a href="<?php echo get_theme_mod('side-rssfeed'); ?>"><i
                                                                    class="fa fa-rss"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <?php endwhile;endif;}}?>

                            </ul>
                            <?php the_posts_pagination(); ?>
                        </div>
                        <div class="header-ad">
                            <h3>Ad Section</h3>
                        </div>
                    </div>