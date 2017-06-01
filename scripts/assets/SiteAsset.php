<?php
namespace app\assets;

use yii\web\AssetBundle;

class SiteAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $sourcePath = '@app';
    public $css = [
        'scripts/styles/styles.css',
        'scripts/styles/theme.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\assets\FontAwesomeAsset'
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
