<?php 
class INHEALTH_Public {
    private $theme_name;

    public function __construct( $theme_name ) {
        $this->theme_name = $theme_name;
    }

    public function enqueue_styles() {
        wp_enqueue_style( 'inhealth_public_css', INHEALTH_DIR_URI . 'public/css/inhealth_public.css', array(), filemtime(INHEALTH_DIR_PATH . 'public/css/inhealth_public.css'), 'all' );
    }
    
    public function enqueue_scripts() {
        
    }
}