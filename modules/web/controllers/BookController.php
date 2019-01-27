<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/9
 * Time: 0:27
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class BookController extends Controller
{
    public $layout = 'main';
    //列表页
    public function actionIndex()
    {
        return $this->render('index');
    }

    //图书编辑页面
    public function actionSet()
    {
        return $this->render('set');
    }

    //图书详情
    public function actionInfo()
    {
        return $this->render('info');
    }

    //图书相册
    public function actionImages()
    {
        return $this->render('images');
    }

    //分类列表
    public function actionCat()
    {
        return $this->render('cat');
    }

    //分类编辑
    public function actionCatSet()
    {
        return $this->render('cat_set');
    }
}