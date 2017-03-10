<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">
        <h1 class="page-header">Задача 5</h1>
        <h2 class="sub-header">Полученный результат</h2>
        <hr>
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
        <hr>
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>