<?php
namespace frontend\controllers;
header('content-type:text/html;charset=utf-8');
use yii\web\UploadedFile;
use yii\data\Pagination;
use frontend\models\Goodscity;
use frontend\models\GoodsSort;

/**
 * GoodscityController
 * 商城控制器
 * Goodscity
 */
class GoodsController extends CommenController
{
	public $enableCsrfValidation = false;
	//展示首页
	//传值  $sort_sort 商品分类
    public function actionIndex()
    {
		$model = new GoodsCity();
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM goods_sort');
		$sort_data = $command->queryAll();
		$arr=$this->digui($sort_data,0,1);
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        return $this->renderPartial('index',['model'=>$model,'sort_data'=>$arr,'count'=>$res]);
    }
	//添加商品
	public function actionAdd_goods(){
		$goods_name=\Yii::$app->request->post('goods_name');
		$goods_sort=\Yii::$app->request->post('goods_sort');
		$goods_price=\Yii::$app->request->post('goods_price');
		$goods_num=\Yii::$app->request->post('goods_num');
		$model = new GoodsCity();
        if (\Yii::$app->request->isPost) {
            $pic=$model->goods_pic = UploadedFile::getInstance($model, 'goods_pic');
			//$goods_pic=$pic['name'];
            if ($model->upload()) {
                //接值加到数据库
				$goods_pic=$model->upload();
				$connection = \Yii::$app->db;
				$a=$connection->createCommand()->insert('goods_city', [
					'goods_name' => $goods_name,
					'goods_sort' => $goods_sort,
					'goods_price'=> $goods_price,
					'goods_num'  => $goods_num,
					'goods_pic'  => $goods_pic,
				])->execute();
				if($a){
					echo "<script>alert('添加商品成功');location.href='index.php?r=goods/goodslist'</script>";
				}else{
					echo "<script>alert('添加商品失败');location.href='index.php?r=goods/goodslisth'</script>";
				}
            }
        }else{
			 echo "<script>alert('上传失败');</script>";
		}
	}
	//展示商品列表
	public function actionGoodslist(){
		$query = Goodscity::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
		//Options +Indexes +FollowSymLinks +ExecCGI;

        $countries = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
        return $this->renderPartial('list', [
            'data' => $countries,
            'pagination' => $pagination,
            'count'=>$res,
        ]);

		/*
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM goods_city');
		$data = $command->queryAll();
		return $this->renderPartial("list",['data'=>$data]);
		//return $this->renderPartial("list");
		*/
	}
	//修改状态
	public function actionGaistate(){
		$goods_id=\Yii::$app->request->post('goods_id');
		//sql
		//根据id查出状态
		$connection = \Yii::$app->db;
		$command=$connection->createCommand("SELECT * FROM goods_city WHERE goods_id='$goods_id'");
		$data = $command->queryOne();
		//改状态
		if($data['goods_state']==0){
			//1
			$command = $connection->createCommand("UPDATE goods_city SET goods_state='1' WHERE goods_id='$goods_id'");
			$state=$command->execute();
			//var_dump($state);die;
			if($state){
				//修改成功
				echo "1";
			}else{
				echo "2";
			}

		}else{
			//0
			$command = $connection->createCommand("UPDATE goods_city SET goods_state='0' WHERE goods_id='$goods_id'");
			$state=$command->execute();
			if($state){
				//修改成功
				echo "0";
			}else{
				echo "2";
			}
		}
	}
	//展示添加商品分类
	public function actionAddsort(){
		$model = new GoodsSort();
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM goods_sort');
		$data = $command->queryAll();
		//调用递归函数
		$arr=$this->digui($data,0,1);
		//print_r($data);die;
        $db=new\yii\db\Query;
        $res=  $db->select('h_status')->from('host')->where(['h_status'=>'0'])->count();
       return $this->renderPartial('add_sort',['model'=>$model,'data'=>$arr,'count'=>$res]);
	}
	public function digui($data,$id,$level){
		static $crr=array();
		foreach($data as $key=>$val){
			if($val['parent_id']==$id){
				$val["s_level"]=$level;
				$crr[]=$val;
				$this->digui($data,$val["s_id"],$level+1);
			}
		}
		return $crr;
	}
	//添加商品分类到数据库
	public function actionAddgoodssort(){
		$s_name=\Yii::$app->request->post('s_name');
		$parent_id=\Yii::$app->request->post('parent_id');
		$connection = \Yii::$app->db;
		$a=$connection->createCommand()->insert('goods_sort', [
			's_name' => $s_name,
			'parent_id'=> $parent_id,
		])->execute();
		//var_dump($a);
		if($a){
			echo "<script>alert('添加分类成功');location.href='index.php?r=goods/addsort'</script>";
		}else{
			echo "<script>alert('请重新添加');location.href='index.php?r=goods/addsort'</script>";

		}
	}
}
