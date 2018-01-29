<?php
/*
*Plugin Name: Progress Form
*Description: This is multi-step prgressive form plugin.
*Author: Inderjeet Singh
*Version:1.01
*/
?>
<?php
	add_shortcode('prgress-form','progressForm');
	function progressForm(){
		include('view/form.php');
	}
	function my_theme_scripts() {
		//wp_enqueue_script( 'my-form-script', plugin_dir_url( __FILE__ ). '/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
		//wp_enqueue_style( 'my-form-style', plugin_dir_url( __FILE__ ). '/css/bootstrap.min.css');
		wp_enqueue_style( 'my-form-style1', plugin_dir_url( __FILE__ ). '/css/font-awesome.css');
		wp_enqueue_style( 'my-form-style2', plugin_dir_url( __FILE__ ). '/css/custom-form.css');
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_scripts');
	
	add_action('admin_menu', 'pform_menu');
	function pform_menu(){		
		add_menu_page('Progress Form','Progress Form','manage_options','progress-form','getSettings');
	}
	function getSettings(){
		include('admin/setting.php');
	}
	
?>