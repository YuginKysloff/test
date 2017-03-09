<? defined('CONSTANT') or die;

class Lib_Db {
	
	static private $_instance = null;

	private function __construct() {
		$this->db = new Mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$this->db->set_charset("utf8");
	}

	private function __clone() {}
	
	private function __wakeup() {}

	static function instance() {
		if(self::$_instance == null) {
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	// Обработка запроса
	public static function query($sql) {
        
		// Создание объекта класса
        $obj = self::$_instance;

		// Очистка предыдущего результата
		if (isset($obj->result) && is_object($obj->result)) {
			$obj->result->free();
		}

		// Записываем результат
		$obj->result = $obj->db->query($sql);
		
		// Если есть ошибки - перенаправляем их в лог
		if($obj->db->errno) {
			trigger_error("mysqli error #".$obj->db->errno.": ".$obj->db->error, E_USER_WARNING);
			exit(Lib_Main::rew_page('errors/data'));
		}

		// Возврат id при вставке(insert)
		if($obj->db->insert_id) {
			return $obj->db->insert_id;
		}

		// Возврат данных
		// ВНИМАНИЕ! данные всегда возвращаются в массиве, даже если запрос возвращает одну запись
		$data = false;
		if (is_object($obj->result)) {
			while ($row = $obj->result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		} else if ($obj->result == FALSE) {
			return false;
		} else {
			$res = $obj->db->affected_rows;
			return $res;
		}
    }   
}