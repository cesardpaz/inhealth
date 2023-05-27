<?php 
global $wpdb;

define( 'INHEALTH_VERSION',  '1.0.0'  );

$inhealth_path = ( substr( get_template_directory(),     -1 ) === '/' ) ? get_template_directory()     : get_template_directory()     . '/';
$inhealth_uri  = ( substr( get_template_directory_uri(), -1 ) === '/' ) ? get_template_directory_uri() : get_template_directory_uri() . '/';

define( 'INHEALTH_DIR_PATH', $inhealth_path );
define( 'INHEALTH_DIR_URI',  $inhealth_uri  );

require_once INHEALTH_DIR_PATH . 'includes/class-inhealth-master.php';

function run_inhealth_master() {
    $inhealth_master = new INHEALTH_Master;
    $inhealth_master->run();
}

run_inhealth_master();

require __DIR__ . '/vendor/autoload.php';