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
		return view('pesan.add2');
	}


	

}
