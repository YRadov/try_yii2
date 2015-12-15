<?php

namespace app\modules\admin;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        $this->setLayoutPath('app/modules/admin/views/layouts/main.php');

        // custom initialization code goes here
    }
}
