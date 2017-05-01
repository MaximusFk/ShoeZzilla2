<?php
namespace app\controllers;

use yii\web\Controller;

class DefaultController extends Controller {
    
    private $index = 'index';
    
    public function actionIndex() {
        return $this->render($this->index);
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ]
        ];
    }

}
