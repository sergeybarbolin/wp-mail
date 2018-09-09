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
define('DB_NAME', '585mail_db');

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
define('AUTH_KEY',         'x9%_F|uI+%K7SdNsvkV)a|[sP]:)=1ab+uk4TqLFNF4BYX~ l<jGAQJ%WQHuO`z@');
define('SECURE_AUTH_KEY',  'i#jI*VBDp6>vJffxN4kDsk?@<s5HP[g{s{1<JX^wU3YJj&DC.=Nlk5Z>q&QXNuZc');
define('LOGGED_IN_KEY',    'qCyMWZ$RE{AXUsp_ &dgM($oUb*zUo31|-anS#k_n=Vd;=mmW>R_N,Ecw|vE^*0j');
define('NONCE_KEY',        '~9C}[Tnkpmz8&/`0MWKqPeVIag`c!7Luki9m~aZEn{9)-I?E{wp<5jO939pT^>k;');
define('AUTH_SALT',        '?,fm.33&(|-C$DG:%ljFnuQG) juRx,qDi<_kQkKVo-]F5#b !&?Nw_%]g>azjUQ');
define('SECURE_AUTH_SALT', 'da2I1sBO>eS=WOyBU?I}O!fc1oWme +f/tg~IHcXb(3>LH4=U/q#lL~Z0[_0t^DH');
define('LOGGED_IN_SALT',   '4=vK#~@o3Z!01ScR4u,h#=9%A}a[mm3xWr9yYv9~DR7cNv{ZY$)tvdcf:7lf>Hfa');
define('NONCE_SALT',       'aHn:M[RaF7M4tc`%V5/j(G8?}Hyv.+hJAh%?f0(cjgP_(s+rKl)w7GvXAUIi2m|`');

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
