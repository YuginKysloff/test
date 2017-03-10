<? defined('CONSTANT') or die;

class Model_Table {

    public function __construct() {
        Lib_Db::instance();
    }

    public function truncate() {
        $result = Lib_db::query("TRUNCATE TABLE `tree`");
        return $result;
    }

    // Добавление строки
    public function addLine($data) {
        $result = Lib_db::query("INSERT INTO `tree` 
                                (`name`, `parent`) 
                                VALUES ('{$data['name']}', '{$data['parent']}')");
        return $result;
    }

    // Получение всех данных
    public function getTree() {
        $result = Lib_Db::query("SELECT * FROM `tree`");
        return $result;
    }
}