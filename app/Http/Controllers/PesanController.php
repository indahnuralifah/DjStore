<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MasterProduk;
use App\Pesan;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class PesanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function add()
	{	
		if (session('no_pesanan')) {
			# code...
		return view('pesan.add');
		}
		return redirect(url('order'));
	}
	public function add1()
	{	
		return view('pesan.add1');
	}
	public function add2()
	{	
		return view('pesan.add2');
	}


	

}
