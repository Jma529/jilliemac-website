<?php

// Register Custom Post Type for projects

function jm_projects_cpt() {

	$labels = array(
		'name'                  => 'Projects',
		'singular_name'         => 'Project',
		'menu_name'             => 'Projects',
		'name_admin_bar'        => 'Project',
		'archives'              => 'Project archives',
		'attributes'            => 'Project attributes',
		'parent_item_colon'     => 'Parent project',
		'all_items'             => 'All projects',
		'add_new_item'          => 'Add new project',
		'add_new'               => 'Add new project',
		'new_item'              => 'New project',
		'edit_item'             => 'Edit project',
		'update_item'           => 'Update project',
		'view_item'             => 'View project',
		'view_items'            => 'View projects',
		'search_items'          => 'Search project',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into project',
		'uploaded_to_this_item' => 'Uploaded to this project',
		'items_list'            => 'Projects list',
		'items_list_navigation' => 'projects list navigation',
		'filter_items_list'     => 'Filter projects list',
  );
  
  $rewrite = array(
		'slug'                  		=> 'project', // The slug for single posts
		'with_front'            		=> true,
		'pages'                 		=> true,
		'feeds'                 		=> true,
  );
  
	$args = array(
		'label'                 => 'Project',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'projects',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'rewrite'               => $rewrite,
	);
	register_post_type( 'jm_projects_register', $args );

}
add_action( 'init', 'jm_projects_cpt', 0 );
