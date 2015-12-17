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

    public function actionChekUser()
    {
        if(\Yii::$app->user->isGuest)
        {
            $message ='Пользователь НЕ авторизован';
            return $this->render('chek-user', ['message'=>$message]);
        }
        else
        {
            $message ='Пользователь Aвторизован';
            return $this->render('chek-user', ['message'=>$message]);
        }
    }

}
