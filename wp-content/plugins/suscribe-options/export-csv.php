<?php
/**
 * Created by PhpStorm.
 * User: Riter
 * Date: 24/01/14
 * Time: 06:11 PM
 */
//$sitename = sanitize_key( get_bloginfo( 'name' ) );
$filename = 'suscriptores.' . date( 'Y-m-d-H-i-s' ) . '.csv';

//header( 'Content-Description: File Transfer' );
header( 'Content-Disposition: attachment; filename=' . $filename );
header( 'Content-Type: text/csv; charset=UTF-8');
header('Pragma: no-cache');
header('Expires: 0');

require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

global $wpdb;


$suscriptores = $wpdb->get_results( "SELECT * FROM wp_users" );


$contents = "id,login,email\n";

foreach ($suscriptores as $suscriptor){
    /*$row = array(
        $suscriptor->ID,
        $suscriptor->user_login,
        $suscriptor->user_email
    );*/
    $contents.=$suscriptor->ID.",";
    $contents.=$suscriptor->user_login.",";
    $contents.=$suscriptor->user_email."\n";
    ;
}
//$contents_final = chr(255).chr(254).mb_convert_encoding($contents, "UTF-16LE","UTF-8");
print $contents;
