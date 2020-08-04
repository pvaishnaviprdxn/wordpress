<?php 
    //stylesheet function
    function addStyles() {
        wp_enqueue_style('style', get_stylesheet_uri(),array(),1.0);
    }
    add_action('wp_enqueue_scripts','addStyles');
    //editor change
    add_filter('use_block_editor_for_post', '__return_false');
    //adding menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'social' => __('Social Links Menu'),
        'footer' => __('Footer Menu')
    ));
    add_theme_support( 'post-thumbnails' );
    //custom post
    //Creating a function to create our CPT
    function custom_post_type() {
        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Products', 'Post Type General Name', 'newtheme' ),
            'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'newtheme' ),
            'menu_name'           => __( 'Products', 'newtheme' ),
            'parent_item_colon'   => __( 'Parent Product', 'newtheme' ),
            'all_items'           => __( 'Products', 'newtheme' ),
            'view_item'           => __( 'View Product', 'newtheme' ),
            'add_new_item'        => __( 'Add New Product', 'newtheme' ),
            'add_new'             => __( 'Add New Products ', 'newtheme' ),
            'edit_item'           => __( 'Edit Product', 'newtheme' ),
            'update_item'         => __( 'Update Product', 'newtheme' ),
            'search_items'        => __( 'Search Product', 'newtheme' ),
            'not_found'           => __( 'Not Found', 'newtheme' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'newtheme' ),

        );
        $args = array(
            'label' => __('Products', 'newtheme'),
            'description' => __('Product Details', 'newtheme' ),
            'labels' => $labels,
            // Features this CPT supports in Post Editor
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array( 'variety' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-info',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
    // Registering your Custom Post Type
     register_post_type( 'products', $args );
    }   
    // Hooking up function to theme setup
    add_action( 'init', 'custom_post_type', 0 );
    
    function add_search_form($items, $args) {
        if( $args->theme_location == 'primary' ){
        $items .= '<li class="menu-item">'
                . '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">'
                . '<label>'
                . '<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search …', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />'
                . '</label>'
                . '<input type="submit" class="search-submit" value="'. esc_attr_x('Search', 'submit button') .'" />'
                . '</form>'
                . '</li>';
        }
      return $items;
    }

    function change_nav() {
        $args = array(
            'theme_location' => 'Social Nav Links',
            'container' => 'nav',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        );
        return $args;
    }

    function clean_custom_menus() {
        $menu_name = 'primary'; // specifing custom menu slug
        
        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
    
            $menu_list = '<nav>' ."\n";
            $menu_list .= "\t\t\t\t". '<ul>' ."\n";
            foreach ((array) $menu_items as $key => $menu_item) {
                $title = $menu_item->title;
                $url = $menu_item->url;
                $menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
            }
            $menu_list .= "\t\t\t\t". '</ul>' ."\n";
            $menu_list .= "\t\t\t". '</nav>' ."\n";
        } 
        echo $menu_list;
    }

    //Creating a function to create our CPT
    function custom_films_post() {
        $labelsn = array(
            'name'                => _x( 'Films', 'Post Type General Name', 'newtheme' ),
            'singular_name'       => _x( 'Film', 'Post Type Singular Name', 'newtheme' ),
            'menu_name'           => __( 'Films', 'newtheme' ),
            'parent_item_colon'   => __( 'Parent Films', 'newtheme' ),
            'all_items'           => __( 'Films', 'newtheme' ),
            'view_item'           => __( 'View Film', 'newtheme' ),
            'add_new_item'        => __( 'Add New Films', 'newtheme' ),
            'add_new'             => __( 'Add New Films ', 'newtheme' ),
            'edit_item'           => __( 'Edit Film', 'newtheme' ),
            'update_item'         => __( 'Update Film', 'newtheme' ),
            'search_items'        => __( 'Search Film', 'newtheme' ),
            'not_found'           => __( 'Not Found', 'newtheme' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'newtheme' ),
        );
        $args = array(
            'label' => __('Films', 'newtheme'),
            'description' => __('Films Details', 'newtheme' ),
            'labels' => $labelsn,
            // Features this CPT supports in Post Editor
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-info',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type( 'films', $args );
    }
    add_action( 'init', 'custom_films_post',1);
    
    if( function_exists('acf_add_options_page') ) {
        $parent = acf_add_options_page(
            array(
                'page_title'  => __('Theme General Settings'),
                'menu_title'  => __('Options'),
                'redirect'    => false,
            )
        );
        $childA = acf_add_options_sub_page(array(
            'page_title'  => __('Header Settings'),
            'menu_title'  => __('Header'),
            'parent_slug' => $parent['menu_slug'],
        ));

        $childB = acf_add_options_sub_page(array(
            'page_title'  => __('Footer Settings'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
    //Social links icon
    add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
    function my_wp_nav_menu_objects( $items, $args ) {
        foreach( $items as &$item ) {
            $icon = get_field('icon', $item);
            // append icon
            if( $icon ) {	
                $item->title .= ' <i class="fa fa-'.$icon.'"></i>';	
            }
        }
        return $items;
    }
    add_theme_support( 'post-thumbnails' );
    
    //Creating a function to create our CPT
    function resources_type() {
        $labelsn = array(
            'name'                => _x( 'Resources', 'Post Type General Name', 'newtheme' ),
            'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'newtheme' ),
            'menu_name'           => __( 'Resources', 'newtheme' ),
            'parent_item_colon'   => __( 'Parent Resources', 'newtheme' ),
            'all_items'           => __( 'Resources', 'newtheme' ),
            'view_item'           => __( 'View Resource', 'newtheme' ),
            'add_new_item'        => __( 'Add New Resources', 'newtheme' ),
            'add_new'             => __( 'Add New Resources', 'newtheme' ),
            'edit_item'           => __( 'Edit Resource', 'newtheme' ),
            'update_item'         => __( 'Update Resource', 'newtheme' ),
            'search_items'        => __( 'Search Resource', 'newtheme' ),
            'not_found'           => __( 'Not Found', 'newtheme' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'newtheme' ),
        );
        $args = array(
            'label' => __('Resources', 'newtheme'),
            'description' => __('Resources Details', 'newtheme'),
            'labels' => $labelsn,
            // Features this CPT supports in Post Editor
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array('category'),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-info',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type('Resources', $args );
    }
    add_action('init','resources_type',1);
    function categories_script() {
        wp_enqueue_script('ajax', get_template_directory_uri().'/assets/script.js',array('jquery'),NULL,true); 
        wp_localize_script( 'ajax', 'wpAjax', array( 'ajaxUrl' => admin_url('admin-ajax.php')));
    }
    add_action('wp_enqueue_scripts', 'categories_script');
    function filterAjax() {
        $category = $_POST['category'];
        $args_post = array(
            'post_type' => 'resources',
            'posts_per_page' => '-1',
        );
        if(isset($category)) {
            $args_post['category__in'] = array($category);
        }

        $query = new WP_Query($args_post);
        if ($query->have_posts()) {
            while ($query->have_posts()) { 
                $query->the_post(); ?>
                <div class="wrapper">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>  
            <?php }
        } 
        wp_reset_postdata();
        die();
    }
    add_action('wp_ajax_nopriv_filter','filterAjax');
    add_action('wp_ajax_filter','filterAjax');
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*function c_menu($items,$args) {
        if( $args->theme_location == 'primary' ){
            $args->container = false;
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['primary']; // Get the *primary* menu ID
            $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
            foreach ( $primaryNav as $navItem ) {
                $items .= '<nav><ul><li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li></ul></nav>'; 
            } 
            return $items;
        }
    }
    add_filter('wp_nav_menu_items','c_menu',10,2);*/

    
 ?>