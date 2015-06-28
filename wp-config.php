<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'sangiler');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '16N-?S%ipt[$]<9oFH@g6`MTCWWKC5&Ay!,#vg>!4XaXb!Q;[^d/i7Hz+G5w4Vs>');
define('SECURE_AUTH_KEY',  'b+xdUSY94KH@}]Lwe}l>@yngV*#}Abs5-g8Da8+I!JW;Ep@jq 9G2#+lE88!w)d3');
define('LOGGED_IN_KEY',    '{@e]Rc|$VM@K94Orb{mi#4ImK9oI6F=kjT~K[a!g=KTL&hFJ)S5CeN+HmaE|vC6H');
define('NONCE_KEY',        '-;;|}(MN3eAdb~x~61MQM*a]X 4[:EP?[0.C}|08Ey1.XnYblvH{.>V^FN(:xHGV');
define('AUTH_SALT',        '-+7uoLj+A@Y(FNJ<fWj<6,+ntKzgET)R$~>a.`|Fhf2{b1f*d@rui_HBm+20~AV]');
define('SECURE_AUTH_SALT', ',c+|&6WrMO}ze0t/;F5G4&R!0e[{Oc+Oxc+?jf`M)c%x%3m<l ~;e]RxS0DWoMHF');
define('LOGGED_IN_SALT',   'Wr}<80cQnhBKZbtu~$^MaoX+1N@L|yS=`KWg@*-2nA-o.~Fu,-X|ek@t0|Z5|O,{');
define('NONCE_SALT',       '[ej/c4Xs/H3@p~Idgb#+^in>MK-C:)NoQjzx3*.F~r) b^@ST:] |Q~2,#+6$ru>');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');