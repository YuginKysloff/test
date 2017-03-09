<? defined('CONSTANT') or die;?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Тестовое задание</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/views/css/style.css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Тестовое задание</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?=($data['route']['method'] == 'index') ? 'class="active"' : ''?>><a href="/">Главная</a></li>
                        <? for($i = 1; $i < 9; $i++):?>
                            <li <?=($data['route']['method'] == 'task'.$i) ? 'class="active"' : ''?>><a href="/test/task<?=$i;?>">Задача <?=$i;?></a></li>
                        <? endfor;?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>