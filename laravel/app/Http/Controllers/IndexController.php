<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\UserInfo;
use App\Documento;

class IndexController extends Controller {

	public function index(){
		return view('index');
	}

	public function informacion(){
		return view('informacion');
	}

	public function documentacion(){
		$cn = Auth::user()->cn;

		$info=UserInfo::where('cn', '=', $cn)->get();

		foreach ($info as $userInfo){
			$first_name = $userInfo->first_name;
		    $last_name = $userInfo->last_name;
		    $career = $userInfo->career;
		    $plan = $userInfo->plan;
		    $credits = $userInfo->credits;
		}

		$documentos=Documento::where('cn', '=', $cn)->get();
		foreach ($documentos as $formatos){
			$formato = $formatos->formato;
		    $comentario = $formatos->comentario;
		    $status = $formatos->status;
		}

		return view('documentacion', compact('first_name', 'last_name', 'career', 'plan', 'credits', 'formato'));

	//$user = User::find(1);
    ///return view('documentacion')->with('user', $user);

		//return view('documentacion');
	}

	public function documentacionUpload(){
		$cn = Auth::user()->cn;

		$nombre  = $_FILES["file"]["name"];
		$archivo = $_FILES["file"]["tmp_name"]; 
		$tamanio = $_FILES["file"]["size"];
		$tipo    = $_FILES["file"]["type"];

		if ( $archivo != "none" ){
			$fp = fopen($archivo, "rb");
			$contenido = fread($fp, $tamanio);
			$contenido = addslashes($contenido);
			fclose($fp); 

			$documento = new Documento;
			$documento->cn = $cn;
			$documento->formato = '1';
			$documento->comentario = 'Enviado';
			$documento->status = '1';
			$documento->nombre = $nombre;
			$documento->archivo = $contenido;
			$documento->tipo = $tipo;
			$documento->save();

			return redirect('documentacion');
		}else
			print "No se ha podido subir el archivo al servidor";
	}

	public function administracion(){
		$cn = Auth::user()->cn;
		$info=UserInfo::where('cn', '=', $cn)->get();

		foreach ($info as $userInfo){
			$first_name = $userInfo->first_name;
		    $last_name = $userInfo->last_name;
		}

		return view('administracion', compact('first_name', 'last_name'));
	}
}