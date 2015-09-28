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
define('DB_NAME', 'catalog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZgrY2W+rOM36Ce&/9iHU#<+F!(Nvk0VtjxK=>5Gd8P*2mx+1}rk8VKE:.NPi$PN!');
define('SECURE_AUTH_KEY',  'p=TG{L}W8i5>GByG?pNHVW!ZIm (`@2~tm1A=?qURKa~k M+A/[K<,N{Z>oi3_%6');
define('LOGGED_IN_KEY',    'aqw|EfPcA%Pxg=%n7Y7h 0la%G%%hX<%ZZ<pjzEhJHBA[>fWOi|&VB`0R^#^]&@5');
define('NONCE_KEY',        '_`5AumWN{g}rr#C4>48oC(_udH1r3s)e;Vt393W$pmTba dH;%A5_&}#Hgo|c|+h');
define('AUTH_SALT',        '5h_NXi|!Peh_EU?$ZE3U|RL unvu#)TAQ~Z8Hr1a-[-s|<:[*rTTw:-V@|qd}7D2');
define('SECURE_AUTH_SALT', 'XE<jQ`TEUgg%7elaRT;B!yaF+2pug-BIR-jxtVxS0{%ak<k+2xD0-u^O#(@k8`G6');
define('LOGGED_IN_SALT',   '*W2w++LC^~Kg=zk?-d;]%F&sej(`et45x`3|}F;L!<2O0DC-,0l6`|:YO:+,eAl.');
define('NONCE_SALT',       '>`ei-{a-D:+qI[ZAW!)pj2TVUFBLYN)y8LanhBAien}+>5e[.#+)5-3G2+||pG*f');

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
