<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'evaluation03' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'evaluation03' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'evaluation03' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jLl*J8g`,aNk6mHaoTTe8)IpjC%B4Yb[50@k$-7[*Gor=&$Gk;q^dcKf2|j@WCK^' );
define( 'SECURE_AUTH_KEY',  'Q{QK8t)|!k038LU<jzfl;8{1G1VA+25w8/0JbM*sIVm+(Lep2(eg6|Qly;L@GItt' );
define( 'LOGGED_IN_KEY',    'kX:nDfMUMchzoGEpvaGcK8C$ditN?:C?}!FHRWTc*@q]hB0v(jOjsrjD$uvthYHk' );
define( 'NONCE_KEY',        'Z+z0y0T-|qyl[#P;,B7k=th1Z_?*=-+fOp,{5wh39QGXI}FBr.I?b~g9(GfVtz2!' );
define( 'AUTH_SALT',        'Duxe!L7xFQ7rfA4z=!5r. qa-#ld-<NB=5Z#eL|IFxa?dPy1GDnu7F{Xhx,2_X}~' );
define( 'SECURE_AUTH_SALT', 'suDyRsM)g]Sp8U1v6 AC5/Bk3tSW9aQ}OOw#?,<j?%=Z_]}hw[yW|Oq[{IOu0A!o' );
define( 'LOGGED_IN_SALT',   '@<K_#zdy(P.TV(KrVA|Ox$F9l r#>Pm(,i]PdiD[J&vBOQ$A6%Twk1Enk3sc,o%7' );
define( 'NONCE_SALT',       '|]Dw=; Gpr86*a/oG^9yR76_D`Lq2QeaZ@},Y R<b;A,r5WO`DV.~i%lyE,W^eV ' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
