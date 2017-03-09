<? defined('CONSTANT') or die;

class Model_Index {

    public function __construct() {
        Lib_Db::instance();
    }

    // Получение количества новостей
    public function get() {
        $result = Lib_Db::query("   SELECT *
                                    FROM `users`");
        return $result;
    }
}