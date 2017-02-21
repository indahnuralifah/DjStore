<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MasterProduk;
use App\Pesan;
use App\Pemesanan;
use App;
use App\Custom;
use App\Produk;
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
		if (session()->get('no_pesanan')) {
		return view('pesan.add');
		}
		return redirect(url('order/'));

	}


	 public function checkout_address_save($id)
    {
    	$data = array('data'=>custom::find($id));
        $data->no_pesanan = Input::get('no_pesanan');
        $data->nama_pembeli = Input::get('nama_pembeli');
        $data->email = Input::get('email');
        $data->no_hp = Input::get('no_hp');
        $data->alamat = Input::get('alamat');
      

        $data->save();

        $data1 = array('data1'=>custom::all());

        return redirect(url('/checkout/delivery/'.$data->id))->with($data1);

    }
	public function add1()
	{	
        return view('pesan.add1');
	}
	public function checkout_payment_save()
    {

        // $data1 = custom::find(Input::get('id'));
        // $data1->no_pesanan = Input::get('no_pesanan');
        // $data1->nama_pembeli = Input::get('nama_pembeli');
        // $data1->email = Input::get('email');
        // $data1->no_hp = Input::get('no_hp');
        // $data1->alamat = Input::get('alamat');
        // $data1->status_tf = Input::get('status_tf');

        // $data1->save();

        return redirect(url('/checkout/order/'));
    }

	public function add2()
	{	
		$data = Custom::all();
        return view('pesan.add2',['data'=>$data]);
	}
    public function checkout_order_save()
    {
    
        if (session('nomor_pesanan')) {        
            $select_order = Custom::where('no_pesanan', session()->pull('nomor_pesanan'))->first();

            if(Input::hasFile('bukti_tf')){
                $bukti_tf = date("YmdHis").uniqid().".".Input::file('bukti_tf')->getClientOriginalExtension();
                Input::file('bukti_tf')->move(storage_path(),$bukti_tf);
                $select_order->bukti_tf = $bukti_tf;
            }
        }
        $select_order->save();
        return $select_order;
        // return redirect()->back();
    }


    public function checkout()
    {   
        $data = Produk::all();
        $data = $r->session()->get('cart');
        $total = 0;
        foreach($r->session()->get('cart') as $data){
            $total = $total + $data['harga'];
        }
        // return $r->session()->get('cart');

        // return $total;
        // return $cart;
        // return $r->session()->get('cart');
        return view('checkout.add',['data'=>$r->session()->get('cart'), 'total' => $total]);
    }

    public function address_save()
    {   
        $post = new \App\Custom;
        $post->nama_produk = Input::get('nama_pembeli');
        $post->nama_produk = Input::get('email');
        $post->nama_produk = Input::get('no_hp');
        $post->nama_produk = Input::get('alamat');
        $post->save();
        return redirect(url('checkout/add1'));
    }


    public function checkout1()
    {   
        $data = Produk::all();
        return view('checkout.add1');
    }

    public function checkout2()
    {   
        $data = Produk::all();
        return view('checkout.add2');
    }
	    





}
