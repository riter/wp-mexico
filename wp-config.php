<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'validoc_testwordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'validoc');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '8sdi!dfi98');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`0YiJ9LYFT,k4/!i^F)I/EjvQ1kzR v2Qa)Ch+QbO4D4oP@-WfO7yke!GEw5jzO-'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'TrO+UbMdj]LE>;L|-IvujtZ-8s/R-9z&M.-yWjg3*qv`=Abl*ZGH8gR;6U5O@pN1'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '7t7-tx&/oCV|P(N@z1+CO#HsKm6A]M#&i-E+K$2Vio#NK&:MI.f{N5N|~`1Y|E?!'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'Uyo_~#(EG{zyDpN)dokyGpQxa&<1};bKZF{)0rh^iZ/aG_E9mQ|?pyj4Qv,5&2--'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'X W+R?+-h`~-:YqI1MfKA@2`+HmA*e`(ZazTaA*F7?R,p^NPZ)-lSfNw#..[:3l-'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '`ByFc#s{@|Ke_yY0`#,3:j aS;O)8vur>k<0($[7yDR{|!cCJ>.[AknwZ!=~8E/k'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '4jj7hZSp#b|X:X&u%rYi<&m1S&V P-~w^.q-dCYp[[A+h+&g-+nSrLC7+g{]G5~C'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '4KUF=fQl_)IB/()-*C(s/Mf$#Zl/|-v! ^Ic7/aoR|sw,{ACt~CiqAGk8hD|qa^E'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

