<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Roommessage;
use yii\web\UploadedFile;
class HomeController extends CommenController
{
    /**
     * @return string
     */
    public function actionForm(){

        $tel=\Yii::$app->request->post("tel");
        //echo $tel;
        $model = new Roommessage();
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        return $this->renderPartial('index',array('model'=>$model,'tel'=>$tel,'count'=>$res));

    }
    public $enableCsrfValidation = false;
    public function actionAddhome(){
        $request = \Yii::$app->request;
        $post = $request->post();
       // print_r($post);
        $h_deploy=implode(",",$post['h_deploy']);
        //echo $h_deploy;
        $model = new Roommessage();
        if (\Yii::$app->request->isPost) {
            $aa=$model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            //print_r($aa);die;
            for($i=0;$i<count($aa);$i++){
                $file[]=$aa[$i]->name;
            }
           $filename=implode("|",$file);
           if ($model->upload()) {
               $db=\Yii::$app->db->createCommand();
			   $time=time();
              $res= $db->insert('roommessage',['h_direction'=>$post['h_direction'],'h_tel'=>$post['h_tel'],'h_name'=>$post['h_name'],'h_site'=>$post['h_site'],'h_price'=>$post['h_price'],'h_type'=>$post['h_type'],'h_desc'=>$post['h_desc'],'h_acreage'=>$post['h_acreage'],'h_deploy'=>$h_deploy,'imageFile'=>$filename,'h_register_time' => $time])->execute();
			  $lastid=Yii::$app->db->getLastInsertID();
			  $db->insert('house_img',['room_id' => $lastid])->execute();
                if($res){
                    $db=\Yii::$app->db->createCommand();
                    $db->update('host',['h_status'=>1],"h_tel=:id",[":id"=>$post['h_tel']])->execute();
                   return $this->redirect(array("lists"));
                }
            }
        }

    }
    public function actionLists(){
        $query = Roommessage::find();
        $pages = new Pagination([
            'totalCount' =>$query->count(),
            'defaultPageSize' => 3,
        ]);
        $lists = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        //print_r($lists);
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        return $this->renderPartial('list', [
            'list' => $lists,
            'pages' => $pages,
            'count' =>$res,
        ]);
    }
}
