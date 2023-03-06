<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost/' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );
define('WP_ALLOW_REPAIR', true);

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(Qfdp(G5[c-D1]7VN;/a6}G+4LV8D*tY(L3>RJ2se@@+XrGySL&_}KT5#KK{2FV~' );
define( 'SECURE_AUTH_KEY',  'mh8KN|(A<&93Irw sso;qfK1c2$|SKui)PcUuSX#e@! #E.UfP~<y!01!V_Cg$,m' );
define( 'LOGGED_IN_KEY',    'Ug^5S<#{}<_>]njY_~?9!:h@8ynlseP_QLRQpu3<zBE#U|nDv:iC?o5ly7>L-1){' );
define( 'NONCE_KEY',        'W8,EgP;fu?A2w_? 3N<SyL*x*t0noD|b{Ku9n1.Cklre7t9`7dz^{YmyvUYA7)[%' );
define( 'AUTH_SALT',        'qR<j#}=N,qjTF`5.hS%wbkKN8R^$,Sd_*T+U$ zS%8N) k;L`67F.Q-)_L@_C@zI' );
define( 'SECURE_AUTH_SALT', 'Wp=Tb :oxq1N8o2lVp7AB/)3!YJ7-KfOwj%dzNr{6axM}|I</4Xk*<:A9_=!XALL' );
define( 'LOGGED_IN_SALT',   '_)P1k@gICIK|0xBFw~1N(9d*?%YFoP2EhN2{l*FAJ;}h-,w8PS/?)r~r%t}%W>Q@' );
define( 'NONCE_SALT',       'n8b_b2~!ZABHG(1s]NKw-6]O!D$}ip^:U;a9AgN<R)/RF4_f:0Z| !jP^&N2aNf^' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
