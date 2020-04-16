<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'a0081869_glassmaster');

/** Имя пользователя MySQL */
define('DB_USER', 'a0081869_site');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Skcwd2d1');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L^@+mh]K}FgDFtYA:kSM}WLWuvui`J;&N~2t8nDy/XptGrRDKR2f`%I-Lw.A~hPp');
define('SECURE_AUTH_KEY',  'Y_d_5(`:T?4WtMqMn,[wUF>e7F;ax/&?I9m]:y5Fo @+7PIGPC@{o36X`R^:NxT5');
define('LOGGED_IN_KEY',    'hqV?O2k1B&dwhuUvd*pt<n5T>07o0MHZo{;a V sRd`jU[4RiMQGVPI=h[,InLTD');
define('NONCE_KEY',        'oi+^J~;fHS[EU<DA;s7Q> H.{{`HL0; ZOTwI4&]a;lLY$GsB>ubRYNP4jdTBigW');
define('AUTH_SALT',        ' y_Y,Y7paeKz&2a<b@&DY3#=Q?/QtF)0rl#!|h aF!Fn!U*As(|(P$E`1i#bZ=|H');
define('SECURE_AUTH_SALT', 'oaN3<<~PeRg}Tx9!D?S%hVo62XbyAW3;Pp7|]>8t;J%8qz{f`Fx:c@Y|mD#)3:~_');
define('LOGGED_IN_SALT',   'oO.iVH@zJEbP2k%&8PC-DQ::T*2&oGu9HGN[jVgO@PLH%Lu#GC-.`/jsJbA+mzwy');
define('NONCE_SALT',       '-m[(Lb?9a8b/HWDCcu>l1vMM=wokiY[V%5v}PgKS~FV=c8>`.#L)2r)4[.K)yc/@');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');