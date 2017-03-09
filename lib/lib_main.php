<? defined('CONSTANT') or die;

class Lib_Main {

    // Пагинация
    public static function pagination($total, $per_page, $num_links, $start_row, $action = '') {
        $num_pages = ceil($total / $per_page); // Общее число страниц
        if ($num_pages == 1)
            return '';
        $cur_page = $start_row; // Количество элементов на страницы
        if ($cur_page > $total) {
            $cur_page = ($num_pages - 1) * $per_page;
        }
        $output = '';
        $cur_page = floor(($cur_page / $per_page) + 1); // Номер текущей страницы
        $start = (($cur_page - $num_links) > 0) ? $cur_page - $num_links : 0; // Номер стартовой страницы выводимой в пейджинге
        $end = (($cur_page + $num_links) < $num_pages) ? $cur_page + $num_links : $num_pages; // Номер последней страницы выводимой в пейджинге
        $output .= $cur_page > ($num_links + 1) ? '<a href="/'.$action.'" class="pagination__button pagination__button--first pagination__button--enable"></a>' : '<span class="pagination__button pagination__button--first"></span>'; // Формируем ссылку на первую страницу

        // Формируем ссылку на предыдущую страницу
        if ($cur_page != 1) {
            $i = $start_row - $per_page;
            if ($i <= 0)
                $i = 0;
            $output .= '<a href="/'.$action.'/'.$i.'" class="pagination__button pagination__button--prev pagination__button--enable"></a>';
        }
        else {
            $output .='<span class="pagination__button pagination__button--prev"></span>';
        }

        // Формируем список страниц с учетом стартовой и последней страницы   >
        for ($loop = $start; $loop <= $end; $loop++) {
            $i = ($loop * $per_page) - $per_page;

            if ($i >= 0) {
                if ($cur_page == $loop) {

                    // Текущая страница
                    $output .= '<span class="pagination__button pagination__button--active">'.$loop.'</span>';
                } else {

                    $n = ($i == 0) ? '' : $i;

                    $output .= '<a href="/'.$action.'/'.$n.'" class="pagination__button pagination__button--enable">'.$loop.'</a>';
                }
            }
        }

        // Формируем ссылку на следующую страницу
        $output .= $cur_page < $num_pages ? '<a href="/'.$action.'/'.($cur_page * $per_page).'" class="pagination__button pagination__button--next pagination__button--enable"></a>' : '<span class="pagination__button pagination__button--next"></span>';

        // Формируем ссылку на последнюю страницу
        if (($cur_page + $num_links) < $num_pages) {
            $i = (($num_pages * $per_page) - $per_page);
            $output .= '<a href="/'.$action.'/'.$i.'" class="pagination__button pagination__button--last pagination__button--enable"></a>';
        } else {
            $output .='<span class="pagination__button pagination__button--last"></span>';
        }
        return '<div class="pagination">'.$output.'</div>';
    }
}