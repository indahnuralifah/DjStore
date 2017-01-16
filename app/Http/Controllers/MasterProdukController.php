<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MasterProduk;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MasterProdukController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$data2 = array('data2'=>\App\MasterProduk::where('nama_produk')->get());
		return view('masterproduk.all')->with($data2);


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data2 = array('data2'=>\App\MasterProduk::all());
		return view('masterproduk.add')->with($data2);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new \App\MasterProduk;
		$post->nama_produk = Input::get('nama_produk');
		$post->save();
		return redirect(url('masterproduk/add'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//   
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data2 = array('data2'=>MasterProduk::all());
		$data = array('data'=>MasterProduk::find($id));
         return view('masterproduk.edit')->with($data)->with($data2);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$masterproduk = MasterProduk::find(Input::get('id'));
   		$masterproduk->nama_produk = Input::get('nama_produk');
   		$masterproduk->save();

   		return redirect(url('/masterproduk/add'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			$masterproduk = MasterProduk::find($id);
			$masterproduk->delete();
			return redirect('/masterproduk/add');		
	}

}
