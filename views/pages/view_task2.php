<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">

        <h1 class="page-header">Задача 2</h1>
        <h2 class="sub-header">Случайный текст</h2>
        <p><?=($data['text']) ? $data['text'] : 'Файл не найден';?></p>
        <hr>
        <h2 class="sub-header">Полученный результат</h2>
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>