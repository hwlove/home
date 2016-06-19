<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect, Input;
use Illuminate\Html\HtmlFacade;
use App\Comment;
use Session;
use Illuminate\Database\Eloquent\Model;
class OurController extends Controller {

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
	public function our()
	{
		return view('front.our');
	}
}