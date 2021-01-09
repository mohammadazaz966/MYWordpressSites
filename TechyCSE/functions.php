<?php

/* Add Menu in functions.php*/
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );
register_nav_menus( [ 'footer' => __( 'Footer Menu' ) ] );

/* Adding Featured Image Options */
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails',array('post','page','slider_feature') );
	set_post_thumbnail_size(720,320,true);
}
if(function_exists('add_image_size')){
	add_image_size('featured',800,528,true);
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme');

/* Adding Excerpt Length */
function set_excerpt_length(){
    return 25;
}

add_filter('excerpt_length','set_excerpt_length');

function set_excerpt_length_blog_post($length){
    return wp_trim_words(get_the_excerpt(),$length);
}

function set_author_description($length){
    return wp_trim_words(get_the_author_meta('description'),$length);
}

function set_title_length($length){
    return wp_trim_words(get_the_title(),$length);
}


function add_scripts(){

	/* Bootstrap core CSS */
	wp_enqueue_style('bootstrap.min.css', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css', 'all');
	wp_enqueue_style('fontawesome.css', get_template_directory_uri(). '/vendor/fontawesome/css/fontawesome.css',  'all');
	wp_enqueue_style('brands.css', get_template_directory_uri(). '/vendor/fontawesome/css/brands.css',  'all');
	wp_enqueue_style('solid.css', get_template_directory_uri(). '/vendor/fontawesome/css/solid.css',  'all');
	wp_enqueue_style('bootstrap.min.css', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css', 'all');

	/* Custom styles for this template CSS */
	wp_enqueue_style('style.css', get_template_directory_uri(). '/style.css', 'all');
	wp_enqueue_style('responsive.css', get_template_directory_uri(). '/responsive.css', 'all');
	wp_enqueue_style('comments-style.css', get_template_directory_uri(). '/comments-style.css', 'all');

	/* Splide core CSS */
	wp_enqueue_style('splide.min.css', get_template_directory_uri(). '/vendor/jcarousel/splide.min.css',  'all');

	/* JQuery core CSS */
	wp_enqueue_style('jquery-ui.css', get_template_directory_uri(). '/vendor/jquery/jquery-ui.css',  'all');

	/* Prism core CSS */
	wp_enqueue_style('prism-solarized-light.css', get_template_directory_uri(). '/vendor/prismjs/prism-solarized-light.css',  'all');
	
	/* Simple Pagination core CSS */
	wp_enqueue_style('simplePagination.css', get_template_directory_uri(). '/vendor/simplepagination/css/simplePagination.css',  'all');

    /* Bootstrap core JavaScript */
	wp_enqueue_script('main.js', get_template_directory_uri(). '/js/main.js', array('jquery'),1.1,true);
	wp_enqueue_script('backtotop.js', get_template_directory_uri(). '/js/backtotop.js', array('jquery'),1.1,true);
	wp_enqueue_script('main-slider.js', get_template_directory_uri(). '/js/main-slider.js', array('jquery'),1.1,true);
	wp_enqueue_script('mypagination.js', get_template_directory_uri(). '/js/mypagination.js', array('jquery'),1.1,true);

	/* JQuery core JavaScript */
	wp_enqueue_script('jquery.min.js', get_template_directory_uri(). '/vendor/jquery/jquery.min.js', array('jquery'),1.1,true);
	wp_enqueue_script('validate.js', get_template_directory_uri(). '/vendor/jquery/validate.js', array('jquery'),1.1,true);
	
	/* Splide core JavaScript */
	wp_enqueue_script('splide.js', get_template_directory_uri(). '/vendor/jcarousel/splide.js', array('jquery'),1.1,true);
    
	/* Bootstrap core JavaScript */
    wp_enqueue_script('bootstrap.bundle.min.js', get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'),1.1,true);
    
	/* JQuery core JavaScript */
	wp_enqueue_script('jquery.easing.min.js', get_template_directory_uri(). '/vendor/jquery.easing/jquery.easing.min.js', array('jquery'),1.1,true);

	/* JQuery UI core JavaScript */
	wp_enqueue_script('jquery-ui.js', get_template_directory_uri(). '/vendor/jquery/jquery-ui.js', array('jquery'),1.1,true);
	
	/* Prism core JavaScript */
	wp_enqueue_script('prism-solarized-light.js', get_template_directory_uri(). '/vendor/prismjs/prism-solarized-light.js', array('jquery'),1.1,true);
	
	/* Simple Pagination core javascript */
	wp_enqueue_script('simplePagination.js', get_template_directory_uri(). '/vendor/simplepagination/js/simplePagination.js',  array('jquery'),1.1,true);

}

add_action('wp_enqueue_scripts','add_scripts');

/*
 * Change the comment reply link to use 'Reply to &lt;Author First Name>'
 */
function add_comment_author_to_reply_link($link, $args, $comment){

    $comment = get_comment( $comment );

    // If no comment author is blank, use 'Anonymous'
    if ( empty($comment->comment_author) ) {
        if (!empty($comment->user_id)){
            $user=get_userdata($comment->user_id);
            $author=$user->user_login;
        } else {
            $author = __('Anonymous');
        }
    } else {
        $author = $comment->comment_author;
    }

    // If the user provided more than a first name, use only first name
    if(strpos($author, ' ')){
        $author = substr($author, 0, strpos($author, ' '));
    }

    // Replace Reply Link with "Reply to &lt;Author First Name>"
    $reply_link_text = $args['reply_text'];
    $link = str_replace($reply_link_text, 'Reply to ' . $author, $link);

    return $link;
}
add_filter('comment_reply_link', 'add_comment_author_to_reply_link', 10, 3);


/**
* Add User Role to Comments.
*/
if ( ! class_exists( 'Comment_Author_Role_Label' ) ) :
	class Comment_Author_Role_Label {
	public function __construct() {
	add_filter( 'get_comment_author', array( $this, 'get_comment_author_role' ), 10, 3 );
	add_filter( 'get_comment_author_link', array( $this, 'comment_author_role' ) );
	}
	function get_comment_author_role($author, $comment_id, $comment) {
	$authoremail = get_comment_author_email( $comment);
	if (email_exists($authoremail)) {
	$commet_user_role = get_user_by( 'email', $authoremail );
	$comment_user_role = $commet_user_role->roles[0];
	$this->comment_user_role = ' <span class="comment-author-label comment-author-label-'
	.$comment_user_role.'">' . ucfirst($comment_user_role) . '</span>';
	} else {
	$this->comment_user_role = '';
	}
	return $author;
	}            
	function comment_author_role($author) {
	return $author .= $this->comment_user_role;
	}
	}
	new Comment_Author_Role_Label;
	endif;

/**
* Add Comments.
*/

function mytheme_comment($comment, $args, $depth) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}?>
	<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
	if ( 'div' != $args['style'] ) { ?>

<div id="div-comment-<?php comment_ID() ?>" class="panel panel-primary"><?php
} ?>
  <div class="panel-heading">
  	<?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'],'','alt',array('class'=>'card-img-top')); //echo get_avatar( $comment, $args['avatar_size'] ,'','alt',array('class'=>'mr-3'));
			//echo '<img class="card-img-top" src="'.get_template_directory_uri().'/vendor/img/Business/pexels-img1.jpg"
			//alt="Card image cap">';
		} ?>
		<?php printf( __( '<h5>%s</h5>' ), get_comment_author_link() ); ?>
		<span class="comment-date"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
					/* translators: 1: date, 2: time */
		printf( 
			__('%1$s at %2$s'), 
				get_comment_date(),  
				get_comment_time() 
			); ?></a></span>
	
  </div>
  <div class="panel-body">
		<?php comment_text(array('class'=>'card-text')); ?>
  </div>
  <div class="panel-footer">
  	<?php edit_comment_link( __( 'Edit' ), '  ', '' ); ?>
		<?php 
			comment_reply_link( 
				array_merge( 
					$args, 
					array( 
						'add_below' => $add_below, 
						'depth'     => $depth, 
						'max_depth' => $args['max_depth'] 
						) 
					) 
			); ?>
  </div>


	<?php 
		if ( $comment->comment_approved == '0' ) { ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
		} ?>
 
	<?php 
	if ( 'div' != $args['style'] ) : ?>
		</div><?php 
	endif;
}



?>