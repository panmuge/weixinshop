<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/13
 * Time: 21:48
 */

namespace app\modules\m\controllers;

use yii\web\Controller;

class PayController extends Controller
{
    public $layout = 'main';

    //微信支付
    public function actionBuy()
    {
        return $this->render('buy');
    }
}