<?php
function loadfiles(){
  wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri().'/css/bootstrap-rtl.min.css', false );
  wp_enqueue_style( 'all', get_template_directory_uri().'/css/all.css', false );
  wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/css/owl.carousel.min.css', false );
  wp_enqueue_style( 'owl.theme', get_template_directory_uri().'/css/owl.theme.default.min.css', false );
  wp_enqueue_style( 'jquery.sidr', get_template_directory_uri().'/css/jquery.sidr.bare.css', false );
  wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', false );
  wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css', false );

  wp_enqueue_script( 'popper.min', get_template_directory_uri().'/js/popper.min.js',array('jquery'), '1.0', 'false' );
  wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'), '1.0', 'false' );
  wp_enqueue_script( 'all', get_template_directory_uri().'/js/all.js',array(), '1.0', 'false' );
  wp_enqueue_script( 'owl.carousel', get_template_directory_uri().'/js/owl.carousel.min.js',array(), '1.0', 'false' );
  wp_enqueue_script( 'jquery.sidr', get_template_directory_uri().'/js/jquery.sidr.min.js',array(), '1.0', 'false' );
  wp_enqueue_script( 'jquery-1.12.4.min', get_template_directory_uri().'js/jquery-1.12.4.min.js',array(), '1.0', 'false' );

}
add_action( 'wp_enqueue_scripts','loadfiles');

function configmenu() {
  register_nav_menus(
    array(
      'topsearch-menu' => __( 'منوی بالای سرچ' ),
      'main-menu' => __( 'منوی اصلی' ),
      'mobile-menu' => __( 'منوی موبایل' ),
      'footer-menu' => __( 'منوی فوتر' )
    )
  );
}
add_action( 'init', 'configmenu' );







function widgetregister() {

  register_sidebar( array(
    'name'          => 'ستون راست فیلتر',
    'id'            => 'filter',
    'before_widget' => '  <div class="sidebox">',
    'after_widget'  => '  </section>
        </div>',
    'before_title'  => '  <header>
        <h4>',
    'after_title'   => '</h4>
  </header>
  <section>',
  ) );


  register_sidebar( array(
    'name'          => 'ستون اول فوتر',
    'id'            => 'footerone',
    'before_widget' => '  <div class="footbox">',
    'after_widget'  => '  </section>
        </div>',
    'before_title'  => '  <header>
        <h4>',
    'after_title'   => '</h4>
  </header>
  <section>',
  ) );


  register_sidebar( array(
    'name'          => 'ستون دوم فوتر',
    'id'            => 'footertwo',
    'before_widget' => '  <div class="footbox">',
    'after_widget'  => '  </section>
        </div>',
    'before_title'  => '  <header>
        <h4>',
    'after_title'   => '</h4>
  </header>
  <section>',
  ) );

  register_sidebar( array(
    'name'          => 'ستون سوم فوتر',
    'id'            => 'footerthree',
    'before_widget' => '  <div class="footbox">',
    'after_widget'  => '  </section>
        </div>',
    'before_title'  => '  <header>
        <h4>',
    'after_title'   => '</h4>
  </header>
  <section>',
  ) );

}
add_action( 'widgets_init', 'widgetregister' );



add_theme_support( 'post-thumbnails' );
add_image_size( 'articlethumb',150, 150, true );
//breadcrumb
function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(' > ');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    //add_theme_support( 'wc-product-gallery-slider' );
}
?>
<?php
    function advanced_comment($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment; ?>
       <div class="singlecntentt lcomments">
       <?php echo get_avatar( $comment, 75 ); ?>
         <strong><?php echo get_comment_author_link(); ?> در <?php printf(__('%1$s'), get_comment_date('j F Y در g:i a'), get_comment_time()) ?> گفته: </strong>
         <p>  <?php comment_text(); ?></p>   <?php if ($comment->comment_approved == '0') : ?>
              <p>
                        <em>دیدگاه شما منتظر تایید مدیریت است.</em><br />
                      </p>
                    <?php endif; ?>
   </a>
   <?php comment_reply_link( array_merge($args, array(
       'reply_text' => __('<i class="fa fa-reply" aria-hidden="true"></i><span>پاسخ</span>', 'textdomain'),
       'depth'      => $depth,
       'max_depth'  => $args['max_depth']
       )
   )); ?>
         </div>
<?php } ?>
