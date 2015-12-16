<?php

namespace app\modules\test;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\test\controllers';

    public $defaultRoute = 'test';


    public function init()
    {
        parent::init();
        //$this->defaultRoute = 'test';
        // custom initialization code goes here
    }
}
