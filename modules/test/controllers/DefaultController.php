<?php

namespace app\modules\test\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{

    public $layout = 'test';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
