<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\userInfo;

class IndexController extends Controller {

	public function index(){
		return view('index');
	}

	public function informacion(){
		return view('informacion');
	}

	public function documentacion(){
		$cn = Auth::user()->cn;
		$info=userInfo::where('cn', '=', $cn)->get();

		foreach ($info as $userInfo){
			$first_name = $userInfo->first_name;
		    $last_name = $userInfo->last_name;
		    $career = $userInfo->career;
		    $plan = $userInfo->plan;
		    $credits = $userInfo->credits;
		}

		return view('documentacion', compact('first_name', 'last_name', 'career', 'plan', 'credits'));

	//$user = User::find(1);
    ///return view('documentacion')->with('user', $user);

		//return view('documentacion');
	}

	public function administracion(){
		$cn = Auth::user()->cn;
		$info=userInfo::where('cn', '=', $cn)->get();

		foreach ($info as $userInfo){
			$first_name = $userInfo->first_name;
		    $last_name = $userInfo->last_name;
		}

		return view('administracion', compact('first_name', 'last_name'));
	}
}