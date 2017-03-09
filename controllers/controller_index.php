<? defined('CONSTANT') or die;

class Controller_Index {

    public function __construct($data) {
        $this->data = $data;

        // Подключение моделей
        require_once(DIR_ROOT.'/models/model_index.php');

        // Определение объектов
        $this->obj['model_index'] = new Model_Index();
    }

    // Метод по умолчанию
    public function index() {

        $this->data['users'] = $this->obj['model_index']->get();

        // Формирование вида
        $page = Core_View::load('index', $this->data);
        return $page;
    }
}