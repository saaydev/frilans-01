<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'frilans_01' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pW8{2fqp}@u|oOng6}+p[`|yZ@wG_|.0x89T<9.NHlk+rq~uQ(Cv}C&pTHOj@0t0' );
define( 'SECURE_AUTH_KEY',  'OhA]F=msEgtBijlFZ}=]%j{W[Vi$oBM%6gti#d%h8Hfa]PV{d^/3*+fy9K~!:/>,' );
define( 'LOGGED_IN_KEY',    'zVm[7]FSKC})3B5cVpo)hSBMN.g|hC&`BanA.anMmr5z2eq9AY;C$xsU5qPByDJc' );
define( 'NONCE_KEY',        '=s8;X-wi=_?. 6 54ET#V(O5}%q=1(}Jn0ZaLn+pjQi#I(e|4U7lkuLS7Y{.VL_@' );
define( 'AUTH_SALT',        'n`,gz)gLBMRUy_4M$3u4V`ux:`FKG8qm]?W`^s4NiAo))dJjxg*aJcMjK,,{@m4C' );
define( 'SECURE_AUTH_SALT', 'XWO=h%cp7q,h8c-cQ7Da{yo|h1>r+Yy#;h3Ek`>dP:LLB8L*J:q:A{b_,k^R-5Fr' );
define( 'LOGGED_IN_SALT',   '}rmUH3W5@QFmIpbBu2E;^Pg/E~-L/|?o6bpmsd$_QrMFy0&ZNo@k^.O!_IvuBruc' );
define( 'NONCE_SALT',       'kSM[2=;rg)Go;)p6 }HzV=>`R<m+V(0I>)?Y6^%ft|%RV-t=J%PNQzmkn#7F,t8M' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
