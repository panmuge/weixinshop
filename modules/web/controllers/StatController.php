<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 22:53
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class StatController extends Controller
{
    public $layout = 'main';
    //财务统计
    public function actionIndex()
    {
        return $this->render('index');
    }

    //商品统计
    public function actionProduct()
    {
        return $this->render('product');
    }

    //用户统计
    public function actionMember()
    {
        return $this->render('member');
    }

    //分享统计
    public function actionShare()
    {
        return $this->render('share');
    }
}