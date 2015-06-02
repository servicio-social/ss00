<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Documento extends Eloquent {

	protected $table = 'documentos';
	protected $fillable = ['cn', 'formato', 'comentario', 'status', 'nombre', 'archivo', 'tipo'];
    
    public function User(){
        return $this->belongsTo('User');
    }

}
