<?php 
namespace App\Http\Controllers;
use App\MasterProduk;
use App\Promosi;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	public function index()
	{
		$data = array('data'=>Promosi::get());
		$draco = array('draco'=>MasterProduk::all());
		return view('welcome')->with($draco)->with($data);
	}

}
