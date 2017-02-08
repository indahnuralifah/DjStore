<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MasterProduk;
use App\Pesan;
use App\Pemesanan;
use App;
use App\Custom;
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
         //    if (session('no_pesanan')) {
         // $foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('gambar')->getClientOriginalExtension();
         //    Input::file('gambar')->move(public_path(),$foto);
         //    $post->bukti_tf = $foto;
        // $post = new \App\Custom;
        // if(Input::hasFile('bukti_tf')){
        //     $bukti_tf = date("YmdHisaves")
        //     .uniqid().".".Input::file('gambar')->getClientOriginalExtension();
        //     Input::file('gambar')->move(public_path()."/gambar",$bukti_tf);
        //     $post->bukti_tf = $bukti_tf;
        // }
        // $post->save();

     
        // return redirect(url('/checkout/order/'));
        //      }

        if (session('id')) {        
            $select_order = Pesan::find(Input::get('id'));
            $select_order = Pesan::where('no_pesanan',$no_pesanan)->first();

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
	

}
