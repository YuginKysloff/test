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

    public function getQuery4() {
        $result = Lib_Db::query("SELECT t1.* 
                                FROM `tree` t1, `tree` t2 
                                WHERE t1.parent = 0 AND t2.parent = t1.id 
                                GROUP BY t1.id 
                                HAVING COUNT(t2.id) >= 3");
        return $result;
    }

    public function getQuery5() {
        $result = Lib_Db::query("SELECT t1.* FROM `tree` t1 
                                JOIN `tree` t2 ON t2.id = t1.parent 
                                JOIN `tree` t3 ON t3.id = t2.parent 
                                LEFT JOIN `tree` t4 ON t4.parent = t1.id 
                                WHERE t4.id IS null");
        return $result;
    }
}