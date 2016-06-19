<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect, Input;
use Illuminate\Html\HtmlFacade;
use App\Comment;
use Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
class HouseController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| House Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	
	/**
	 * 
	 * @地区
	 */
	public function index()
	{
		$data['img']=DB::table('house_img')->get();
		return view('front.index',$data);
	}

	/**
	 * @Ajax
	 * Response Json
	 */
	public function changeregion(){
		$pid=Input::get('id');
		$selson=DB::select('select * from front_region where parent_id = ?', [$pid]);
		$arr=array();
		foreach($selson as $key=>$v){
			$arr[$key]['region_id']=$v->region_id;
			$arr[$key]['region_name']=$v->region_name;

		}
		echo json_encode($arr);
	}
	/**
	 * @地图
	 * Special
	 */
	public function specialaddress(){
		set_time_limit(0);
		ob_start();
		$map=@Input::get('map_site')?Input::get('map_site'):'朝阳区';
		$url="http://api.map.baidu.com/geocoder/v2/?address=".$map."&output=json&ak=iq2HLSvDiV3VYGovchjgMj9I";
		$return = file_get_contents($url);
		if($return)
		{
			$arr=json_decode($return,true);
			$data=$arr["result"]["location"];
			return view('front.map',['data' => $data]);
		}else{
			return redirect()->action('HouseController@specialaddress');

		}

		
	}
	/**
	 * 分页
	 */
	public function pageinfo(){
		$region_province=DB::table('front_region')->where('region_type','=','1')->get();
		$selpage=DB::table('roommessage')->Paginate(5);
		return view('front.housesingle',['house' => $selpage, 'region_province' => $region_province]);
		
	}
    /**
     * 获取地图坐标
     */
    public function point(){
    $place=Input::get('place');
    $url="http://api.map.baidu.com/geocoder?address=".$place;
    $xmlfile=file_get_contents($url);
    $str= simplexml_load_string($xmlfile);
    echo json_encode($str);
}
	/**
	 * @房屋详情
	 * houscon
	 * 
	 */
	public function housecon(){
		
		//获取该房屋详细信息
		$house_id = Input::get('hou_id')?Input::get('hou_id'):null;
        //echo $house_id;
		$region_province=DB::table('front_region')->where('region_type','=','1')->get();
		$selhouse =DB::table('roommessage')
						->join('house_img', 'roommessage.h_id', '=', 'house_img.room_id')
						->select("*")->where('roommessage.h_id', $house_id)->first();
		if($selhouse){
			
			return view('front.houserent',['selhouse' => $selhouse, 'region_province' => $region_province]);
		}
		
	}
	/**
	 * @房屋订单
	 * payinfo
	 * 
	 */
	 public function payorder(){
		$price=Input::get('price');
		echo "<script>window.confirm('需要支付金额:".$price."元')</script>";
		$this->payinfo();
	 }
	 public function payinfo(){
		        
		//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
		//合作身份者id，以2088开头的16位纯数字
		$alipay_config['partner']		= '2088002075883504';
		//收款支付宝账号
		$alipay_config['seller_email']	= 'li1209@126.com';
		//安全检验码，以数字和字母组成的32位字符
		$alipay_config['key']			= 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj';
		//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
		//签名方式 不需修改
		$alipay_config['sign_type']    = strtoupper('MD5');
		//字符编码格式 目前支持 gbk 或 utf-8
		//$alipay_config['input_charset']= strtolower('utf-8');
		//ca证书路径地址，用于curl中ssl校验
		//请保证cacert.pem文件在当前文件夹目录中
		$alipay_config['cacert']    = getcwd().'\\cacert.pem';
		//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
		$alipay_config['transport']    = 'http';
		// ******************************************************配置 end*************************************************************************************************************************

		// ******************************************************请求参数拼接 start*************************************************************************************************************************
		$parameter = array(
			"service" => "create_direct_pay_by_user",
			"partner" => $alipay_config['partner'], // 合作身份者id
			"seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
			"payment_type"	=> '1', // 支付类型
			"notify_url"	=> "http://localhost/snail/laravel/public/order", // 服务器异步通知页面路径
			"return_url"	=> "http://localhost/snail/laravel/public/order", // 页面跳转同步通知页面路径
			"out_trade_no"	=> "2013145203344", // 商户网站订单系统中唯一订单号
			"subject"	=> "订单", // 订单名称
			"total_fee"	=> "0.01", // 付款金额
			"body"	=> "", // 订单描述 可选
			"show_url"	=> "", // 商品展示地址 可选
			"anti_phishing_key"	=> "", // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
			"exter_invoke_ip"	=> "", // 客户端的IP地址
			"_input_charset"	=> 'utf-8', // 字符编码格式
		);
		// 去除值为空的参数
		foreach ($parameter as $k => $v) {
			if (empty($v)) {
				unset($parameter[$k]);
			}
		}
		// 参数排序
		ksort($parameter);
		reset($parameter);

		// 拼接获得sign
		$str = "";
		foreach ($parameter as $k => $v) {
			if (empty($str)) {
				$str .= $k . "=" . $v;
			} else {
				$str .= "&" . $k . "=" . $v;
			}
		}
		$parameter['sign'] = md5($str . $alipay_config['key']);
		$parameter['sign_type'] = $alipay_config['sign_type'];
		// ******************************************************请求参数拼接 end*************************************************************************************************************************


		// ******************************************************模拟请求 start*************************************************************************************************************************
		$sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
		foreach ($parameter as $k => $v) {
			$sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
		}

		$sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";

		// ******************************************************模拟请求 end*************************************************************************************************************************
		echo $sHtml;

	 }
}


