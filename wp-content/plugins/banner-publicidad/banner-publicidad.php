<?php
/* Plugin Name: Banner Publicidad
Plugin URI: http://mi-plugins.com/
Description: Banner Publicidad permite suscribirte y guardar los script de los banner a mostrarse
Version: 1.0
Author: Riter Angel Mamani Cordova
Author URI: riter.cordova@gmail.com
License: Sin Licencia
*/
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

//function banner_form(){

    if($_SERVER['REQUEST_METHOD']=="POST"){
        global $wpdb;
        if($_REQUEST['half']!=""){
            $wpdb->query( "UPDATE wp_banner_script SET script='".$_REQUEST['half']."' WHERE nombre='half'");
        }
        if($_REQUEST['box']!=""){
            $wpdb->query( "UPDATE wp_banner_script SET script='".$_REQUEST['box']."' WHERE nombre='box'");
        }
        if($_REQUEST['super']!=""){
            $wpdb->query( "UPDATE wp_banner_script SET script='".$_REQUEST['super']."' WHERE nombre='super'");
        }

    }

function get_Banner($nombre){
    global $wpdb;
    $res=$wpdb->get_results( "select script from wp_banner_script where nombre='".$nombre."'" );

    if(count($res)>0){
        $res=get_object_vars($res[0]);
        if($res['script']=="")
            return "<img src='".get_template_directory_uri()."/images/boxBanner.png' alt=''/>";
        else
            return  $res['script'];
    }else{
        return "<img src='".get_template_directory_uri()."/images/boxBanner.png' alt=''/>";
    }
}


class banner_publicidad{

    public function __construct(){
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        //add_action( 'init', array( $this, 'init' ) );
    }

    public function getDato($nombre){
        global $wpdb;
        $res=$wpdb->get_results( "select script from wp_banner_script where nombre='".$nombre."'" );

        if(count($res)>0){
            $res=get_object_vars($res[0]);
            return  $res['script'];
        }else{
            return "";
        }
    }

    public function init(){
        global $wpdb;
        $wpdb->query( "CREATE TABLE IF NOT EXISTS `wp_banner_script`(
                        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        nombre VARCHAR(100) NOT NULL,
                        script VARCHAR(999) NOT NULL
                       );"
        );

        $wpdb->query(
            "INSERT INTO wp_banner_script (id,nombre, script)
                SELECT * FROM (SELECT 0, 'half', '') AS tmp
                WHERE NOT EXISTS (
                  SELECT nombre FROM wp_banner_script WHERE nombre = 'half'
                ) LIMIT 1;"
        );

        $wpdb->query(
            "INSERT INTO wp_banner_script (id,nombre, script)
                SELECT * FROM (SELECT 0, 'box', '') AS tmp
                WHERE NOT EXISTS (
                  SELECT nombre FROM wp_banner_script WHERE nombre = 'box'
                ) LIMIT 1;"
        );

        $wpdb->query(
            "INSERT INTO wp_banner_script (id,nombre, script)
                SELECT * FROM (SELECT 0, 'super', '') AS tmp
                WHERE NOT EXISTS (
                  SELECT nombre FROM wp_banner_script WHERE nombre = 'super'
                ) LIMIT 1;"
        );
    }

    public function add_admin_pages() {
        add_users_page('My plugin Banner', 'Banner Publicidad', 'read', 'banner-identifier', array( $this, 'suscribe_pages' ) );
    }

    public function suscribe_pages(){

        ?>
        <style>
            #form-banner{
                margin-top: 15px;
            }
            #form-banner label {
                font-size: 16px;
                font-weight: bold;
                padding-left: 5px;
            }
            #form-banner textarea {
                margin-top: 12px;
            }
        </style>
        <div class="wrap">
            <h2>Banners Publicidad</h2>

            <form action="" method="post" id="form-banner">

                <div><label>half page</label> <br/> <textarea  name="half" ><?php echo $this->getDato('half')?></textarea></div>
                <div><label>Box banner</label> <br/> <textarea  name="box" ><?php echo $this->getDato('box')?></textarea></div>
                <div><label>Super banner</label> <br/> <textarea  name="super" ><?php echo $this->getDato('super')?></textarea></div>

                <p class="submit">
                    <button type="submit" class="button-primary" name="guardar_banner">Guardar</button>
                </p>
                <!--<a href="<?php //echo plugins_url('suscribe-options'); ?>/export-csv.php" class="button-primary" target="_blank">Export</a>-->
            </form>


        </div>
    <?php
    }
}
new banner_publicidad;
register_activation_hook( __FILE__, array( 'banner_publicidad', 'init' ) );
?>