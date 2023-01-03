<?php


if(!function_exists('idx_set_shortcodes_function_frontend')){
    function idx_set_shortcodes_function_frontend(){
        wp_enqueue_style('idx_set_shortcodes_frontend_css',IDXCAROUSELSHORTCODE_PLUGIN_URL .'assets/main.css',[],IDXCAROUSELSHORTCODE_PLUGIN_VERSION,'all');
        wp_enqueue_script('idx_set_shortcodes_frontend_js',IDXCAROUSELSHORTCODE_PLUGIN_URL .'assets/main.js',['jquery'],IDXCAROUSELSHORTCODE_PLUGIN_VERSION,true);
    }
    add_action('wp_enqueue_scripts', 'idx_set_shortcodes_function_frontend',10000 );
}

require_once IDXCAROUSELSHORTCODE_PLUGIN_DIR .'/inc/shortcodes.php';
