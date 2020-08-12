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
define( 'DB_NAME', 'wordpress' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`,RIw@2V`AR%86Lg.uPG$Sf*)%K+ 64C~Dc$TP2?`.-MnTAmma<4J!AgKtC)v# P' );
define( 'SECURE_AUTH_KEY',  'UNwN,0T}/]~1%lNzTcL8u/OSE{#h[!W@NWa4:l_w94HQG?^o y;)SwBIC.Z8i64 ' );
define( 'LOGGED_IN_KEY',    'p+r2#$0Js8{y&7b@hObHYu~m$qA+_KPk9K2@,eSAmIIWuW9YlelcJ/zX@aA&c`D1' );
define( 'NONCE_KEY',        'vi&V>1I1WV8DF$-O1|~6?XU:-g<kjY=kU,EltfE*5!GJD7O82,poA>rTE(F.zwjx' );
define( 'AUTH_SALT',        'r.@HU@.Syle_]tWX;Q$&,[f/[zI)j?OPoehG{$hj*| Y$dN!vVAATs$eOT:,zx-]' );
define( 'SECURE_AUTH_SALT', 'QzP}vq4l_S1ly~:J^F)eMa7>p88+XT*CucSfPgn/x7qMhCo^<pU}[n2~Ck#A0FA_' );
define( 'LOGGED_IN_SALT',   'W|[3#{;K8zq-Vg-(IqK6|EHcWKi@B!Ts,[lN+Za*VtLQn4`16`qxMU,@V>H]LJ+v' );
define( 'NONCE_SALT',       ';A*-g1dG`3:d%9@wrWVd2bOU?x{AqcW(=&|7qPocK7~jLdTj;>^5p@V0{)/5}Pi ' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
