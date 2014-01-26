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

    if($_REQUEST ['group']!="Todos"){
        $query =  "SELECT * FROM wp_suscriptor where grupo='".$_REQUEST ['group']."'" ;
    }else{
        $query = "SELECT * FROM wp_suscriptor" ;
    }

    $suscriptores = $wpdb->get_results( $query );

    $contents = "id,email,grupo\n";

    foreach ($suscriptores as $suscriptor){
        $contents.=$suscriptor->id.",";
        $contents.=$suscriptor->email.",";
        $contents.=$suscriptor->grupo."\n";
        ;
    }
    //$contents_final = chr(255).chr(254).mb_convert_encoding($contents, "UTF-16LE","UTF-8");
    print $contents;
