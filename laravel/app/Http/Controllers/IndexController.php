<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class IndexController extends Controller {

	public function index(){
		return view('index');
	}

	public function informacion(){
		return view('informacion');
	}

	public function documentacion(){
		return view('documentacion');
	}
}