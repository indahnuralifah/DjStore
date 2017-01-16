<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Custom;
use App\Promosi;
use App;
use App\MasterProduk;
use App\Produk;
use App\Stok;
use App\Pembelian;

use Illuminate\Support\Facades\Input;

class DracoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		
	public function index()
	{
		$data = array('data'=>\App\Custom::get());
		$draco = array('draco'=>MasterProduk::all());
		$data2 = array('data2'=>\App\MasterProduk::get());
		return view('custom.add')->with($data)->with($data2)->with($draco);
	}

	// public function show()
	// {
	// 	$data = array('data'=>\App\custom::get());
	// 	$data2 = array('data2'=>\App\MasterProduk::get());
	// 	return view('custom.show')->with($data)->with($data2);
	// }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data2 = array('data2'=>MasterProduk::all());
		return view('custom.add')->with($data2);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Custom;
		$post->nama_pembeli = Input::get('nama_pembeli');
		$post->no_hp = Input::get('no_hp');
		$post->email = Input::get('email');
		$post->alamat = Input::get('alamat');
		$post->nama_barang = Input::get('nama_barang');
		$post->jenis_barang = Input::get('jenis_barang');
		$post->warna = Input::get('warna');
		$post->ukuran = Input::get('ukuran');
		$post->jumlah_barang = Input::get('jumlah_barang');
		$post->keterangan = Input::get('keterangan');
		$post->save();
		// return redirect(url('custom/add'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
		$data = array('data'=>\App\Custom::get());
		$data2 = array('data2'=>\App\MasterProduk::get());
		return view('custom.show')->with($data)->with($data2);
        return view('custom.add', compact('custom'));
	}
		


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$custom = Custom::find(Input::get('id'));
   		$custom->nama_pembeli = Input::get('nama_pembeli');
		$custom->no_hp = Input::get('no_hp');
		$custom->email = Input::get('email');
		$custom->alamat = Input::get('alamat');
		$custom->nama_barang = Input::get('nama_barang');
		$custom->jenis_barang = Input::get('jenis_barang');
		$custom->warna = Input::get('warna');
		$custom->ukuran = Input::get('ukuran');
		$custom->jumlah_barang = Input::get('jumlah_barang');
		$custom->keterangan = Input::get('keterangan');
   		$custom->save();

   		return redirect(url('/custom/add'));

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	}
	public function destroy($id)
	{
		//
	}
	public function get_Promosi()
	{

		$post = new Promosi;
		$post->judul = Input::get('judul');
		$post->ket = Input::get('ket');
		if(Input::hasFile('gambar')){
			$gambar = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$post->gambar = $gambar;
		}
		$post->save();
		return redirect(url('promosi/add'));

			}
	public function view_Promosi()
	{
		$data = array('data'=>Promosi::all());
		return view('promosi.add')->with($data);
	}
	public function add_Promosi()
	{
		return view('promosi.add');
	}

	public function update_Promosi($id)
	{
		$promosi = Custom::find(Input::get('id'));
   		$promosi->nama_pembeli = Input::get('judul');
		$promosi->no_hp = Input::get('ket');
		if(Input::hasFile('gambar')){
			$gambar = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$post->gambar = $gambar;
		}
   		$promosi->save();

   		return redirect(url('/promosi/add'));

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	}



	public function get_Stok()
	{

		$post = new Stok;
		$post->kode = Input::get('kode');
		$post->nama_barang = Input::get('nama_barang');
		$post->jenis_barang = Input::get('jenis_barang');
		$post->satuan = Input::get('satuan');
		$post->nama_produk = Input::get('nama_produk');
		$post->ket = Input::get('ket');
		$post->harga_jual = Input::get('harga_jual');
		$post->harga_beli = Input::get('harga_jual');
		$post->jumlah_stok = Input::get('jumlah_stok');
		
		$post->save();
		return redirect(url('stok/add'));

			}
	public function view_Stok()
	{

		$data = array('data'=>Promosi::all());
		return view('stok.add')->with($data);
	}
	public function add_Stok()
	{
		$data1 = array('data1'=>MasterProduk::with('produk')->get());
		// return $data1;
		return view('stok.add')->with($data1);
	}
	public function add_Stok2($masterproduk)
	{
		$data1 = array('data1'=>MasterProduk::with('produk')->where('nama_produk',$masterproduk)->get());
		// return $data1;
		return view('stok.add2')->with($data1);
	}
	public function view_Obat()
	{
		
		$data = array('data'=>\App\custom::get());
		$data2 = array('data2'=>\App\MasterProduk::get());
		return view('stok.show')->with($data)->with($data2);
	}

	public function addtocart(Request $r,$id){

		$produk = \App\Produk::find($id);
		// $produk->total = $produk->total-1;
		// $produk->save();

		$key = count(session('cart'));
        $array  = session('cart');
        $array[$key+1]['id'] = $produk->id;
        $array[$key+1]['nama_barang'] = $produk->nama_barang;
        $array[$key+1]['harga'] = $produk->harga;
        $array[$key+1]['nama_produk'] = $produk->nama_produk;
        $array[$key+1]['gambar'] = $produk->gambar;
        $array[$key+1]['total'] = $produk->total;
        $r->session()->put('cart',$array);    
        return redirect('cart');
	}

	public function cart(Request $r)
    {
        // $masterproduk = \App\MasterProduk::all();
        // $draco = \App\MasterProduk::all();
        // $data = \App\Produk::all();
        // $r->session()->forget('cart');
        $data = $r->session()->get('cart');
        $total = 0;
        foreach($r->session()->get('cart') as $data){
        	$total = $total + $data['harga'];
        }
        // return $r->session()->get('cart');

        // return $total;
        // return $cart;
        // return $r->session()->get('cart');
        return view('cart',['data'=>$r->session()->get('cart'), 'total' => $total]);
    }

    public function cart_checkout(Request $r)
    {
    	$cart = session('cart');
    	$count = count(session('cart'));
    	$no = 1;
    	// foreach ($ji->quantity as $key => $value) {
    	// 	echo $value;
    	// }
    	if (is_array($cart)||is_object($cart)) {
	    	foreach ($cart as $data) {
	    		// $r->input('totalbarang_'.$data['id']) - $r->input('total_'.$data['id']);
	    		// $cart[$i]['total'] = $r->input('number_'.$i);
	    		\App\Produk::where('id',$r->input('id_'.$data['id']))
	    					->update(['total'=>$r->input('totalbarang_'.$data['id']) - $r->input('total_'.$data['id'])]);
	   		}
    	}

    	$r->session()->forget('cart');
    	return redirect('/');
    }
}