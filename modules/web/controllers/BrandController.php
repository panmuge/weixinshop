<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/9
 * Time: 0:14
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class BrandController extends Controller
{
    public $layout = 'main';
    //品牌详情
    public function actionInfo()
    {
//        $arr = [1,45,56,9,85,56,23];
//        $arr = $this->quickSort($arr);
//        var_dump($arr);
        return $this->render('info');
    }
    //品牌编辑
    public function actionSet()
    {
        return $this->render('set');
    }
    //品牌相册
    public function actionImages()
    {
        return $this->render('images');
    }

    public function quickSort(&$arr){
        if(count($arr)>1){
            $k=$arr[0];
            $x=array();
            $y=array();
            $_size=count($arr);
            for($i=1;$i<$_size;$i++){
                if($arr[$i]<=$k){
                    $x[]=$arr[$i];
                }elseif($arr[$i]>$k){
                    $y[]=$arr[$i];
                }
            }
            $x= $this->quickSort($x);
            $y= $this->quickSort($y);
            return array_merge($x,array($k),$y);
        }else{
            return $arr;
        }
    }
}