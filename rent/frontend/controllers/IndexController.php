<?php

namespace frontend\controllers;

class IndexController extends CommenController
{
    public function actionIndex()
    {
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        return $this->renderPartial('index',['count'=>$res]);
    }

}
