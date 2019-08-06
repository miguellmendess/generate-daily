<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome'); //helper
    return view('index');
});

Route::get('login', [ 'as' => 'login', 'uses' => 'AuthController@login']);

Route::get('/logout/', 'AuthController@logout');


Route::get('/daily/', ['as' => 'daily', 'uses' =>'DailyRecordController@index']);

Route::group(['prefix'=>'/my-account/'], function (){
    Route::get('/', 'UserController@index');
});

//admin
Route::group(['prefix'=>'/admin'], function ($value=0){
    Route::get('/', 'AdminController@index');
    Route::get('/{idUser?}', 'AdminController@viewUser');
    Route::get('/{idUser?}/edit', 'AdminController@editUser');
    Route::get('/create-user/', 'AdminController@createUser');
});





//sitewe
Route::group(['prefix'=>'/'], function (){
    Route::get('/new-client/{value?}', 'ClientController@cadastrar');
});


Route::get('/new-client2', function () {
//    return view('new-client', [
//        'name' => 'Client123',
//        'id' => 13
//    ]);
    $name = "User 123"; $id = 33; $gender = "masc";
    return view('client.new-client', compact('name', 'id', 'gender'));
});



Route::get('/for-if/{value?}', function ($value=0){
    $arrayTest = [
        'chave1' => 'altura',
        'chave2' => 'comprimento',
        'chave3' => 'largura'
    ];
   return view('for-if.test')
       ->with('value', $value)
       ->with('arrayTest', $arrayTest);
});



/*

//User
Route::get('/user/{id}/{gender?}', function ($id,$gender = 'undefined') {

    $html = <<<HTML
    <html>
    <body>Corpo blabla</body>
</html>
HTML;
    return $html;

    //return 'USER ID:'.$id.' AND GENDER OF:'.$gender;

});

//Card
Route::get('/card/{id}', function ($id) {
    return 'TELA CARD:'.$id;
});
*/

