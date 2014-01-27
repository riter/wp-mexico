<?php
/* Plugin Name: Suscribe Options
Plugin URI: http://mi-plugins.com/
Description: Suscribe Options permite suscribirte en distintas opciones para luego exportar a CSV la lista de suscripciones
Version: 1.0
Author: Riter Angel Mamani Cordova
Author URI: riter.cordova@gmail.com
License: Sin Licencia
*/
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

function suscribe_form(){

    if($_SERVER['REQUEST_METHOD']=="POST"){
        global $wpdb;

        $res=$wpdb->get_results( "select email from wp_suscriptor where email='".$_REQUEST['email']."'" );
        if($res==null){
            $wpdb->query( "INSERT INTO wp_suscriptor VALUE (0,'".$_REQUEST['email']."','".$_REQUEST['group']."','0')" );
        }else{
           // echo "Ud ya esta suscrito";
        }
    }
    ?>
    <form action="" method="post">
        <div class="formSub">
            <div class="input"><input name="email" type="email" required="true" placeholder="Escribe aquí tu correo electrónico"/></div>
            <div class="grupo-radio">
                <div><input type="radio" name="group" value="Semanal" checked><label>Semanal</label></div>
                <div><input type="radio" name="group" value="Quincenal"><label>Quincenal</label></div>
                <div><input type="radio" name="group" value="Mensual"><label>Mensual</label></div>
            </div>
            <div class="send"><button type="submit">Suscribirme</button></div>
        </div>
    </form>
<?php
}


class suscribe_options{

    public function __construct(){
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        //add_action( 'init', array( $this, 'init' ) );
    }

    public function init(){
        global $wpdb;
        $wpdb->query( "CREATE TABLE IF NOT EXISTS `wp_suscriptor`(
                        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        email VARCHAR(100) NOT NULL,
                        grupo VARCHAR(20) NOT NULL,
                        estado VARCHAR(1) NOT NULL
                       );"
        );
    }

    public function add_admin_pages() {
        //add_users_page( __( 'Mi Export to CSV', 'mi-export-users-to-csv' ), __( 'Mi Export to CSV', 'mi-export-users-to-csv' ), 'list_users', 'mi-export-users-to-csv', array( $this, 'suscribe_pages' ) );
        add_users_page('My Plugin Users', 'Suscripción Export CSV', 'read', 'my-unique-identifier', array( $this, 'suscribe_pages' ) );
    }

    public function suscribe_pages(){
        ?>
        <div class="wrap">
            <h2>Export suscriptores a CSV file</h2>


            <form action="<?php echo plugins_url('suscribe-options'); ?>/export-csv.php" method="post">
                <div class="grupo-radio">
                    <div><input type="radio" name="group" value="Todos" checked><label>Todos</label></div>
                    <div><input type="radio" name="group" value="Semanal" ><label>Semanal</label></div>
                    <div><input type="radio" name="group" value="Quincenal"><label>Quincenal</label></div>
                    <div><input type="radio" name="group" value="Mensual"><label>Mensual</label></div>
                </div>
                <p class="submit">
                    <button type="submit" class="button-primary">Export</button>
                </p>
                <!--<a href="<?php echo plugins_url('suscribe-options'); ?>/export-csv.php" class="button-primary" target="_blank">Export</a>-->
            </form>


        </div>
    <?php
    }
}
new suscribe_options;
register_activation_hook( __FILE__, array( 'suscribe_options', 'init' ) );
?>