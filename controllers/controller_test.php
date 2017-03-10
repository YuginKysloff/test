<? defined('CONSTANT') or die;

class Controller_Test {

    public function __construct($data) {
        $this->data = $data;

        // Подключение моделей
        require_once(DIR_ROOT.'/models/model_table.php');

        // Определение объектов
        $this->obj['model_table'] = new Model_Table();
    }

    /**
     * Задача 1
     */
    public function task1() {

        // Получение текста из файла
        $this->data['text'] = file_get_contents(DIR_ROOT.'/assets/text1.txt');

        // Если текст получен обработка с помощью регулярного выражения
        if($this->data['text']) {
            preg_match_all("/\[([^:]+):([^\]]*)\](.*)\[\/[^\]]+\]/Us", $this->data['text'], $this->data['result']);
        }

        // Возвращение вида
        $page = Core_View::load('task1', $this->data);
        return $page;
    }

    /**
     * Задача 2
     */
    public function task2() {

        // Получение текста из файла
        $this->data['text'] = file_get_contents(DIR_ROOT.'/assets/text2.txt');

        // Если текст получен обработка с помощью регулярного выражения
        if($this->data['text']) {

            // Массив доступных тегов
            $tags = ['raz', 'dva', 'tri'];

            // Поиск тегов в тексте и вырезание соответствующего тегу текста
            foreach($tags as $key => $tag) {
                preg_match("/$tag:(.*?)/Us", $this->data['text'], $match);
                $this->data['result'][$tag] = $match[1];
                if($key > 0) $this->data['result'][$tags[$key - 1]] = str_replace($tag.':'.$this->data['result'][$tag], '', $this->data['result'][$tags[$key - 1]]);
            }
        }

        // Возвращение вида
        $page = Core_View::load('task2', $this->data);
        return $page;
    }

    /**
     * Задача 3
     */
    public function task3() {

        // Получение всех данных из tree
        $this->data['result'] = $this->obj['model_table']->getTree();

        // Возвращение вида
        $page = Core_View::load('task3', $this->data);
        return $page;
    }

    /**
     * Заполнение данными таблицы для задачи 3
     */
    public function fill() {

        // Очистка таблицы
        $this->obj['model_table']->truncate();

        // Строка алфавита
        $abc = 'abcdefghijklmnopqrstuvwxyz';

        // Длина строки
        $max = strlen($abc);

        // Заполнение таблицы tree
        for($i = 0; $i < 50; $i++) {

            // Формирование поля name
            $name = '';
            for($j = 0; $j < 10; $j++) {
                $name .= $abc[mt_rand(0, $max)];
            }

            // Формирование поля parent
            $parent = ($i < 5) ? 0 : mt_rand(0, 49);

            // Добавление строки в таблицу базы данных
            $this->obj['model_table']->addLine(['name' => $name, 'parent' => $parent]);
        }

        // Получение всех данных из tree
        $this->data['result'] = $this->obj['model_table']->getTree();

        // Перенаправление на страницу вывода таблицы
        header('location: /test/task3');
    }

    /**
     * Вывод дерева для задачи 3
     */
    public function tree() {

        // Получение всех данных из tree
        $query = $this->obj['model_table']->getTree();

        // Подготовка данных для построения дерева
        $arr = [];
        if($query) {
            foreach($query as $item) {
                $arr[$item['parent']][$item['id']] = $item['name'];
            }
        }

        // Вызов функции построения дерева
        $this->data['result'] = $this->getTree($arr, 0);

        // Возвращение вида
        $page = Core_View::load('tree', $this->data);
        return $page;
    }

    /**
     * Рекурсивная функция построения дерева для задачи 3
     * @param array $arr - данные для дерева
     * @param integer $parent - id родителя
     * @return string
     */
    private function getTree($arr, $parent) {

        // Если существуют строки с данным id родителя перебираем их
        if (isset($arr[$parent])) {
            $result .= '<ul>';
            foreach ($arr[$parent] as $key => $value) {

                // Формирование строки результата
                $result .= '<li>'.$value;

                // Рекурсивный вызов функции построения дерева
                $result .= $this->getTree($arr, $key);
                $result .= '</li>';
            }
            $result .= '</ul>';
        } else {
            return null;
        }
        return $result;
    }

    /**
     * Задача 4
     */
    public function task4() {

        // Возвращение вида
        $page = Core_View::load('task4', $this->data);
        return $page;
    }

    /**
     * Задача 5
     */
    public function task5() {

        // Возвращение вида
        $page = Core_View::load('task5', $this->data);
        return $page;
    }

    /**
     * Задача 6
     */
    public function task6() {

        // Создание тестового массива
        for($i = 0; $i < 1000000; $i++) {
            $result[$i] = mt_rand(100000, 1500000);
        }

        $this->data['result'] = array_count_values($result);
        foreach($this->data['result'] as $key => $item) {
            if($item < 2) unset($this->data['result'][$key]);
        }

        // Возвращение вида
        $page = Core_View::load('task6', $this->data);
        return $page;
    }

    /**
     * Задача 7
     */
    public function task7() {

        // Возвращение вида
        $page = Core_View::load('task7', $this->data);
        return $page;
    }

    /**
     * Задача 8
     */
    public function task8() {

        // Возвращение вида
        $page = Core_View::load('task8', $this->data);
        return $page;
    }
}