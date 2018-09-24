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
define('DB_NAME', 'testWic');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Fjx4=Zlmfly;NCV-Hlxf)dym6+<5RKj;fx/R@HJd&R^S}^srsB,`fR2Hu3k2hw#v');
define('SECURE_AUTH_KEY',  'rkyV.ODA4}|;w^TUCtl9A5N,QA0>dV*sQ^6(LCKf`&`CGf@y0]]R2.7_r~`0#4y-');
define('LOGGED_IN_KEY',    '+:H<P9m0k^Z+d*9P(s4Dj[Azh2lOe0W4#a>}^H&8tF4EZ8Rb$[| Ts=e>L}KDtL$');
define('NONCE_KEY',        'sv%IvG8IRoCKvb#Xf>~QKy)a,FElPh{;ufC;M6S8EdQMxzD0XYE+v} a0[MFpKz ');
define('AUTH_SALT',        'H )2V]n;fX/q5m=u|<M.&)a=8ZPDS3j2g ITlqeyAM[VMdY`.XyDe7*p5kXGL85-');
define('SECURE_AUTH_SALT', 'c*s.P!csF~8jL|w/YSfGs`CVmXiHFKr/%b|G>FmT+j`O.39%piX<Ig3K1Z#M_PID');
define('LOGGED_IN_SALT',   'AO,dtKJb&qvl$bW,$G.;0 >xq*gKM3Sn:uP3Dm t?A!2bQnaQKNNyO/DTC#F,3,>');
define('NONCE_SALT',       ':#%X]$/rF1HaR*u3>L&aM9(13ui-c+0gAK=WnFc>R??q;:F7Da,_xfRgm{ic|tDn');

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
