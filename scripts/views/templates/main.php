<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

use app\assets\SiteAsset;


SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <header>
        <div class="header-main"></div>
    <?php Navbar::begin(); ?>
    <?= Nav::widget([
        'items' => [
            ['label' => ' ' . Yii::t('header', 'Home'), 'url' => ['/'], 'linkOptions' => [ 'class' => 'fa fa-home' ]],
            ['label' => ' ' . Yii::t('header', 'Catalog'), 'url' => ['/catalog/shoes/list'],
                'linkOptions' => [ 'class' => 'fa fa-shopping-bag' ]
            ],
            ['label' => ' ' . Yii::t('header', 'Articles'), 'url' => ['#'], 'linkOptions' => [ 'class' => 'fa fa-align-left' ]],
            ['label' => ' ' . Yii::t('header', 'About'), 'url' => ['/about'], 'linkOptions' => [ 'class' => 'fa fa-info-circle' ]]
        ],
        'options' => [
            'class' => 'nav navbar-nav nav-pills'
        ]
    ]); ?>
    <?= Nav::widget([
        'items' => [
            [ 'label' => '', 'url' => ['#'], 'linkOptions' => ['class' => 'fa fa-user'] ],
            [ 'label' => '', 'url' => ['#'], 'linkOptions' => ['class' => 'fa fa-shopping-cart'] ]
        ],
        'options' => [
            'class' => 'nav navbar-nav nav-pills navbar-right'
        ]
    ]); ?>
    <?php NavBar::end(); ?>
    </header>
    <?php $this->beginBody() ?>
    <?= $content ?>
    <footer>ShoeZzilla &copy; <?= date('Y'); ?></footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
