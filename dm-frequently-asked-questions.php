<?php

/*
Plugin Name: Frequently Asked Questions
Plugin URI: http://www.designmissoula.com/
Description: Used by Millions to make WordPress better.
Author: Bradford Knowlton
Version: 2.1.1
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

	$labels = array(
		'name' => _x( 'Frequently Asked Categories', 'frequently_asked_categories' ),
		'singular_name' => _x( 'Frequently Asked Category', 'frequently_asked_categories' ),
		'search_items' => _x( 'Search Frequently Asked Categories', 'frequently_asked_categories' ),
		'popular_items' => _x( 'Popular Frequently Asked Categories', 'frequently_asked_categories' ),
		'all_items' => _x( 'All Frequently Asked Categories', 'frequently_asked_categories' ),
		'parent_item' => _x( 'Parent Frequently Asked Category', 'frequently_asked_categories' ),
		'parent_item_colon' => _x( 'Parent Frequently Asked Category:', 'frequently_asked_categories' ),
		'edit_item' => _x( 'Edit Frequently Asked Category', 'frequently_asked_categories' ),
		'update_item' => _x( 'Update Frequently Asked Category', 'frequently_asked_categories' ),
		'add_new_item' => _x( 'Add New Frequently Asked Category', 'frequently_asked_categories' ),
		'new_item_name' => _x( 'New Frequently Asked Category', 'frequently_asked_categories' ),
		'separate_items_with_commas' => _x( 'Separate frequently asked categories with commas', 'frequently_asked_categories' ),
		'add_or_remove_items' => _x( 'Add or remove frequently asked categories', 'frequently_asked_categories' ),
		'choose_from_most_used' => _x( 'Choose from the most used frequently asked categories', 'frequently_asked_categories' ),
		'menu_name' => _x( 'Frequently Asked Categories', 'frequently_asked_categories' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => false,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => true,
		'hierarchical' => true,
		'rewrite' => false,
		'query_var' => true
	);
	register_taxonomy( 'frequently_asked_categories', array('frequently_asked_question'), $args );
} 