<?php 
class INHEALTH_Master {
    protected $charger;
    protected $theme_name;
    public function __construct() {
        $this->theme_name = 'INHEALTH';
        $this->load_dependencies();
        $this->load_instances();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }
    private function load_dependencies() {

        require_once INHEALTH_DIR_PATH . 'includes/class-inhealth-charger.php';        
        require_once INHEALTH_DIR_PATH . 'includes/class-inhealth-build-menupage.php';
        require_once INHEALTH_DIR_PATH . 'includes/class-inhealth-support.php';
        require_once INHEALTH_DIR_PATH . 'admin/class-inhealth-admin.php';
        require_once INHEALTH_DIR_PATH . 'public/class-inhealth-public.php';
       
    }
    private function load_instances() {
        $this->charger = new INHEALTH_Charger;
        $this->inhealth_admin  = new INHEALTH_Admin( $this->get_theme_name() );
        $this->inhealth_public = new INHEALTH_Public( $this->get_theme_name() );
        $this->inhealth_support = new INHEALTH_Theme_Support;
    }
    private function define_admin_hooks() {
        $this->charger->add_action( 'admin_enqueue_scripts', $this->inhealth_admin, 'enqueue_styles' );
        $this->charger->add_action( 'admin_enqueue_scripts', $this->inhealth_admin, 'enqueue_scripts' );
        $this->charger->add_action( 'wp_enqueue_scripts', $this->inhealth_support, 'remove_gutemberg' );
        $this->charger->add_action( 'init', $this->inhealth_support, 'add_support' );
        $this->charger->add_action( 'init', $this->inhealth_support, 'remove_elements_wordpress' );
    }
    private function define_public_hooks() {
        $this->charger->add_action( 'wp_enqueue_scripts', $this->inhealth_public, 'enqueue_styles' );
        $this->charger->add_action( 'wp_footer', $this->inhealth_public, 'enqueue_scripts' );
    }
    public function run() {
        $this->charger->run();
    }
    public function get_theme_name() {
        return $this->theme_name;
    }
    public function get_charger() {
        return $this->charger;
    }
}