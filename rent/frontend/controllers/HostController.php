<?php
namespace frontend\controllers;
use Yii;
use yii\web\UploadedFile;
use yii\data\Pagination;
use frontend\models\Host;

/**
 * Class HostController  房源管理
 * @package frontend\controllers
 */
class HostController extends CommenController
{
	public $layout=false;
    public $enableCsrfValidation = false;
	//展示添加房东页面
    public function actionIndex()
    {
		$model = new Host();
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        return $this->render('index',array('model'=>$model,'count'=>$res));
    }
    //添加房东
    public function actionAdd(){
		$name=\Yii::$app->request->post("name");
		$tel=\Yii::$app->request->post("tel");
		$message=\Yii::$app->request->post("message");
        //echo $name;die;
		$model = new Host();

        if (\Yii::$app->request->isPost) {
            $a=$model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
			//print_r($a);die;
			for($i=0;$i<count($a);$i++){
				$img[]=$a[$i]->name;
			}
			$str=implode('|',$img);
			//var_dump($str);
            if ($model->upload()) {
				$db = \Yii::$app->db->createCommand();
				$re=$db->insert('host' , ['h_name'=>$name,'h_tel'=>$tel,'h_message'=>$message,'imageFile'=>$str] )->execute();
				if($re){
					$this->redirect(array('lists'));
				}
            }
        }
    }
    //列表展示
    public function actionLists(){
        $query = Host::find();
        $pages = new Pagination([
            'totalCount' =>$query->count(),
            'defaultPageSize' => 5,
        ]);
        $lists = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        //print_r($lists);
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        return $this->render('list', [
            'lists' => $lists,
            'pages' => $pages,
            'count' =>$res,
        ]);
    }
	//删除
	public function actionDel(){
		$id=\Yii::$app->request->get("id");
		//echo $id;die;
		$db = \Yii::$app->db->createCommand();
		$del=$db->delete('host' , "h_id=:id" , [':id' => $id] )->execute();
		if($del){
			echo "1";
		}
	}
	//批删
	public function actionDels(){
		$ids=\Yii::$app->request->post('ids');
		//echo $ids;
		$db=\Yii::$app->db->createCommand();
		$res=$db->delete('host',"h_id in ($ids)")->execute();
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}
}
