<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/', 'WelcomeController@index');

*/

Route::get('/', 'IndexController@index');
Route::get('informacion', 'IndexController@informacion');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('cauth/login', 'CustomAuth@getLogin');
Route::post('cauth/login', 'CustomAuth@postLogin');

Route::get('create_user',function(){
    $check = DB::table('users')
                ->insert(array(
                    'cn' => '10170926',
                    'email' => 'eduardofelix@zn00.net',
                    'password' => bcrypt('olakase'),
                    'type' => '6'
                ));
    if($check) {
        echo "success";
    }
    else {
        echo "fail";
    }
});
