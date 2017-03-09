<? defined('CONSTANT') or die;

class Controller_Test {

    public function __construct($data) {
        $this->data = $data;
    }

    public function task1() {

        $this->data['text'] = file_get_contents(DIR_ROOT.'/assets/text1.txt');

        if($this->data['text']) {
            preg_match_all("/\[([^:]+):([^\]]*)\](.*)\[\/[^\]]+\]/Us", $this->data['text'], $this->data['result']);
        }

        $page = Core_View::load('task1', $this->data);
        return $page;
    }

    public function task2() {

        // Получение текста из файла
        $this->data['text'] = file_get_contents(DIR_ROOT.'/assets/text2.txt');

        // Если текст получен обработка с помощью регулярного выражения
        if($this->data['text']) {

            $tags = ['raz', 'dva', 'tri'];

            foreach($tags as $key => $tag) {
                preg_match("/$tag:(.*?)/Us", $this->data['text'], $match);
                $this->data['result'][$tag] = $match[1];
                if($key > 0) $this->data['result'][$tags[$key - 1]] = str_replace($tag.':'.$this->data['result'][$tag], '', $this->data['result'][$tags[$key - 1]]);
            }
        }

        $page = Core_View::load('task2', $this->data);
        return $page;
    }

    public function task3() {

//        // Получение текста из файла
//        $this->data['text'] = file_get_contents(DIR_ROOT.'/assets/text2.txt');
//
//        // Если текст получен обработка с помощью регулярного выражения
//        if($this->data['text']) {
//
//            $tags = ['raz', 'dva', 'tri'];
//
//            foreach($tags as $key => $tag) {
//                preg_match("/$tag:(.*?)/Us", $this->data['text'], $match);
//                $this->data['result'][$tag] = $match[1];
//                if($key > 0) $this->data['result'][$tags[$key - 1]] = str_replace($tag.':'.$this->data['result'][$tag], '', $this->data['result'][$tags[$key - 1]]);
//            }
//        }

        $page = Core_View::load('task3', $this->data);
        return $page;
    }
}