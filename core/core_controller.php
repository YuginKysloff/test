<? defined('CONSTANT') or die;

class Core_Controller {

	// Главный метод
	protected function main($route){

		$this->data['route'] = $route;

		// Обработка и запись параметров
		if(isset($this->data['route']['param'])) {
			$array = explode('/', $this->data['route']['param']);
			$this->data['route']['param'] = array();
			foreach($array as $key => $val){
				if(($key % 2) == 0) {
					$last_key = $val;
				} else {
					$this->data['route']['param'][$last_key] = $val;
				}
			}
		}

		// Создание объекта контроллера
		require_once(DIR_ROOT.'/controllers/controller_'.str_replace("-", "_", $this->data['route']['controller']).'.php');
		$controller = 'Controller_'.ucfirst(str_replace("-", "_", $this->data['route']['controller']));
		$object = new $controller($this->data);
		
		// Проверка на существование метода
		$method = $this->data['route']['method'] ?? 'index';

		// Обращение к методу
		$response = $object->$method();

		exit($response);
	}
}