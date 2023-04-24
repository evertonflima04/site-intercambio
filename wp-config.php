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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura-intercambios' );

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
define( 'AUTH_KEY',         '7/!38bzjLa^ sHc4V+<9VTlK;fR92ybD,}Vyx]bXqEY6|a9/XBbwF[b$s/A`~N3`' );
define( 'SECURE_AUTH_KEY',  '/!${R69aODmLMI#c=)doQ>vC@;q[ V%{UhgKo$[-Rwl-?>3.WareUHx6L?nh6x d' );
define( 'LOGGED_IN_KEY',    '60i]K%6F,+-G38S}^[WJ$X8w3@x3Lm|raI%*R?jx~86T)(/nITiaXL7~*})n&|j&' );
define( 'NONCE_KEY',        '~nn%Q*ro|n~=I?i&zQG.L|*2:UT?@+QR<[Jwi5_7`iAs:DX6i?OX_2&HmXcfjF8C' );
define( 'AUTH_SALT',        '&|WXH[C$krJLqp!Ho9_ir4^jKX,t%bfQx%&:A8E,<pa=#bd~+-a1:Y-GJEL$Qoev' );
define( 'SECURE_AUTH_SALT', 'cY4[4QXOfSA:Z+2by(0J7W?3*P!p6r_bJF]7:$~6r*4c}@ZtNkrGVMlbMkT2!vz[' );
define( 'LOGGED_IN_SALT',   'B{+KxB8! V^iYnuGNZKM^A-DQ;scE-c]zj3fr0^-}(WLk[FW&`&1Yw++p)6R+tA!' );
define( 'NONCE_SALT',       '8}@FM3>p#.mMOh<^Pc=NHwZ%cN{E=esNf-}Sf*WG|~7GY^-KwYuX/+j^;C3,|ubt' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
