<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 22:29
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class FinanceController extends Controller
{
    public $layout = 'main';
    //账户列表
    public function actionIndex()
    {
        return $this->render('index');
    }

    //订单流水
    public function actionAccount()
    {
        return $this->render('account');
    }

    //订单详情
    public function actionPayInfo()
    {
        return $this->render('pay_info');
    }

}