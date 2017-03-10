<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">
        <h1 class="page-header">Задача 6</h1>
        <p class="sub-header">В тестовом массиве на 1000000 элементов найдено <?=$data['count'];?> повторяющихся.</p>
        <p>Время выполнения <?=$data['time'];?> сек.</p>
        <hr>
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>