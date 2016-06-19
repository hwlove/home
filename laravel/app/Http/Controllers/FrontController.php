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
use Illuminate\Pagination\Paginator;
class FrontController extends Controller {

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
		//地址显示
		$region_province=DB::table('front_region')->where('region_type','=','1')->get();
        //图片展示
        $img = DB::select("select img_name from house_img where room_id='empty'");
        $greet = DB::select("select img_name,h_price from roommessage inner join house_img on roommessage.h_id=house_img.room_id  limit 3");
        $exemplary = DB::select("select  * from roommessage inner join house_img on roommessage.h_id=house_img.room_id  limit 3,4");
		//$data['img']=DB::table('house_img')->get();
		return view('front.index',['img'=>$img,"greet"=>$greet,"exemplary"=>$exemplary,'region_province' =>$region_province]);die;
		
	}

	/**
	 * @登录
	 */
	public function login(){
        $act=Input::get('act');
        //echo $act;
        Session::put(['act'=>$act]);
		return view('front.login');	
	}
    public function qqlogin(){
        $posts=Input::all();
        Session::put(['username' => $posts['name']]);
        return redirect()->action('FrontController@index');
    }
	public function loginpro(){
		$posts=Input::all();
		if($posts){
			$seluser=DB::table('front_login')->where('front_name', $posts['username'])->first();
			if($seluser){
				$pwd=$seluser->front_pwd;
				if($pwd == md5($posts['userpwd'])){
					Session::put(['username' => $seluser->front_name,'userid' => $seluser->front_id,'usertel' => $seluser->front_tel]);
                    //取session的act//取session的fast
                    $h_id=Session::get('h_id');
                    $act=Session::get('act');
                    if($act==""&$h_id==""){
                        return redirect()->action('FrontController@index');
                    }elseif($act!=""){
                        return redirect()->action('GoodsController@detail',['goods_id'=>$act]);
                    }else{
                        return redirect()->action('HouseController@housecon',['hou_id'=>$h_id]);
                    }
				}else{
					return redirect()->action('FrontController@login');
					exit('密码错误');
				}
			}else{
				return redirect()->action('FrontController@login');
				exit('用户不存在');
			}
		}
		
		return view('front.index');
		

	}

	/**
	 * @注册
	 */
	public function register(){
		return view('front.register');
	}
	public function registeruser()
    {
        $data = Input::all();
        //文件上传
        $file = Input::file('myfile');
        //var_dump($file);die;
        if ($file->isValid()) {
            $clientName = $file->getClientOriginalName();

            $tmpName = $file->getFileName();
            $realPath = $file->getRealPath();
            $entension = $file->getClientOriginalExtension();
            $mimeTye = $file->getMimeType();
            $newName = md5(date('ymdhis') . $clientName) . "." . $entension;
            $path = $file->move('./uploads', $newName);


            //添加用户
            if ($data) {
                $pwd = md5($data['userpwd']);
                $row = DB::insert('insert into front_login (front_name,front_pwd,front_tel,front_img) values (?, ?, ?, ?)', [
                    $data['username'],
                    $pwd,
                    $data['userphone'],
                    $newName
                ]);
                if (!$row) {
                    exit('注册失败');
                }
            }
            return view('front.login');
        }
    }
	/**
	 *	@有关搜索
	 */
	public function housesingle(){
		$page=Input::get('page')?Input::get('page'):'';
		$posts=Input::get()?Input::get():'';
		$region_province=DB::table('front_region')->where('region_type','=','1')->get();
		//判断是否有搜索值
		if(@(!$posts['h_provice'] & !$posts['h_city'] & !$posts['h_vill']) & @(($posts['searchtime'] == 'SearchAddress') & ($posts['searchposition'] == 'SearchAddress')) || !$posts || $page){
			$houseinfo = DB::table('roommessage')
						->join('house_img', 'roommessage.h_id', '=', 'house_img.room_id')
						->select("*")
						->Paginate(5);
			//var_dump($houseinfo);die;
			return view('front.housesingle',['house' => $houseinfo, 'region_province' => $region_province]);
			exit();
		}
		
		//执行多条件查询
		if($posts['searchtime']!='SearchAddress' || $posts['searchposition']!='SearchAddress'){
			$variable=@($posts['searchtime']!='SearchAddress')?$posts['searchtime']:$posts['searchposition'];
		}else{
			if($posts['h_vill']){
				$pid = $posts['h_vill'];
			}else if($posts['h_city']){
				$pid = $posts['h_city'];
			}else if($posts['h_provice']){
				$pid = $posts['h_provice'];
			}
			$row = DB::table('front_region')->where('region_id', $pid)->first();;
			$variable = $row->region_name;
		}
		//判断是否有条件
		if($variable!='SearchAddress'){
			//判断是否为时间
			if(strpos($variable,',')){
				if(strpos($variable,' ')){
					$posttime=explode(' ',$variable);
				}else{
					$posttime=explode(',',$variable);
				}
				if(count($posttime)<3){
					$sttime=$posttime[0];
					$edtime=$posttime[1];
					
					$stwhere = strtotime($sttime);
					$enwhere = strtotime($edtime);
					//在时间范围内的数据
					$houseinfo_time = DB::table('roommessage')
							->join('house_img', 'roommessage.h_id', '=', 'house_img.room_id')
							->select("*")
							->whereBetween('h_register_time', [$stwhere, $enwhere])->Paginate(5);
					//判断是否有地址
					if($posts['h_vill']){
						if($posts['h_vill']){
							$pid = $posts['h_vill'];
						}else if($posts['h_city']){
							$pid = $posts['h_city'];
						}else if($posts['h_provice']){
							$pid = $posts['h_provice'];
						}
						$row = DB::table('front_region')->where('region_id', $pid)->first();;
						$region_name = $row->region_name;
						$where=$posts['searchposition']!="SearchAddress"?$posts['searchposition']:$region_name;
					}
				}else{
					echo '请重新输入';
					return redirect()->action('FrontController@index');
					die;
				}
				
			}else{
				$where=$variable;
			}	
		}else{
			$where="'' or 1=1";
		}
		
	
		//关于数据的处理
		if(@$houseinfo_time){
			$houseinfo=$houseinfo_time;
		}else{
			$houseinfo_position = DB::table('roommessage')
									->join('house_img', 'roommessage.h_id', '=', 'house_img.room_id')
									->select("*")
									->where('h_site','=', $where)->Paginate(5);
			$houseinfo=$houseinfo_position;
		}
		//var_dump($houseinfo);die;
		if(empty($houseinfo)){
			$selhouse=$houseinfo;
		}else{
			echo '抱歉,没有您的数据';
			return redirect()->action('FrontController@index');
		}
		//地址显示
		
		return view('front.housesingle',['house' => $selhouse, 'region_province' => $region_province]);
	}
	


	 /**
      * @添加预约
      */
    public function  order(){
        $h_id=Input::get('h_id');
        $fast=Session::put(['h_id'=>$h_id]);
        //echo $h_id;exit;
		if(!Session::get('userid')){
			echo "<script>alert('请先登录')</script>";
			return view('front.login');
			exit();
		}
		$house=Input::get('h_name');
        $username=Session::get('username');
		$selname=DB::table('orders')->where(['order_man'=>$username,'order_house'=>$house])->get();
		if($selname){
			$propmt=iconv('utf-8','gbk','该房屋你已经预约');
			echo "<script>alert('".$propmt."');window.history.back()</script>";
			exit();

		}
        $tel=Session::get('usertel');
        $time=date('Y-m-d',time());
		$u_id=Session::get('userid');
        $order= DB::INSERT("insert into orders VALUES (null,'$username','$time','$house','$tel',null,'$u_id')" );
        if($order){
			$succ=iconv('utf-8','gbk','预约成功');
        	DB::UPDATE("update front_login set order_start=1 where front_id=$u_id" );
            echo "<script>alert('".$succ."');location.href='page'</script>";
			exit();
        }
    }


	/**
	 * @用户退出
	 */
	public function userexit(){
		Session::forget(['username','userid','usertel']); 
		return redirect()->action('FrontController@index');
	}

}
