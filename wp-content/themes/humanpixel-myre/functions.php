<?php
// Add custom Theme Functions here
function my_load_scripts($hook) {
 
    wp_register_style( 'my_css',    get_stylesheet_directory_uri(). '/css/custom_style.css');
    wp_enqueue_style ( 'my_css' );
    wp_register_style( 'my_css1',    get_stylesheet_directory_uri(). '/css/custom_style1.css');
    wp_enqueue_style ( 'my_css1' );
 
}
add_action('wp_enqueue_scripts', 'my_load_scripts');
add_role( 'siteuser', 'Site user', get_role( 'subscriber' )->capabilities );


add_shortcode('showform','showform_conditionbase');
function showform_conditionbase() 
{
    ob_start();
    // if(!is_user_logged_in())
    // {
    //     $formcode = get_field("if_not_logged_in_form_code",get_the_ID());
    //    echo do_shortcode($formcode);
    // }
    // else if(is_user_logged_in())
    // {
        
    //     $user = wp_get_current_user();
    //     if ( in_array( 'subscriber', (array) $user->roles ) ) 
    //     {
    //         $formcode = get_field("if_logged_in_form_code",get_the_ID());
    //         echo do_shortcode($formcode);
    //     }
    //     else
    //     {
    //         echo get_field("coviue_script",get_the_ID());
    //     }
    // }
    echo get_field("coviue_script",get_the_ID());
    
    $content = ob_get_clean();
    return $content;
}
function new_excerpt_more($more) {
	global $post;
    return '<a class="readmore" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );
add_shortcode('showlogin','showlogin');

function showlogin()
{
    if(!is_user_logged_in()) 
    {
        echo '<div class="header-button"><a class="button secondary" href="'.site_url("log-in").'">Login</a></div>';
    }
    else
    {
        echo '<div class="header-button"><a class="button secondary" href="'.site_url("edit-profile").'">Profile</a></div>';
    }
}
function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) ) {
            // redirect them to the default place
            return $redirect_to;
        } else {
            return home_url();
        }
    } else {
        return $redirect_to;
    }
}
 
add_filter( 'login_redirect', 'my_login_redirect', 99, 3 );