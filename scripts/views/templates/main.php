<?php
use yii\helpers\Html;

use app\assets\SiteAsset;


SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <header>ShoeZzilla</header>
    <?= $content ?>
    <footer>ShoeZzilla &copy; <?= date('Y'); ?></footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
