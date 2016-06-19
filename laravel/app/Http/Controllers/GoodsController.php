<?php 
namespace App\Http\Controllers;
header('content-type:text/html;charset=utf-8');
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect, Input;
use Illuminate\Html\HtmlFacade;
use App\Comment;
use Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
/**
 * GoodsController 
 * 商品信息控制器
 * 2016/5/28
 */
class GoodsController extends Controller {
	public function index(){
		//地址显示
		$region_province=DB::table('front_region')->where('region_type','=','1')->get();
        //图片展示
        $img = DB::select("select goods_pic from goods_city limit 3");
        $greet = DB::select("select * from goods_city limit 3");
        //$exemplary = DB::select("select  * from roommessage inner join house_img on roommessage.h_id=house_img.room_id  limit 3,4");
		//$data['img']=DB::table('house_img')->get();
		return view('goods/list',['img'=>$img,"greet"=>$greet]);die;
	}
	//查看商品详情
	public function detail(){
		$goods_id=Input::get("goods_id");
		$goods_data=DB::select("select * from goods_city where goods_id=$goods_id");
		//print_r($goods_data);die;
		$sort=$goods_data[0]->goods_sort;
		$goods_similar=DB::select("select * from goods_city where goods_sort='$sort' limit 5");
		//print_r($goods_similar);die;
		return view('goods/goods_detail',['goods_data'=>$goods_data[0],'goods_similar'=>$goods_similar]);
	}
	//查看更多商品
	public function moregoods(){
		$goods_data=DB::select("select * from goods_city limit 8");
		return view('goods/more_list',['goods_data'=>$goods_data]);
	}
	//厨房用品
	public function kitchen(){
		$kitchen_data=DB::select("select * from goods_city where goods_sort like '%厨房%'");
		//print_r($kitchen_data);die;
		return view('goods/kitchen_list',['kitchen_data'=>$kitchen_data ]);
	}
	//生活日用
	public function life(){
		$life_data=DB::select("select * from goods_city where goods_sort like '%生活%'");
		return view('goods/life_list',['life_data'=>$life_data ]);
	}
	//家纺寝居
	public function textiles(){
		$textiles_data=DB::select("select * from goods_city where goods_sort like '%家纺%'");
		return view('goods/textiles_list',['textiles_data'=>$textiles_data ]);
	}
	//精品家具
	public function boutique(){
		$boutique_data=DB::select("select * from goods_city where goods_sort like '%精品%'");
		return view('goods/boutique_list',['boutique_data'=>$boutique_data ]);
	}

    /**
     * 立即兑换
     */

    //判断是否登录
    public function exchange(){
        $username = Session::get('username');
        //echo $username;
        if($username==""){
            echo 0;
        }else{
            echo 1;
        }
    }
    //判断积分
    public function SelNum(){
        $username = Session::get('username');
        $price=Input::get('score');

        $score = DB::table('front_login')->where('front_name', "$username")->pluck('front_score');

        if($price<$score){
            echo 1;
        }else{
            echo 0;
        }

    }
    //立即兑换
    public function adds(){
        //添加
        $goods_name=Input::get('goods_name');
        $s_time=date('Y-m-d H:i:s');
        $s_name = Session::get('username');
        $result=DB::table('shop')->insert(
            [
                'goods_name' => $goods_name,
                's_time' => $s_time,
                's_name' => $s_name
            ]
        );
        if($result){
            echo "1";
        }
        //查询
        $username = Session::get('username');
        $front_score = DB::table('front_login')->where('front_name', $username)->pluck('front_score');
        $score=Input::get('score');
        $now=$front_score-$score;
        //更新
        DB::table('front_login')
            ->where('front_name',$s_name)
            ->update(['front_score' => $now]);
    }
    //积分商城列表
    public function lists(){
        $lists = DB::table('shop')->paginate(3);
        //print_r($lists);exit;
        return view('goods/goods_list',['list'=>$lists]);
    }
}
?>