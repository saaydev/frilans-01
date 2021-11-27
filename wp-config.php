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
define( 'DB_NAME', 'levak' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hX,4BQUzgJQl|c*y:ZUF#)h-Up%YQ>aT/Ebc(XLcnDNuc0;uSjMHC9^T7M0CD~sa' );
define( 'SECURE_AUTH_KEY',  'W]_*P-d^-#mAG_$=|QufuVd!B=c{]qPg]f5SR/(?7cqR%!DhNADrE2)@THgIn.s*' );
define( 'LOGGED_IN_KEY',    'VR(?T)LwE7Ezv,D`mo>ppODUV$vnh.uipM ?w).q;5<o 7lLJ+pDi@-u>l:{-qQz' );
define( 'NONCE_KEY',        'r5[.(]#&t<QcP8zrPjIJCbHG]/KnS/9npg^cA?c9;hN0cswP`<S|^Yekyenhbr+v' );
define( 'AUTH_SALT',        'eQ$4r|((^tDk4B3q3S#~(APoP(>]]nE9v1k9Z&>]C) =R>=R8~<MgEx?v=jlqy2R' );
define( 'SECURE_AUTH_SALT', '9ugQ%zM1,>lkD4 JKN)tuj7Hnd]bmoSo+$me3@n)]+RyN/bA,L$5| _$X.BoVP+O' );
define( 'LOGGED_IN_SALT',   'A?vw3C91,+eHDHGmC%p1|:M]Ip 5QHb.;G5a*Z~:byp1,oF~`jtR,||aQ]n~^*q*' );
define( 'NONCE_SALT',       '1D|zr3vW*Px[@7k_5:#<Ysj1iT8l`83~:C{xZzrX.NV&MZcAVixq%[`rKZ$+i7Q$' );

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
