<?php

namespace app\modules\admin\controllers;

use app\models\Country;

class CountryController extends \yii\web\Controller
{
    public $layout = "admin";

    public function actionIndex()
    {
        return $this->render('index');
    }

}
