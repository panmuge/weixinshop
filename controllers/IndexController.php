<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/5
 * Time: 20:52
 */

namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}