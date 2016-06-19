<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
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
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	public function database(){
		DB::update('update user set username = 100 where u_id = ?',['in','1,2,3']);die;
		return view('front.index');die;
		Session::put('username','zs');
		//dd(Session::all());die;
		echo Session::get('username');die;
		$user = DB::table('user')->where('username', 'zhangsan')->first();
		var_dump($user);die;
		$pdo = DB::connection()->getDatabaseName();
		$results = DB::select('select * from user where u_id = ?', array(1));
		$results = DB::table('user')->where('u_id','=',1)->get(array('u_id','username'));
		echo $results[0]->username;
		var_dump($results);die;
		//http://www.youj.com/project/gwk1us/newlge6x.html手册5.0
		//查询单条数据
		$results = DB::select('select * from user where id = ?', array(1));
		var_dump($results);
		die;
		//比较大小
		$users = DB::table('user')->where('votes', '>', 100)->get();
		//or查询
		$users = DB::table('user')
                    ->where('votes', '>', 100)
                    ->orWhere('name', 'John')
                    ->get();
		//where
		$users = DB::table('users')
                    ->whereBetween('votes', [1, 100])->get();
		//添加
		$row=DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);

		
		//修改
		DB::update('update users set votes = 100 where name = ?', ['John']);


		//删除
		DB::delete('delete from users where name = ?', ['John']);
		$user = DB::table('users')->where('name', 'John')->first();
		var_dump($user->name);die;
		return view('front.index');
	}
}
