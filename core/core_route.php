<? defined('CONSTANT') or die;

class Core_Route extends Core_Controller {
	
	static function init() {

		// Создаем объект главного контроллера
		$controller = new Core_Controller();

        // Адресная строка
		$request = $_SERVER['REQUEST_URI'];


        // Роутинг
		if(preg_match("/([-a-z0-9]+)\/([-a-z0-9_]+)\/(.*+)/", $request, $matches)) {
			$controller->main(['controller' => $matches[1], 'method' => $matches[2], 'param' => $matches[3]]);
		}
		if(preg_match("/([-a-z0-9]+)\/([-a-z0-9_]+)/", $request, $matches)) {
			$controller->main(['controller' => $matches[1], 'method' => $matches[2]]);
		}
		if(preg_match("/([-a-z0-9]+)\/(.*+)/", $request, $matches)) {
			$controller->main(['controller' => $matches[1], 'method' => 'index', 'param' => $matches[2]]);
		}
		if(preg_match("/([-a-z0-9]+)/", $request, $matches)) {
			$controller->main(['controller' => $matches[1]]);
		}
		$controller->main(['controller' => 'index', 'method' => 'index']);
	}
}