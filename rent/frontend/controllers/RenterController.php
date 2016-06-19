<?php

namespace frontend\controllers;
use app\models\Comment;
use app\models\FrontLogin;
use Yii;
use frontend\models\Renter;
use yii\data\Pagination;

/**
 * Class RenterController
 * @package frontend\controllers
 *作者：张文君
 *功能：租客管理
 */
class RenterController extends CommenController
{
    //租家列表
    public function actionIndex()
    {
        //租家列表分页
        $query = FrontLogin::find();
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize'   => 5,
        ]);
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        $models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
        return $this->renderPartial('renter_list.html', ['renter_list' => $models,
        'pages' => $pages,'count'=>$res]);
    }
//租客的批量删除和单删
    public function actionBatchdel()
    {
        $id=Yii::$app->request->post('id');
        $judge = explode(",",$id);
        $connection = \Yii::$app->db;
        $command = $connection->createCommand("delete from front_login where front_id in ('$id')");
        $come=$command->execute();
        if(count($judge)==1){
            echo 2;
        }else{
            if($come){
                echo 1;
            }else{
                echo 0;
            }
        }
    }
    //租客评论列表
    public function actionReview(){
        //租家列表分页
        $query = Comment::find();
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize'   => 5,
        ]);
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        $models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
        return $this->render('rcomment_list.html', [         'rcomment_list' => $models,
            'pages' => $pages,'count'=>$res    ]);
    }
    //租客评论管理（批量删除和单删）
   public function actionCdelall(){
       $id=\Yii::$app->request->post('id');
       $judge= explode(",",$id);
       $connection = \Yii::$app->db;
       $command = $connection->createCommand("delete from comment where c_id in ('$id')");
       $come=$command->execute();
       if(count($judge)==1){
           echo 2;
       }else{
           if($come){
               echo 1;
           }else{
               echo 0;
           }
       }
    }
    //用户个人信息
    public function actionDetails(){
        $id=\Yii::$app->request->get('id');
        $connection = \Yii::$app->db;
        $command = $connection->createCommand("select * from front_login where front_id=$id");
        $come=$command->queryAll();
        return $this->render('profile.html', [ 'user' => $come]);
    }
    //解锁/锁定
    public function actionLock(){
        $id= Yii::$app->request->post('id');
        $state= Yii::$app->request->post('state');
        //var_dump($state);die;
        if($state==1){
            $state=0;
        }else{
            $state=1;
        }
        $connection = \Yii::$app->db;
        $command = $connection->createCommand("update  front_login set front_state=$state where front_id=$id");
        $come=$command->execute();
        if($come){
          if($state==0){
              echo 0;
          } else{
              echo 1;
          }
        }
    }
}
