<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produk;
use App\Stok;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class ProdukController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = \App\Produk::all();
		return view('produk.all')->with('data',$data);
	}

	public function produk()
	{
		$data = \App\Produk::where('nama_produk','=', 'nama_barang');
		$draco = array('draco'=>produk::all());
		return view('produk')->with('data',$data)->with($draco);
	}
	public function jersey()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Jersey')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Jersey')->orderBy('id','desc')->get());
		$data1 = array('data1'=>produk::all());
		$draco = array('draco'=>produk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	public function shirt()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Shirt')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Shirt')->orderBy('id','desc')->get());
		$data1 = array('data1'=>produk::all());
		$draco = array('draco'=>produk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	public function topi()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Topi')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Topi')->orderBy('id','desc')->get());
		$data1 = array('data1'=>produk::all());
		$draco = array('draco'=>produk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	
	public function sepatu()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Sepatu')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Sepatu')->orderBy('id','desc')->get());
		$data1 = array('data1'=>produk::all());
		$draco = array('draco'=>produk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()

	{
		// $data1 = array('data1'=>produk::all());
		$data1['produk'] =  \App\MasterProduk::all();
		$b['b'] = produk::all();
		return view('produk.add')->with($data1)->with($b); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			
		$post = new Produk;
		$post->nama_barang = Input::get('nama_barang');
		$post->harga = Input::get('harga');
		$post->nama_produk = Input::get('nama_produk');
		$post->total = Input::get('total');

		if(Input::hasFile('gambar')){
			$gambar = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$post->gambar = $gambar;
		}
		$post->save();



		// $data = Stok::where('nama_produk', Input::get('nama_barang'))->first();
		// if ($data) {
		// 	$data->jumlah
		// }
		// else {

		
		return redirect(url('produk/add'));
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
		$data2 = array('data2'=>Produk::all());
		$data = array('data'=>Produk::find($id));
         return view('produk.edit')->with($data)->with($data2);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$produk = Produk::find(Input::get('id'));
   		$produk->nama_barang = Input::get('nama_barang');
		$produk->harga = Input::get('harga');
		$produk->nama_produk = Input::get('nama_produk');
		$produk->total = Input::get('total');

		if(Input::hasFile('gambar')){
			$gambar = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$produk->gambar = $gambar;
		}
   		$produk->save();

   		return redirect(url('/produk/add'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			$produk = Produk::find($id);
			$produk->delete();
			return redirect('/produk/add');	
	}

}
