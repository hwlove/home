<?php

namespace frontend\controllers;
header("content-type:text/html;charset=utf-8");
class CommenController extends \yii\web\Controller
{
    function __construct($id, $module, $config = [])
    {
        $this->id = $id;
        $this->module = $module;
        $session = \Yii::$app->session;
        $session->open();
        $name= $session->get("back_name");

        /***************************************************************/

        $cookies = \Yii::$app->request->cookies;
        $time = $cookies->getValue($name, 'en');
        $newtime=time();
        if(($newtime-$time)>20*60){
            $session = \Yii::$app->session;
            $session->remove('back_name');
            echo "<script>location.href='index.php?r=login'</script>";die;
        }else{
            $cookies = \Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => $name,
                'value' => time(),
            ]));
        }
        /***************************************************************/
        if(empty($name)){
            echo "<script>alert('请先登录');location.href='index.php?r=login'</script>";die;
        }
        $sessionID=$_COOKIE['PHPSESSID'];
        $id= \Yii::$app->cache->get($name . "session");
        if($id!=$sessionID){
            $session = \Yii::$app->session;
            $session->remove('back_name');
            echo "<script>alert('你的账户在其他地方登录，已强制退出');location.href='index.php?r=login'</script>";die;
        }
    }

}
