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
        wp_enqueue_script( 'inhealt_public_js', INHEALTH_DIR_URI . 'public/js/public_inhealth.js', [], filemtime(INHEALTH_DIR_PATH . 'public/js/public_inhealth.js'), true );

        $inhealth_Public = [
            'url'   => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'inhealth_seg' ),
        ];
        wp_localize_script( 'inhealt_public_js', 'inhealth_Public', $inhealth_Public );
    }
}