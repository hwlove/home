<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect, Input;
use Illuminate\Html\HtmlFacade;
use App\Comment;
use Session;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FrontController
 * @package App\Http\Controllers
 * 用户中心
 * 作者：张文君
 * 时间：2016/5/28
 *
 */
class PersonalController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * @首页展示
	 *
	 * @return void
	 */
	public function index()
	{

        $u_id = Session::get('userid');
        if($u_id==""){
            echo "<script>alert('您还未曾登陆，请先登陆')</script> ";
            return redirect()->action('FrontController@login');
        }
        $results = DB::select("select * from front_login where front_id = $u_id");
        return view('personal/index',['u_message'=>$results]);
	}
    /**
     * @收藏列表
     */
    public function collect()
    {
        $u_id = Session::get('userid');
        $posts = DB::table('collect')->join("roommessage","collect.house_id","=","roommessage.h_id")->where('collect.user_id' ,"=",$u_id)->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = null);
        //$results = DB::select("select * from collect  inner join   roommessage  on collect.house_id=roommessage.h_id where user_id = $u_id");
        return view('personal/collect_list',['collect'=>$posts]);
    }

    /**
     * @收藏列表删除
     */
    public function contactdel()
    {
        $hou_id = Input::get('hou_id');
        $u_id = Session::get('userid');
        $results = DB::delete("delete  from collect where user_id = $u_id and house_id=$hou_id");
        if($results){
            return redirect()->action('PersonalController@collect');
        }
    }
    /**
     * @预约列表
     */
    public function subscribe()
    {
        $u_id = Session::get('userid');
        $results = DB::table('orders')->where('u_id' ,"=",$u_id)->paginate(3);
       // $results = DB::select("select * from orders where u_id = $u_id ");
        return view('personal/subscribe_list',['subscribe'=>$results]);
}
    // 预约删除
    public function subscribedel(){
        $order_id = Input::get('order_id');
        $results = DB::delete("delete  from orders where order_id = $order_id ");
        if($results){
            return redirect()->action('PersonalController@subscribe');
        }
    }

}
