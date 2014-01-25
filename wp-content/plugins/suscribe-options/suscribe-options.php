<?php
/* Plugin Name: Suscribe Options
Plugin URI: http://mi-plugins.com/
Description: Suscribe Options permite suscribirte en distintas opciones para luego exportar a CSV la lista de suscripciones
Version: 1.0
Author: Riter Angel Mamani Cordova
Author URI: riter.cordova@gmail.com
License: Sin Licencia
*/



class suscribe_options{

    public function __construct(){
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        //add_action( 'init', array( $this, 'generate_csv' ) );

    }

    public function add_admin_pages() {
        add_users_page( __( 'Mi Export to CSV', 'mi-export-users-to-csv' ), __( 'Mi Export to CSV', 'mi-export-users-to-csv' ), 'list_users', 'mi-export-users-to-csv', array( $this, 'suscribe_pages' ) );
    }

        public function suscribe_pages(){
            ?>
            <div class="wrap">
                <h2>Export suscriptores a CSV file</h2>
                <p class="submit">
                    <a href="<?php echo plugins_url('suscribe-options'); ?>/export-csv.php" class="button-primary" target="_blank">Export</a>
                </p>

            </div>
<?php   }
}

new suscribe_options;

?>

