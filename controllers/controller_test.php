<? defined('CONSTANT') or die;

class Controller_Test {

    public function __construct($data) {
        $this->data = $data;
    }

    public function task1() {

        $this->data['text'] = file_get_contents(DIR_ROOT.'/assets/text.txt');

        if($this->data['text']) {
            preg_match_all("/\[([^:]+):([^\]]*)\](.*)\[\/[^\]]+\]/Us", $this->data['text'], $this->data['result']);
        }

        $page = Core_View::load('task1', $this->data);
        return $page;
    }

    public function task2() {

        $page = Core_View::load('task2', $this->data);
        return $page;
    }
}