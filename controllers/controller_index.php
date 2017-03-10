<? defined('CONSTANT') or die;

class Controller_Index {

    public function __construct($data) {
        $this->data = $data;
    }

    // Метод по умолчанию
    public function index() {

        // Возвращение вида
        $page = Core_View::load('resume', $this->data);
        return $page;
    }
}