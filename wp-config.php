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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bdarea');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'giuliosa');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Cookie@123');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'dciJFz}QQzn#umZ*bJ6;mtGD~ai!aC ecqI)*|^_^%7y_G36U/qO<zb); usJsOh');
define('SECURE_AUTH_KEY',  'cZ,V>Su2pNG6H,h=i#dZswZ95R-WzM-Vbs{Y6X$k7h*Z~B;0T,S0.0#J6QC)yY7X');
define('LOGGED_IN_KEY',    ' r1(>Vci&O:S#O`iU./T~->>aLUG]+f?fV=|;=xj/Us-MOEeVYyWgaYs|=E5R =I');
define('NONCE_KEY',        ',if-[rC%BhF,P&);mR0QecKpJPeP>o&1rRfJ3s]w1u3E=cCN2C{<P ~(!heNT>ak');
define('AUTH_SALT',        'Z6H<3gi2,[&.3P%4$;88I7fdv#B8-z|rnO[0~9bF2_`cE[jp>JoG8e]AsCbR}XT]');
define('SECURE_AUTH_SALT', '4?J@Mu#lY%%,OT#,wdIi<<3qTO~Z8{v}*A*0V@KE|]36pa )tX5hs!m@pqy4%Sw7');
define('LOGGED_IN_SALT',   '6lNj_|$yu4`Uz;I&SQ|Lf~!dyvuHH<NagqCm%7g [BxJ`@}&]HtW|PT%bXXdmB2u');
define('NONCE_SALT',       '{D~Rr;;pRrzC+)l&u,[n&O =|9X ,9(6`&yNbW]W{V ^A+ {wCo:A(~V{Kd6Qzk8');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
