<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 21:37
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class MemberController extends Controller
{
    public $layout = 'main';
    //会员列表
    public function actionIndex()
    {
        return $this->render('index');
    }

    //会员详情
    public function actionInfo()
    {
        return $this->render('info');
    }

    //会员编辑
    public function actionSet()
    {
        return $this->render('set');
    }

    //会员评论
    public function actionComment()
    {
        return $this->render('comment');
    }
}