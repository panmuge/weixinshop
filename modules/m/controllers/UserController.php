<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:27
 */

namespace app\modules\m\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public $layout = 'main';
    //账号绑定
    public function actionBind()
    {
        return $this->render('bind');
    }

    public function actionCart()
    {
        return $this->render('cart');
    }

    //我的订单
    public function actionOrder()
    {
        return $this->render('order');
    }

    //我的
    public function actionIndex()
    {
        return $this->render('index');
    }

    //地址列表
    public function actionAddress()
    {
        return $this->render('address');
    }

    //地址编辑
    public function actionAddressSet()
    {
        return $this->render('address_set');
    }

    //我的收藏
    public function actionFav()
    {
        return $this->render('fav');
    }

    //我的评论列表
    public function actionComment()
    {
        return $this->render('comment');
    }

    //我的评论
    public function actionCommentSet()
    {
        return $this->render('comment_set');
    }
}