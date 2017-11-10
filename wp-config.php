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
define('DB_NAME', 'wordpress-gulp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'w|Eaw.<1h}[c`o[i`s!oCzxLN0?.o7zF,adlCP1y$A/!rP%-J[s}X6up_ldHpky*');
define('SECURE_AUTH_KEY', '@}uhx.&g(r=0>+8v6x^vKc|7yS7a~Lmg_=BnUl*C^)rcM}A|0~zm8CKmB~&1tb+k');
define('LOGGED_IN_KEY', 'A-GPPLKU-!Io(T9%Rd@p+$mNEArw%%b/9s2Wk ^!C8GDF:G>=bu]b#]>vZC#l8.l');
define('NONCE_KEY', '!]Kb}]cj+3%H48RM- X/B;hMXU^5#^ =v6U~2r}vB**DNPc^P-orS.rw1I3SBU6Y');
define('AUTH_SALT', '3kVuR`]>I+F+gYQb4~6QZ|pKs,7+M[$AbinK0U}IHWxVV;!Fj8ou~3X~6m8jS(q7');
define('SECURE_AUTH_SALT', ';d7V8#@.!hZ9go]L=hM993RPpR,o1lHnWZ11~i,-cwiM{g@Fv!uRUq;ut^s?`Xsq');
define('LOGGED_IN_SALT', 'oipL~+I{xi?lpY<]C=%YzNZ&)OG.bZrlsa,`KOoDuB!S|Z/||5)v$tX0:3P>06Kg');
define('NONCE_SALT', 'P3vWRHbV-8%P>+<6m_OX}UcBKJw3xFNTY%3[hx;$Nvpi~2H!FsDGJNczBhtQ89k0');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

