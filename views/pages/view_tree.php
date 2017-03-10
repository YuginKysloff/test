<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">
        <h1 class="page-header">Задача 3</h1>
        <h2 class="sub-header">Вывод дерева</h2>
        <a class="btn btn-default" href="/test/task3">Таблица</a>
        <a class="btn btn-default" href="/test/fill">Заполнить таблицу</a>
        <a class="btn btn-default" href="/test/tree">Дерево</a>
        <hr>
        <?=$data['result'];?>
        <hr>
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>