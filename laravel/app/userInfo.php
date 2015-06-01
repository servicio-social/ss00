<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserInfo extends Eloquent {
	protected $table = 'userInfo';
	protected $fillable = ['cn', 'first_name', 'last_name', 'credits', 'career', 'plan'];
    
    public function user(){
        return $this->belongsTo('User');
    }
}
