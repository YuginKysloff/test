<? defined('CONSTANT') or die;

class Model_Table {

    public function __construct() {
        Lib_Db::instance();
    }

    // Получение количества новостей
    public function get_tree() {
        $result = Lib_Db::query("SELECT * FROM `tree`");
        return $result;
    }
}