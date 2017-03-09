<? defined('CONSTANT') or die;

class Core_View {
	
	// Возврат вида
	public static function load($file, $data = null) {

		$file = preg_match("/layouts/", $file) ? $file : 'view_'.$file;

		// Путь к файлу
		$path = DIR_ROOT.'/views/pages/'.$file.'.php';

		// Проверка наличия файла
		if(!file_exists($path)) {
			return false;
		}
		
		// Результат в переменную
		ob_start();
		require($path);
		$result = ob_get_contents();
		ob_end_clean();
		return $result;
	}
}