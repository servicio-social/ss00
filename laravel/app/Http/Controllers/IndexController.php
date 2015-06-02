<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

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
		if (Auth::check()){
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

			return view('documentacion', compact('first_name', 'last_name', 'career', 'plan', 'credits', 'documentos'));
		}

		return view('documentacion');
	}

	public function documentacionUpload(){
		$cn = Auth::user()->cn;

		$nombre  = $_FILES["file"]["name"];
		$archivo = $_FILES["file"]["tmp_name"]; 
		$tamanio = $_FILES["file"]["size"];
		$tipo    = $_FILES["file"]["type"];

		$numeroDeFormato = Request::input('numeroDeFormato');

		$subcadena = "."; 
		$posicionsubcadena = strpos ($nombre, $subcadena);
		$extencion = substr ($nombre, ($posicionsubcadena+1));

		$nombre = $cn;
		$nombre .= "_";
		$nombre .= $numeroDeFormato;
		$nombre .= ".";
		$nombre .= $extencion;

		if ( $archivo != "none" ){
			$fp = fopen($archivo, "rb");
			$contenido = fread($fp, $tamanio);
			$contenido = addslashes($contenido);
			fclose($fp); 

			$documento = new Documento;
			$documento->cn = $cn;
			$documento->formato = $numeroDeFormato;
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
		if (Auth::check()){
			$cn = Auth::user()->cn;
			$info=UserInfo::where('cn', '=', $cn)->get();

			foreach ($info as $userInfo){
				$first_name = $userInfo->first_name;
			    $last_name = $userInfo->last_name;
			}

			return view('administracion', compact('first_name', 'last_name'));
		}

		return view('administracion');
	}
}