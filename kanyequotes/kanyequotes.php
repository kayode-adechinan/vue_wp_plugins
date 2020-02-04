<?php
/*
Plugin Name: Kanye Quotes
Description: Random Kanye West quotes
Version: 1.0
*/

function handle_shortcode() {
    return '
    
    <div id="mount"></div>

    ';
}
add_shortcode('kanyeQuotes', 'handle_shortcode');


function enqueue_scripts(){
    global $post;
    if(has_shortcode($post->post_content, "kanyeQuotes")){
                 wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.6.11', [], '2.6.11');
                 wp_enqueue_script('kanye-quotes', plugin_dir_url( __FILE__ ) . 'kanye-quotes.js', [], '1.0', true);

    }           
 }
 add_action('wp_enqueue_scripts', 'enqueue_scripts');
