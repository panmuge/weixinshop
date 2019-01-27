<?php

namespace app\modules\m\controllers;

use yii\web\Controller;


class DefaultController extends Controller
{
    public function init()
    {
        $this->layout = 'main';
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
