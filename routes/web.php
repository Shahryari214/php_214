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
    return view('welcome');
});

/*Start User Route*/
Auth::routes();

Route::get('/profile',[
	'uses' => 'ProfileController@index',
	'as'   => 'profile'
]);


Route::get('/admin',[
	'uses' => 'AdminController@index',
	'as'   => 'admin'
])->middleware('admin');
/*End User Route*/


/*Start Product Route*/

Route::get('/product',[
	'uses' => 'ProductController@index',
	 'as'   => 'products.index'
]);//Show All

Route::get('/product/create',[
	'uses' => 'ProductController@create',
	'as'   => 'products.create'
]);//Form Insert
Route::post('/product',[
	'uses' => 'ProductController@store',
	'as'   => 'products.store'
]);//Insert
Route::get('/product/{id}',[
	'uses' => 'ProductController@show',
	'as'   => 'products.show'
]);//Show One DEtail
Route::get('/product/{id}/edit',[
	'uses' => 'ProductController@edit',
	'as'   => 'products.edit'
]);//Form Edit

Route::put('/product/{id}',[
	'uses' => 'ProductController@update',
	'as'   => 'products.put'

]);//Edit

Route::delete('/product/{id}',[
	'uses' => 'ProductController@destroy',
	'as'   => 'products.delete'

]);//delete

/*End Product Route*/


