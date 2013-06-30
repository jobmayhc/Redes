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
define('DB_NAME', 'jobmayhc_redso');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'jobmayhc_redesu');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'redes1');

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
define('AUTH_KEY', 'N/rboeSY>6hwJM,J4]ND~EuyA}Tz3NW3FsBc)15Y@4rvT8`wk+~~;1G716yb7/6>'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', ')A}c!]H2%n*MlI|,|jFV=:h18(2Y[j }{a+N@ROtQ9_d#fU%E-<Y,*x|fT8l*B4^'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '9qXq--Qg*hT-^^E*4%D**!OisHE.(p;D9m?||p9Cc*$5c<fsn9QZpDxz=Dk|iPF<'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '}na%4g`vY{^~#ey?8B7mfL<`ti+ QN-}g~} Ums5c5W+mMQdl~lBB9(|@-9JG|2`'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '1^|x|R%A@]wd;XO>YN>dz-{R{O{^gf&TA=!|.@t)~8d)_[F_+[2lN@Lw(>c~Q`v!'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '/0&d@_BcF^G*Hat30=s54j%+Vhw0#C`Ek:|M-%$0?yYs-.MQ$naUE{/RNt?:X>>3'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'rqSvuDpAgu7E|j6n!ya1R<XZSh=cuQm_~,v6|BD!E2-%$^**,qh?<ZR7XgVDTS8}'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'AbwEaQi-,c8=lR4czOsbVEsGJiX)BW*FJQ:tnEL :d>hx? bQo]j_2Ou%|.B%L[a'); // Cambia esto por tu frase aleatoria.

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


