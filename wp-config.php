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
define( 'DB_NAME', 'wp-lidjiev' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'YDqckt~A1NDUcoPQaz>`D&Ea8Y=Mbi1.`&{#+h%pSZP,+P^IEX--(sZ3`[Xl6|<}' );
define( 'SECURE_AUTH_KEY',  '~RQYXJS5s$:^ntv ^;7TJ/KkSJZ&Lmg^hs,za}[%wz;[`(=3yVU_v<o-Q[C<uyR2' );
define( 'LOGGED_IN_KEY',    '&}6r%RX0uz;?/HVJBC}S)pi931o!HM1#8y(02EIUCIYT*Ax]$Wil^{Pr,NQ9gVb5' );
define( 'NONCE_KEY',        '8djrTnGK9K>~5~/7 CEP<8ySuv+b#0!Ym6A,Lt*Wp2^U/8S,O(d%tgFZh~<CGO39' );
define( 'AUTH_SALT',        'DtYN$kI:zGBr8T0QC;oF^=_IDxzs Zv7(gR*{SW3rSPltHeqL24gCB!ICCs=Z-_?' );
define( 'SECURE_AUTH_SALT', 'MUS9R[1soa%I9dqoW60(9*vR13l1}:Xi,`;:m%GG!m4bjZQ@/Kc5g8k0+YNKP}p}' );
define( 'LOGGED_IN_SALT',   '5s}+E_7u8MdDL};crBZo[^0Rt{1ga`I/$5]^r=P!:k<k(cj=]L{0j9?5 =kgGG8e' );
define( 'NONCE_SALT',       '?[9T_bA;4j8#WzWgHaaUl7|eq[j$KK5Sl5=Zz8%N{N;XY)a_jDkccAE9T#bXH!k-' );

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
