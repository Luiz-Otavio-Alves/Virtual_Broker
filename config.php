<?php
/** codigos PHP começam com <?php e terminam com ?>. Os comandos vão no meio disso. CRUD (Create, Read, Update e Delete em dados)*/

/** define = permite definir uma constante (nunca se altera)*/

/** Aqui definimos que DB_NAME será o nome da constante do banco de dados. No caso do professor o banco de dados chama wda_crud*/
define('DB_NAME', 'testesluizotav');

/** Aqui definimos que DB_USER será nome da constante do usuarioo do banco de dados. No caso do professor o usuario do banco de dados chama root*/
define('DB_USER', 'testesluizotav');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Luizao2019');

/** nome do host do MySQL */
define('DB_HOST', 'mysql18-farm76.kinghost.net');

/** O operador . faz a união de duas Strings em PHP  */
/** dirname(__FILE__) - comando especial - "hadouken" - que recebe a pasta que contem o arquivo config.php  */
/** ! - interrogacao operador negação php, no caso if (!defined('ABSPATH')) esta verificando se a constante ABSPATH não esta definida */

/** Caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
    
/** caminho no servidor para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL','/ProjetoCorretorVirtual/');
    
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer - VAMOS USAR DEPOIS **/
define('HEADER_HOME', ABSPATH . 'inc/header_home.php');
define('HEADER_ABOUT', ABSPATH . 'inc/header_about.php');
define('HEADER_DESTAQUES', ABSPATH . 'inc/header_destaques.php');
define('HEADER_CONTATO', ABSPATH . 'inc/header_contato.php');
define('HEADER_LOGIN', ABSPATH . 'inc/header_login.php');
define('HEADER_CADASTRO', ABSPATH . 'inc/header_cadastro.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('FOOTER_SIMPlES', ABSPATH . 'inc/footer_simples.php');

