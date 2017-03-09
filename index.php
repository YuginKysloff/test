<?
// Определение константы для запрета прямого доступа к файлам
define('CONSTANT', 1);

// Путь к корневой директории
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);

// Настройки БД
define('DB_HOST', '127.0.0.1'); // Хост
define('DB_NAME', 'test'); 		// Имя базы данных
define('DB_USER', 'root'); 		// Пользователь
define('DB_PASS', ''); 			// Пароль пользователя

// Кодировка сайта
header('Content-type: text/html; Charset= UTF- 8');

// Запуск сессии
session_start();

// Установка временной зоны сервера
date_default_timezone_set('UTC');

// Подключение файла бд
require_once(DIR_ROOT.'/lib/lib_db.php');

// Подключение ядра
require_once(DIR_ROOT.'/core/core_controller.php');
require_once(DIR_ROOT.'/core/core_route.php');
require_once(DIR_ROOT.'/core/core_view.php');

// Роутинг
Core_Route::init();