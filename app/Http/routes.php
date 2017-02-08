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

// Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');


// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

//ADMIN//
// Route::get('admin', function () {
// 	return view('admin');
// });
Route::get('auth/login', function() {
	return redirect(url('/'));
});
Route::get('auth/logout','Auth\AuthController@getLogout');
//CUSTOM//
Route::get('custom/add', 'UserController@getPesan');
Route::post('custom/store', 'PemesananController@submit');
Route::post('custom/save', 'PemesananController@save');
Route::post('harga/add', 'PembelianController@update');
Route::post('harga/update','MasterProdukController@update');

//CEK ORDER//
Route::get('order', 'OrderController@getOrder');
Route::get('order/check', 'OrderController@checkOrder');

//PROMOSI//
Route::get('promosi/all', 'DracoController@view_Promosi');
Route::get('promosi/add', 'DracoController@add_Promosi');
Route::post('promosi/save', 'DracoController@get_Promosi');
Route::get('/delete/promosi/{id}','DracoController@destroy_Promosi');
Route::get('/edit/promosi/{id}','DracoController@edit_Promosi');
Route::post('promosi/update','DracoController@update_Promosi');

//MASTER PRODUK
Route::get('masterproduk/all', 'MasterProdukController@index');
Route::get('masterproduk/add', 'MasterProdukController@create');
Route::post('masterproduk/save', 'MasterProdukController@store');
Route::get('/delete/masterproduk/{id}','MasterProdukController@destroy');
Route::get('/edit/masterproduk/{id}','MasterProdukController@edit');
Route::post('masterproduk/update','MasterProdukController@update');

//PRODUK
Route::get('produk/all', 'ProdukController@index');
Route::get('produk/add', 'ProdukController@create');
Route::get('produk', 'ProdukController@produk');
Route::get('Jersey', 'ProdukController@jersey');
Route::get('Shirt', 'ProdukController@shirt');
Route::get('Topi', 'ProdukController@topi');
Route::get('Sepatu', 'ProdukController@sepatu');
Route::post('produk/save', 'ProdukController@store');
Route::get('/delete/produk/{id}','ProdukController@destroy');
Route::get('/edit/produk/{id}','ProdukController@edit');
Route::post('produk/update','ProdukController@update');
	

//STOK BARANG
Route::get('stok/all', 'DracoController@view_Stok');
Route::get('stok/add', 'DracoController@add_Stok');
Route::post('stok/save', 'DracoController@get_Stok');
Route::get('stok/show', 'DracoController@view_Obat');
Route::get('stok/{masterproduk}','DracoController@add_stok2');

//PEMBELIAN
Route::get('pembelian/add ', 'DracoController@view_pembelian');
Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function(){
		Route::get('/', 'UserController@admin');
		Route::get('pembelian', 'PembelianController@getpembelian');
		Route::get('pembelian/{id}/reject', 'PembelianController@update_reject');
		Route::get('pembelian/{id}/accept','PembelianController@update_accept');
		Route::get('pembelian/{id}/destroy','PembelianController@destroy');
});


Route::get('addtocart/{id}','DracoController@addtocart');
Route::get('/cart','DracoController@cart');
Route::post('/cart/checkout', 'DracoController@cart_checkout');
Route::get('/gambar/{filename}',
	function ($filename)
{
	$path = storage_path().
	'/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file, 200);
	$response->header("Content-Type", $type);

	return $response;
});	
Route::get('auth/logout','Auth\AuthController@getLogout');	
Route::post('/trylogin', ['as'=>'login','uses'=>'DracoController@tryLogin']);

//PESAN
Route::get('pesan/add','PesanController@add');
Route::post('/checkout/address/save/{id}','PesanController@checkout_address_save');

Route::get('pesan/add1','PesanController@add1');
Route::post('/checkout/payment/save','PesanController@checkout_payment_save');

Route::get('pesan/add2','PesanController@add2');
Route::post('/checkout/buktitf/save','PesanController@checkout_order_save');



Route::get('/bukti_tf/{filename}',
	function ($filename)
{
	$path = storage_path().
	'/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file, 200);
	$response->header("Content-Type", $type);

	return $response;
});	


// Route::get('password/{value}', function($value) {
// 	return bcrypt($value);
// });