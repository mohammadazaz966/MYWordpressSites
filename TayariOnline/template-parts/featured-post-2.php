<?php 

$option=get_theme_mod('featured-blog2-post1option');
if($option==true){
    ?>
    <style> #headerblogpost2 .col-8{display:none;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost2 .col-8{display:block;}</style>
    <?php
}

$option2=get_theme_mod('tabsoption');
if($option2==true){
    ?>
    <style> #headerblogpost2 .col-4{display:none;}</style>
    <?php
}else{
    ?>
    <style> #headerblogpost2 .col-4{display:block;}</style>
    <?php
}

?>

<section id="headerblogpost2">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="col-8">
                        <div class="header-blogpost2-title">
                            <h3><?php echo get_theme_mod('featuredblog2post1'); ?></h3>

                            <?php $the_query=new WP_Query(array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredblog2post1'),'posts_per_page'=>1,'offset'=>0));?>
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

                                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredblog2post1'),'posts_per_page'=>-1,'offset'=>0);?>

                                    <?php $posts = get_posts($the_query);?>

                                    <?php foreach ($posts as $post):setup_postdata($posts)?>

                                    <li class="splide__slide">
                                        <div class="col-6 p-0">
                                            <div class="card style1">
                                                <div class="col-sm-5 p-0">
                                                    
                                                    <span class="category"><a href="<?php echo esc_url(get_term_link(get_theme_mod('featuredblog2post1'), 'category') ); ?>"><?php echo get_theme_mod('featuredblog2post1'); ?></a></span>

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
                                        </div>

                                        <div class="col-6 p-0">

                                            <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('featuredblog2post1'),'posts_per_page'=>3,'offset'=>1);?>

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
                                                            <h5 class="card-title"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo wp_trim_words(get_the_title( $next_post->ID ),8); ?></a></h5>
                                                            <span class="author-title"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                            <span class="published-date"><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                            <p class="card-text"><?php echo set_excerpt_length_blog_post(7); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;?>
                                            <?php wp_reset_query();?>
                                            
                                        </div>
                                    </li>

                                    <?php endforeach;?>
                                    <?php wp_reset_query();?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Popular</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Recent</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Tags</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <?php $popularpost = new WP_Query( array(
                                    'meta_key' => 'post_views_count',
                                    'orderby' => 'meta_value_num',
                                    'posts_per_page'=>3
                                    ) );
                                if($popularpost->have_posts() ) : while ( $popularpost->have_posts() ) : $popularpost->the_post();?>

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
                                
                                <?php endwhile;endif;?>
                                <?php wp_reset_query();?>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">

                                <?php $the_query = new WP_Query( array(
                                    'posts_per_page'=>3,
                                    'numberposts' => 3,
                                    'offset' => 0,
                                    'category' => 0,
                                    'orderby' => 'post_date',
                                    'order' => 'DESC',
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'suppress_filters' => true) ); ?>                       
                                <?php if($the_query->have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

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
                                
                                <?php endwhile;endif;?>
                                <?php wp_reset_query();?>

                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <?php wp_tag_cloud( array(
                                'smallest' => 8, // size of least used tag
                                'largest'  => 22, // size of most used tag
                                'unit'     => 'px', // unit for sizing the tags
                                'number'   => 45, // displays at most 45 tags
                                'orderby'  => 'name', // order tags alphabetically
                                'order'    => 'ASC', // order tags by ascending order
                                'taxonomy' => 'post_tag' // you can even make tags for custom taxonomies
                                ) ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>