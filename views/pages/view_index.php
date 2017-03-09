<? defined('CONSTANT') or die;?>

<? require_once(DIR_ROOT.'/views/pages/layouts/header.php');?>

    <div class="content">
        <? foreach ($data['users'] as $user):?>
            <?=$user['name'];?>
        <? endforeach;?>
    </div>

<? require_once(DIR_ROOT.'/views/pages/layouts/footer.php'); ?>