<div class="col-4">
            <div class="header-blogpost5-title">
                <h3>Follow Our Sites</h3>
            </div>
            <div class="side-social-sites">
                <ul>
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
            <div class="header-blogpost5-title">
                <h3>AD Section</h3>
                <?php echo get_theme_mod('side-banner-ad'); ?>
            </div>
            <div class="header-blogpost5-title">
                <h3>Category</h3>
            </div>
            <div class="category-list-sidebar">
                <ul>
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
            <div class="header-blogpost5-title">
                <h3>Archive</h3>
            </div>
            <div class="category-list-sidebar">
                <?php wp_get_archives(array('type'=>'monthly','limit'=>10,'order'=>'desc'));?>
            </div>
            <div class="header-blogpost5-title">
                <h3>Tags</h3>
            </div>
            <div class="tags-list-sidebar">
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