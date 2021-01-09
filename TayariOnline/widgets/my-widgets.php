<?php 

function Print_Table_widgets_init() {

	register_sidebar( array(
		'name'          => 'Print Table Widgets',
		'id'            => 'print_table_widgets',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'Print_Table_widgets_init' );


?>