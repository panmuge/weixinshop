<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/8
 * Time: 23:06
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class AccountController extends Controller
{
    public $layout = 'main';
    //首页
    public function actionIndex()
    {
        return $this->render('index');
    }

    //添加编辑
    public function actionSet()
    {
        return $this->render('set');
    }

    //账户详情
    public function actionInfo()
    {
        return $this->render('info');
    }

}