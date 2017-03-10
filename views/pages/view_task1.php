<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">

        <h1 class="page-header">Задача 1</h1>
        <h2 class="sub-header">Случайный текст</h2>
        <p><?=($data['text']) ? $data['text'] : 'Файл не найден';?></p>
        <hr>
        <h2 class="sub-header">Полученный результат</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Ключ</th>
                    <th>Данные</th>
                </tr>
            </thead>
            <tbody>
                <? if($data['text']):?>
                    <? foreach($data['result'][1] as $key => $item):?>
                        <tr>
                            <td><?=$item;?></td>
                            <td><?=$data['result'][3][$key];?></td>
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
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Ключ</th>
                    <th>Описание</th>
                </tr>
            </thead>
            <tbody>
            <? if($data['text']):?>
                <? foreach($data['result'][1] as $key => $item):?>
                    <tr>
                        <td><?=$item;?></td>
                        <td><?=$data['result'][2][$key];?></td>
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