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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'furniture salon' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'ivan' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'Pvg5w9K[mNev[_;!mRHw9Dyz ;9?^/=i:LAQRD@_cR4Dl)2=@,?o[!7FI3`co7?y' );
define( 'SECURE_AUTH_KEY',  '0a!Mx<[e%Cg[0DZ=g=fe,CWkhsavkF.GnE?s]u+?!dAUioNoP+naIxXtfc<a5OUh' );
define( 'LOGGED_IN_KEY',    'z`Wc0gBu7.r0YY?V#A[3,aZ3ZCqX_qr2^,)e}p9} k}R)81An5It!MIpJ&mpv!1l' );
define( 'NONCE_KEY',        'T`wW6)z*z+p&P}OhxK#QodcyEBMx>}.2txc@2Sli!Q+F/$/.QGJD&Oq2e78~U[rS' );
define( 'AUTH_SALT',        '{lmh-NC};rY*U+!>}%$uLSOD7ri9@xfDbJ/~Zwc;)A=MnfC@D=`HgvI-liM]I;_A' );
define( 'SECURE_AUTH_SALT', 'lHM]WHed)L$h-a=dblJ>CkA2wfniEa)xUc$M+r-Q5U5|J8Y4vVoag$v?Gd<uiGNl' );
define( 'LOGGED_IN_SALT',   'W`h+B`3B?t#<%4L4!|ge`;0=p?sz~YdO!ha0.s,`cn{4gyh`^Rw$BLDj$6^6axkI' );
define( 'NONCE_SALT',       '.*2.X-GT,oI+;n.S<>;<&qhj/Ra3N+Gv_r.6OkOQgk+IF@1>G%7f(bLL($D>[/n)' );

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
