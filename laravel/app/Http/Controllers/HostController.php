<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class HostController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Host Controller
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
		return view('front/host');
	}
    public function phone(){
        $data=Request::all();
        $code=urlencode(rand(10000,99999));
        $phone=$data['phone'];
        $url="http://api.k780.com:88/?app=sms.send&tempid=50573&param=code%3d".$code."&phone={$phone}&appkey=18360&sign=0c6c3ef2488fe611ff099333163dd459&format=json";
        file_get_contents($url);
        echo $code;
    }
    public function hostname(){

    }
}
