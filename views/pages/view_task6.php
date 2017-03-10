<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">
        <h1 class="page-header">Задача 6</h1>
        <h2 class="sub-header">Полученный результат</h2>
        <hr>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Элемент</th>
                    <th>Кол-во повторений</th>
                </tr>
            </thead>
            <tbody>
            <? if(is_array($data['result'])):?>
                <? foreach($data['result'] as $key => $item):?>
                    <tr>
                        <td><?=$key;?></td>
                        <td><?=$item;?></td>
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