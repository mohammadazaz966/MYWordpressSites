<div class="col-4 p-0">
                <div class="sidebar-wrapper" id="sidebar-wrapper">
                    <div class="sidebar-widget-1">
                        <div class="heading-block" >
                            <h4 class="title">Social Sites</h4>
                        </div>
                        <div class="sidebar-social-sites">
                            <div class="col-12 p-0">
                                <ul class="social-sites">
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
                    <div class="sidebar-tabs">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Recent</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#popular"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Popular</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#tags"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Tags</a>
                            </div>
                        </nav>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="recent" role="tabpanel"
                                    aria-labelledby="home-tab">
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
                                                <div class="card featured-blog-4">
                                                    <div class="row no-gutters">
                                                        <div class="col-sm-5">
                                                            <?php if(has_post_thumbnail()):?>
                                                            <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                                            <?php else: ?>
                                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                            <?php endif;?>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="card-body">
                                                                <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(6); ?></a></h1>
                                                                <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                                <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile;endif;?>
                                            <?php wp_reset_query();?>
                                </div>
                                <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="popular-post-sidebar">
                                        <ul>
                                            <?php $popularpost = new WP_Query( array(
                                            'meta_key' => 'post_views_count',
                                            'orderby' => 'meta_value_num',
                                            'posts_per_page'=>3
                                            ) );
                                            if($popularpost->have_posts() ) : while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
                                            <li>
                                            <div class="card featured-blog-4">
                                                    <div class="row no-gutters">
                                                        <div class="col-sm-5">
                                                            <?php if(has_post_thumbnail()):?>
                                                            <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                                            <?php else: ?>
                                                            <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                            <?php endif;?>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="card-body">
                                                                <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(6); ?></a></h1>
                                                                <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                                <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            <?php endwhile;endif;?>
                                            <?php wp_reset_query();?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="tags-sidebar">
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
                    <div class="sidebar-archive">
                        <div class="heading-block" >
                            <h4 class="title">Archive</h4>
                        </div>
                        <ul class="category-list-sidebar">
                            <?php wp_get_archives(array('type'=>'monthly','limit'=>10,'order'=>'desc'));?>
                        </ul>
                    </div>
                    <div class="sidebar-ad">
                        <div class="heading-block" >
                            <h4 class="title">Ad Section</h4>
                        </div>
                        <div class="ad-heading">
                            <h1 class="title">RESPONSIVE AD SECTION</h1>
                        </div>
                    </div>
                    <div class="sidebar-category">
                        <div class="heading-block" >
                            <h4 class="title">Category</h4>
                        </div>
                        <ul class="category-list-sidebar">
                                <?php 
                                    $args=array(
                                            'taxonomy'   => 'category',
                                            'orderby'    => 'name',
                                            'hide_empty' => 1, // change to 1 to hide categores not having a single post);
                                                );
                                    $categories=get_categories($args);
                                    foreach($categories as $category){
                                    echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a><span>'.$category->category_count.'</span></li>';
                                    }
                                ?>
                        </ul>
                    </div>
                    <div class="sidebar-blog">
                        <div class="heading-block" >
                            <h4 class="title"><?php echo get_theme_mod('sidebarblogpost-1'); ?></h4>
                        </div>
                        <ul>
                                    <?php global $post;?>

                                    <?php $the_query=array('post_type'=>'post','order'=>'desc','category_name' => get_theme_mod('sidebarblogpost-1'),'posts_per_page'=>4);?>

                                    <?php $posts = get_posts($the_query);?>

                                    <?php foreach ($posts as $post):setup_postdata($posts)?>
                                    <li>
                                        <div class="card featured-blog-4">
                                            <div class="row no-gutters">
                                                <div class="col-sm-5">
                                                    <?php if(has_post_thumbnail()):?>
                                                    <?php the_post_thumbnail('main-blog-1',array('class'=>'card-img')); ?>
                                                    <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri();  ?>/vendor/img/Image-Layout-2.png"  alt="Card image cap">
                                                    <?php endif;?>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="card-body">
                                                        <h1><a href="<?php the_permalink(); ?>"><?php echo set_title_length(8); ?></a></h1>
                                                        <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                        <span><i class="fa fa-calendar-alt"></i><?php the_time('F j, Y');?></span>
                                                    </div>
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