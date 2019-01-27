<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:01
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'main';
        return $this->render('index');
    }
}