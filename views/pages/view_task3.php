<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">
        <h1 class="page-header">Задача 3</h1>
        <h2 class="sub-header">Вывод дерева</h2>
        <a class="btn btn-default" href="/test/task3">Таблица</a>
        <a class="btn btn-default" href="/test/fill">Заполнить таблицу</a>
        <a class="btn btn-default" href="/test/tree">Дерево</a>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
            </tr>
            </thead>
            <tbody>
            <? if(is_array($data['result'])):?>
                <? foreach($data['result'] as $item):?>
                    <tr>
                        <td><?=$item['id'];?></td>
                        <td><?=$item['name'];?></td>
                        <td><?=$item['parent'];?></td>
                    </tr>
                <? endforeach;?>
            <? else:?>
                <tr>
                    <td colspan="2">Нет данных</td>
                </tr>
            <? endif;?>
            </tbody>
        </table>
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>