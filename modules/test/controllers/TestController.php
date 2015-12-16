<?php

namespace app\modules\test\controllers;

class TestController extends \yii\web\Controller
{
    public $layout = 'test_new';
    public $defaultAction = 'index';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
