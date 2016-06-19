<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('pages', 'PagesController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
  Route::get('/', 'AdminHomeController@index');
});
|
*/

Route::get('/', 'FrontController@index');

//登录
Route::get('login', 'FrontController@login');
Route::post('loginpro', 'FrontController@loginpro');
//注册
Route::get('register', 'FrontController@register');
Route::any('registeruser', 'FrontController@registeruser');

//房屋简绍
Route::any('housesingle', 'FrontController@housesingle');

//房屋搜素
Route::any('selhouse', 'HouseController@index');
Route::any('changeregion', 'HouseController@changeregion');
Route::any('search', 'FrontController@housesingle');

//有关地图
Route::get('special', 'HouseController@specialaddress');


//个人中心
Route::get('personal', 'PersonalController@index');
//收藏列表
Route::any('collect', 'PersonalController@collect');
//收藏删除
Route::any('contactdel', 'PersonalController@contactdel');
//预约列表
Route::any('subscribe', 'PersonalController@subscribe');
//预约删除
Route::any('subscribedel', 'PersonalController@subscribedel');


//分页
Route::any('page', 'HouseController@pageinfo');
//详情页
Route::any('contact', 'HouseController@housecon');
//租用
Route::any('payinfo', 'HouseController@payorder');
//预约
Route::any('addorder', 'FrontController@order');
//退出
Route::any('userexit', 'FrontController@userexit');


Route::get('home',function(){
	$name='zhangsan';
	
	$data=[
	   //'name'	=> $name,
		'赵丽',
		'马武'
	];
	Request::all();
    Input::get('username');
	//return view('home',compact('name'));
	return view('home',compact('data'));
});
//检查数据库是否连接成功
/*Route::get('/',function(){
	$pdo = DB::connection()->get();
}
);*/

//会话
Route::any('test',function(){
	Session::put('username','zs');
	dd(Session::all());
});

/**
 * 成为房东
 */
Route::any('host', 'HostController@index');
//验证手机
Route::any('phone', 'HostController@phone');
//房东注册
Route::any('hostname', function(){
     $host=new App\Host();
     $data=Request::all();
    if(empty($data)){
        return view('front.host');
    }else{
        $host->hostadd($data['h_name'],$data['h_tel']);
        return view('front.host');
    }

});
//关于我们
Route::any('our', 'OurController@our');

//关于商品
Route::get('goods', 'GoodsController@index');
//商品详情
Route::get('detail', 'GoodsController@detail');

//更多商品分类
Route::get('moregoods', 'GoodsController@moregoods');
//厨房用品
Route::get('kitchen', 'GoodsController@kitchen');
//生活日用
Route::get('life', 'GoodsController@life');
//家纺寝居
Route::get('textiles', 'GoodsController@textiles');
//精品家具
Route::get('boutique', 'GoodsController@boutique');
/**
 * 立即兑换
 */
Route::get('exchange', 'GoodsController@exchange');
//判断积分
Route::get('SelNum', 'GoodsController@SelNum');
//兑换商城
Route::get('shop', 'GoodsController@shop');
//立即兑换
Route::get('adds', 'GoodsController@adds');
//兑换列表
Route::get('lists', 'GoodsController@lists');
//百度地图坐标
Route::get('point', 'HouseController@point');
//qq第三方登录
Route::get('qq', 'FrontController@qqlogin');

