<?php

/*
Plugin Name: Frequently Asked Questions
Plugin URI: http://www.designmissoula.com/
Description: Used by Millions to make WordPress better.
Author: Bradford Knowlton
Version: 2.0.1
Author URI: http://bradknowlton.com/
GitHub Plugin URI: https://github.com/DesignMissoula/DM-frequently-asked-questions
GitHub Branch: master
*/


add_action( 'init', 'register_cpt_frequently_asked_question' );

function register_cpt_frequently_asked_question() {
	$labels = array(
		'name' => _x( 'Frequently Asked Questions', 'frequently_asked_question' ),
		'singular_name' => _x( 'Frequently Asked Question', 'frequently_asked_question' ),
		'add_new' => _x( 'Add New', 'frequently_asked_question' ),
		'add_new_item' => _x( 'Add New Frequently Asked Question', 'frequently_asked_question' ),
		'edit_item' => _x( 'Edit Frequently Asked Question', 'frequently_asked_question' ),
		'new_item' => _x( 'New Frequently Asked Question', 'frequently_asked_question' ),
		'view_item' => _x( 'View Frequently Asked Question', 'frequently_asked_question' ),
		'search_items' => _x( 'Search Frequently Asked Questions', 'frequently_asked_question' ),
		'not_found' => _x( 'No frequently asked questions found', 'frequently_asked_question' ),
		'not_found_in_trash' => _x( 'No frequently asked questions found in Trash', 'frequently_asked_question' ),
		'parent_item_colon' => _x( 'Parent Frequently Asked Question:', 'frequently_asked_question' ),
		'menu_name' => _x( 'Frequently Asked Questions', 'frequently_asked_question' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'revisions' ),
		'taxonomies' => array( 'frequently_asked_categories' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-format-quote',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);
	register_post_type( 'frequently_asked_question', $args );
} 