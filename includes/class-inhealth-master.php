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
        require_once INHEALTH_DIR_PATH . 'includes/class-inhealth-ajax-public.php';

        /* metaboxio */
        require_once INHEALTH_DIR_PATH . 'helpers/metaboxio/meta-box/meta-box.php';
        require_once INHEALTH_DIR_PATH . 'helpers/metaboxio/meta-box-group/meta-box-group.php';
        require_once INHEALTH_DIR_PATH . 'helpers/metaboxio/meta-box-conditional-logic/meta-box-conditional-logic.php';
        require_once INHEALTH_DIR_PATH . 'helpers/metaboxio/mb-term-meta/mb-term-meta.php';
        require_once INHEALTH_DIR_PATH . 'helpers/metaboxio/mb-settings-page/mb-settings-page.php';
        require_once INHEALTH_DIR_PATH . 'helpers/metaboxio/panel.php';
       
    }
    private function load_instances() {
        $this->charger          = new INHEALTH_Charger;
        $this->inhealth_admin   = new INHEALTH_Admin( $this->get_theme_name() );
        $this->inhealth_public  = new INHEALTH_Public( $this->get_theme_name() );
        $this->inhealth_support = new INHEALTH_Theme_Support;
        $this->inhealth_ajax    = new INHEALTH_Ajax_Public;
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
        //ajax send_Email
        $this->charger->add_action( 'wp_ajax_send_email', $this->inhealth_ajax, 'send_email' );
        $this->charger->add_action( 'wp_ajax_nopriv_send_email', $this->inhealth_ajax, 'send_email' );
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