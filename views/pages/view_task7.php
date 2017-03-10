<? defined('CONSTANT') or die;?>
<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="container">
        <h1 class="page-header">Задача 7</h1>
        <h2 class="sub-header">Тестовый массив</h2>
        <? foreach($data['input'] as $item):?>
            <p>
                <? foreach ($item as $value):?>
                    <?=$value?>,
                <? endforeach;?>
            </p>
        <? endforeach;?>
        <hr>
        <h2 class="sub-header">Полученный результат</h2>
        <? foreach($data['result'] as $item):?>
            <p>
                <? foreach ($item as $value):?>
                    <?=$value?>,
                <? endforeach;?>
            </p>
        <? endforeach;?>
        <hr>
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>