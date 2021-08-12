<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'banco_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C2DT#O|w#Rl8Z&3OVp_N!^]D`^COyE9k}xNNF&5dvs{IVI`A&W%Gxb0hu7Q`51>1' );
define( 'SECURE_AUTH_KEY',  '%ZZtg:By|1~ L<ZW>atAok96(Fu~VnEAQzZZ!yy]Km6l33?{9ZM/lH;1E.5VO$uN' );
define( 'LOGGED_IN_KEY',    'j|Y/Wo&2XF+0/&7H{l2fqfH@,IUH.B,}zo,tS/IIs-;%bxI]eh&_f%20Z:xM K9v' );
define( 'NONCE_KEY',        '-<1oeYVN,y!G/8h)CSYzXvY~i3e)<^`GkdCynT} W$-k{4avj`GB+$g-R bm#_*4' );
define( 'AUTH_SALT',        '=#&3yY_365MM!uP``8-SOeuTKU6SQIJrm-.[!L#$n[3I$>Zq]<IBGR4bCZ)_+Ot:' );
define( 'SECURE_AUTH_SALT', ';jN>@bgFO~ SUJu}H!(mLDU)@+D0v3NO88qXHg_~NRcU1r~<Iou(nW,}r`c%Bz!)' );
define( 'LOGGED_IN_SALT',   'I=!9=|{rSaM(E8&(B15#Zb-0aqgmR$R_$q=eEf(!7l-UTY_<.i2i6D9@.S~Vv_g_' );
define( 'NONCE_SALT',       'V8;<.|@eH@@b:7n6Ih3j1^tP-nkvT;;Y[F/-q![2/.T;;qrOf{(x2GE*bc+M 4]F' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_banco';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
