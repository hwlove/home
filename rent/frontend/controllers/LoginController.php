<?php

namespace frontend\controllers;
class LoginController extends \yii\web\Controller{
	public $enableCsrfValidation = false;
    public function actionIndex()
    {
        return $this->renderPartial('login');
    }
	//检测登录
	public function actionCheck_login(){
		//接值
		$back_name=\Yii::$app->request->post("back_name");
		$back_pwd=\Yii::$app->request->post("back_pwd");
		$remember_pwd=\Yii::$app->request->post("remember_pwd");
        //echo $remember_pwd;die;
       //var_dump($remember_pwd);
		//查数据库检测登录
		$sql="select * from back_login where back_name='$back_name'";
		$connection=\Yii::$app->db->createCommand($sql);
		$arr=$connection->queryOne();

		if($arr){
			if($arr['back_pwd']==sha1(md5($back_pwd))){

                $num=\Yii::$app->cache->get($back_name);
                if($num==3){
                    echo "4";
                }else{
                       \Yii::$app->cache->delete($back_name);
                        //密码ok 记住用户
                        $session = \Yii::$app->session;
                        $session->open();
                        $session->set("back_name", $back_name);
                        $sessionID=$_COOKIE['PHPSESSID'];
                        //获取缓存去的sessionid
                        \Yii::$app->cache->get($back_name . "session");
                        \Yii::$app->cache->set($back_name . "session", $sessionID);
                        //把登录是的时间存入cookie
                        $cookies = \Yii::$app->response->cookies;
                        $cookies->add(new \yii\web\Cookie([
                            'name' => $back_name,
                            'value' => time(),
                        ]));

                        if ($remember_pwd == "1") {
                            //echo $back_pwd;
                            //选中了记住密码,把用户名和密码存session,记录时间
                            $cookies = \Yii::$app->response->cookies;
                            $cookies->add(new \yii\web\Cookie([
                                'name' => $back_name."pwd",
                                'value' => $back_pwd,
                            ]));
                            //按照用户名把密码存起来
                            echo "1";
                        }
                        if($remember_pwd != "1"){
                            $cookies = \Yii::$app->response->cookies;
                            $cookies->remove($back_name.'pwd');
                            echo "1";
                        }
                }

			}else{

                $num=\Yii::$app->cache->get($back_name);

                if($num==3){
                    //连续输错3次的时间戳
                    $time=time();
                    //今天的日期
                    $date=date("Y-m-d");
                    //明天凌晨
                    $tomorrow=strtotime($date)+24*60*60;
                    $lo=$tomorrow-$time;
                    \Yii::$app->cache->set($back_name,$num,$lo);
                    echo "0";
                }else{
                    //密码错误的时间戳
                    $time=time();
                    //今天的日期
                    $date=date("Y-m-d");
                    //明天凌晨
                    $tomorrow=strtotime($date)+24*60*60;
                    $lo=$tomorrow-$time;
                    $number=$num+1;
                    \Yii::$app->cache->set($back_name,$number,$lo);
                    echo "2";
                }
			}
		}else{
			echo "3";
		}
	}
    public function actionTest(){
        print_r($_COOKIE);
    }
    //3次密码错误禁止登录
    public function actionBan(){
        $name=\Yii::$app->request->get("name");
        $num=\Yii::$app->cache->get($name);
        if($num==3){
            echo "0";
        }else{
            echo "1";
        }
    }
	//添加管理员
	public function actionAddmanager(){
		$back_email=\Yii::$app->request->post("back_email");
		$back_name=\Yii::$app->request->post("back_name");
		$back_pwd=sha1(md5(\Yii::$app->request->post("back_pwd")));
		$connection=\Yii::$app->db->createCommand()->insert('back_login',[
			'back_name'=>$back_name,
			'back_pwd'=>$back_pwd,
			'back_email'=>$back_email
			 ])->execute();
		if($connection){
			echo "<script>alert('注册成功');location.href='index.php?r=login/index'</script>";
		}else{
			echo "<script>alert('重新注册');</script>";
		}
	}
	//访问密码
	public function actionAsk_session(){
		$name=$_POST['back_name'];
        $cookies = \Yii::$app->request->cookies;
		$back_pwd=$cookies->getValue($name."pwd", '0');
		echo $back_pwd;
	}
    //退出
    public function actionClean(){
        $session = \Yii::$app->session;
        $session->remove('back_name');
        echo "<script>location.href='index.php?r=login/index'</script>";

    }
    //用户是否存在
    public function actionCheckname(){
        $name=\Yii::$app->request->get("b_name");
        $user=\Yii::$app->db->createCommand("SELECT back_name FROM back_login where back_name =:id ")->bindValue(":id",$name)->queryOne();
        if($user){
            echo "0";
        }else{
            echo "1";
        }
    }
}
