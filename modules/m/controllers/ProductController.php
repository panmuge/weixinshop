<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:47
 */

namespace app\modules\m\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public $layout = 'main';

    //商品列表
    public function actionIndex()
    {
        return $this->render('index');
    }
    //商品详情
    public function actionInfo()
    {
        return $this->render('info');
    }

    //下单页面
    public function actionOrder()
    {
        return $this->render('order');
    }

}