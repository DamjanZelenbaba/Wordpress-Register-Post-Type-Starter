<?php
defined( 'ABSPATH' ) || exit;

/**
 * Register post type starter.
 * 
 * @since 1.0.0
 * 
 * @author Author Name
 */

add_action( 'init', 'xyz_register_post_type_starter' );

function xyz_register_post_type_starter() {
  
  $labels = [
    'name'                     => _x( 'Starters', 'starter type general name', 'textdomain' ),
    'singular_name'            => _x( 'Starter', 'starter type singular name', 'textdomain' ),
    'add_new'                  => _x( 'Add New', 'starter', 'textdomain' ),
    'add_new_item'             => __( 'Add New Starter', 'textdomain' ),
    'edit_item'                => __( 'Edit Starter', 'textdomain' ),
    'new_item'                 => __( 'New Starter', 'textdomain' ),
    'view_item'                => __( 'View Starter', 'textdomain' ),
    'view_items'               => __( 'View Starters', 'textdomain' ),
    'search_items'             => __( 'Search Starters', 'textdomain' ),
    'not_found'                => __( 'No starters found.', 'textdomain' ),
    'not_found_in_trash'       => __( 'No starters found in Trash.', 'textdomain' ),
    'all_items'                => __( 'All Starters', 'textdomain' ),
    'archives'                 => __( 'Starter Archives', 'textdomain' ),
    'attributes'               => __( 'Starter Attributes', 'textdomain' ),
    'insert_into_item'         => __( 'Insert into starter', 'textdomain' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this starter', 'textdomain' ),
    'featured_image'           => _x( 'Featured image', 'starter', 'textdomain' ),
    'set_featured_image'       => _x( 'Set featured image', 'starter', 'textdomain' ),
    'remove_featured_image'    => _x( 'Remove featured image', 'starter', 'textdomain' ),
    'use_featured_image'       => _x( 'Use as featured image', 'starter', 'textdomain' ),
    'filter_items_list'        => __( 'Filter starters list', 'textdomain' ),
    'filter_by_date'           => __( 'Filter by date', 'textdomain' ),
    'items_list_navigation'    => __( 'Starters list navigation', 'textdomain' ),
    'items_list'               => __( 'Starters list', 'textdomain' ),
    'item_published'           => __( 'Starter published.', 'textdomain' ),
    'item_published_privately' => __( 'Starter published privately.', 'textdomain' ),
    'item_reverted_to_draft'   => __( 'Starter reverted to draft.', 'textdomain' ),
    'item_scheduled'           => __( 'Starter scheduled.', 'textdomain' ),
    'item_updated'             => __( 'Starter updated.', 'textdomain' ),
    'item_link'                => _x( 'Starter Link', 'navigation link block title', 'textdomain' ),
    'item_link_description'    => _x( 'A link to a starter.', 'navigation link block description', 'textdomain' )
  ];

  $args = [
    /**
     * An array of labels for this post type. If not set, post
     * labels are inherited for non-hierarchical types and page
     * labels for hierarchical ones. See get_post_type_labels()
     * for a full list of supported labels.
     * 
     * @type string[]
     */

    'labels'                => $labels,

    /**
     * A short descriptive summary of what the post type is.
     * 
     * Default empty.
     * 
     * @type string
     */

    'description'           => '',

    /**
     * Whether a post type is intended for use publicly either via
     * the admin interface or by front-end users. While the default
     * settings of $exclude_from_search, $publicly_queryable, $show_ui,
     * and $show_in_nav_menus are inherited from $public, each does not
     * rely on this relationship and controls a very specific intention.
     * 
     * Default false.
     * 
     * @type bool
     */

    'public'                => false,

    /**
     * Whether the post type is hierarchical (e.g. page).
     * 
     * Default false.
     * 
     * @type bool
     */

    'hierarchical'          => false,

    /**
     * Whether to exclude posts with this post type from front end search
     * results.
     * 
     * Default is the opposite value of $public.
     * 
     * @type bool
     */

    'exclude_from_search'   => null,

    /**
     * Whether queries can be performed on the front end for the post type
     * as part of parse_request().
     * 
     * Endpoints would include:
     * * ?post_type={post_type_key}
     * * ?{post_type_key}={single_post_slug}
     * * ?{post_type_query_var}={single_post_slug}
     * 
     * If not set, the default is inherited from $public.
     * 
     * @type bool
     */

    'publicly_queryable'    => null,

    /**
     * Whether to generate and allow a UI for managing this post type in the
     * admin.
     * 
     * Default is value of $public.
     * 
     * @type bool
     */

    'show_ui'               => null,

    /**
     * Where to show the post type in the admin menu. To work, $show_ui
     * must be true. If true, the post type is shown in its own top level
     * menu. If false, no menu is shown. If a string of an existing top
     * level menu ('tools.php' or 'edit.php?post_type=page', for example), the
     * post type will be placed as a sub-menu of that.
     * 
     * Default is value of $show_ui.
     * 
     * @type bool|string
     */

    'show_in_menu'          => null,

    /**
     * Makes this post type available for selection in navigation menus.
     * 
     * Default is value of $public.
     * 
     * @type bool
     */

    'show_in_nav_menus'     => null,

    /**
     * Makes this post type available via the admin bar.
     * 
     * Default is value of $show_in_menu.
     * 
     * @type bool
     */

    'show_in_admin_bar'     => null,

    /**
     * The position in the menu order the post type should appear. To work,
     * $show_in_menu must be true.
     * 
     * Default null (at the bottom).
     * 
     * @type int
     */

    'menu_position'         => null,

    /**
     * The URL to the icon to be used for this menu. Pass a base64-encoded
     * SVG using a data URI, which will be colored to match the color scheme
     * -- this should begin with 'data:image/svg+xml;base64,'. Pass the name
     * of a Dashicons helper class to use a font icon, e.g.
     * 'dashicons-chart-pie'. Pass 'none' to leave div.wp-menu-image empty
     * so an icon can be added via CSS.
     * 
     * Defaults to use the posts icon.
     * 
     * @type string
     */

    'menu_icon'             => null,

    /**
     * The string to use to build the read, edit, and delete capabilities.
     * May be passed as an array to allow for alternative plurals when using
     * this argument as a base to construct the capabilities, e.g.
     * array('story', 'stories').
     * 
     * Default 'post'.
     * 
     * @type string|array
     */

    'capability_type'       => 'post',

    /**
     * Array of capabilities for this post type. $capability_type is used
     * as a base to construct capabilities by default.
     * See get_post_type_capabilities().
     * 
     * @type string[]
     */

    'capabilities'          => [],

    /**
     * Whether to use the internal default meta capability handling.
     * 
     * Default false.
     * 
     * @type bool
     */

    'map_meta_cap'          => null,

    /**
     * Core feature(s) the post type supports. Serves as an alias for calling
     * add_post_type_support() directly. Core features include 'title',
     * 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt',
     * 'page-attributes', 'thumbnail', 'custom-fields', and 'post-formats'.
     * Additionally, the 'revisions' feature dictates whether the post type
     * will store revisions, and the 'comments' feature dictates whether the
     * comments count will show on the edit screen. A feature can also be
     * specified as an array of arguments to provide additional information
     * about supporting that feature.
     * Example: `array( 'my_feature', array( 'field' => 'value' ) )`.
     * 
     * Default is an array containing 'title' and 'editor'.
     * 
     * @type array
     */

    'supports'              => [],

    /**
     * Provide a callback function that sets up the meta boxes for the
     * edit form. Do remove_meta_box() and add_meta_box() calls in the
     * callback.
     * 
     * Default null.
     * 
     * @type callable
     */

    'register_meta_box_cb'  => null,

    /**
     * An array of taxonomy identifiers that will be registered for the
     * post type. Taxonomies can be registered later with register_taxonomy()
     * or register_taxonomy_for_object_type().
     * 
     * Default empty array.
     * 
     * @type string[]
     */

    'taxonomies'            => [],

    /**
     * Whether there should be post type archives, or if a string, the
     * archive slug to use. Will generate the proper rewrite rules if
     * $rewrite is enabled.
     * 
     * Default false.
     * 
     * @type bool|string
     */

    'has_archive'           => false,

    /**
     * Triggers the handling of rewrites for this post type. To prevent rewrite, set to false.
     * Defaults to true, using $post_type as slug. To specify rewrite rules, an array can be
     * passed with any of these keys:
     * 
     * @type string $slug       Customize the permastruct slug. Defaults to $post_type key.
     * @type bool   $with_front Whether the permastruct should be prepended with WP_Rewrite::$front.
     *                          Default true.
     * @type bool   $feeds      Whether the feed permastruct should be built for this post type.
     *                          Default is value of $has_archive.
     * @type bool   $pages      Whether the permastruct should provide for pagination. Default true.
     * @type int    $ep_mask    Endpoint mask to assign. If not specified and permalink_epmask is set,
     *                          inherits from $permalink_epmask. If not specified and permalink_epmask
     *                          is not set, defaults to EP_PERMALINK.
     * 
     * @type bool|array
     */

    'rewrite'               => true,

    /**
     * Sets the query_var key for this post type. Defaults to $post_type
     * key. If false, a post type cannot be loaded at
     * ?{query_var}={post_slug}. If specified as a string, the query
     * ?{query_var_string}={post_slug} will be valid.
     * 
     * @type string|bool
     */

    'query_var'             => true,

    /**
     * Whether to allow this post type to be exported.
     * 
     * Default true.
     * 
     * @type bool
     */

    'can_export'            => true,

    /**
     * Whether to delete posts of this type when deleting a user.
     * 
     * * If true, posts of this type belonging to the user will be moved
     * to Trash when the user is deleted.
     * 
     * * If false, posts of this type belonging to the user will *not*
     * be trashed or deleted.
     * 
     * * If not set (the default), posts are trashed if post type supports
     * the 'author' feature. Otherwise posts are not trashed or deleted.
     * 
     * Default null.
     * 
     * @type bool
     */

    'delete_with_user'      => null,

    /**
     * Whether to include the post type in the REST API. Set this to true
     * for the post type to be available in the block editor.
     * 
     * @type bool
     */

    'show_in_rest'          => false,

    /**
     * To change the base URL of REST API route.
     * 
     * Default is $post_type.
     * 
     * @type string
     */

    'rest_base'             => false,

    /**
     * To change the namespace URL of REST API route.
     * 
     * Default is wp/v2.
     * 
     * @type string
     */

    'rest_namespace'        => false,

    /**
     * REST API controller class name.
     * 
     * Default is 'WP_REST_Posts_Controller'.
     * 
     * @type string
     */

    'rest_controller_class' => false,

    /**
     * Array of blocks to use as the default initial state for an editor
     * session. Each item should be an array containing block name and
     * optional attributes.
     * 
     * Default empty array.
     * 
     * @type array
     */

    'template'              => [],

    /**
     * Whether the block template should be locked if $template is set.
     * 
     * * If set to 'all', the user is unable to insert new blocks,
     * move existing blocks and delete blocks.
     * 
     * * If set to 'insert', the user is able to move existing blocks
     * but is unable to insert new blocks and delete blocks.
     * 
     * Default false.
     * 
     * @type string|false
     */

    'template_lock'         => false

  ];

  register_post_type( 'starter', $args );

}
