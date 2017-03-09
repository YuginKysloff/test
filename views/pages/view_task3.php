<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">

        <h1 class="page-header">Задача 3</h1>
        <h2 class="sub-header">Вывод дерева</h2>
        <a class="btn btn-default" href="/test/task3">Таблица дерева</a>
        <a class="btn btn-default" href="/test/fill">Заполнить таблицу</a>
        <a class="btn btn-default" href="/test/tree">Дерево</a>
<!--        <table class="table table-striped table-hover">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Ключ</th>-->
<!--                <th>Данные</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?// if($data['text']):?>
<!--                --><?// foreach($data['result'] as $key => $item):?>
<!--                    <tr>-->
<!--                        <td>--><?//=$key;?><!--</td>-->
<!--                        <td>--><?//=$item;?><!--</td>-->
<!--                    </tr>-->
<!--                --><?// endforeach;?>
<!--            --><?// else:?>
<!--                <tr>-->
<!--                    <td colspan="2">Нет данных</td>-->
<!--                </tr>-->
<!--            --><?// endif;?>
<!--            </tbody>-->
<!--        </table>-->
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>