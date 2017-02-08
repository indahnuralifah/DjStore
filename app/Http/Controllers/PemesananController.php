<?php namespace App\Http\Controllers;

use App\Http\Requests;
// use Str
use App\Http\Controllers\Controller;
use App\Pemesanan;
use Validator;
use Redirect;
use Input;
use Illuminate\Http\Request;

class PemesananController extends Controller {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function submit(Request $r)
	{

		// $response = [];
		// $r->telp = str_replace("_", null, $r->input('telp'));
		// $r->telp = str_replace("-", null, $r->telp);

		// $pesan = $r->all();
		// $pesan['telp'] = $r->telp;

		// $no_hp = str_replace(['_','-'],['',''],Input::get('telp'));
		// // dd(str_replace(['_','-'],['',''],Input::get('telp')));

		// // die();


		// // echo $r->telp;
		// if (strlen($no_hp)<12) {
		// 	$response['success'] = false;
		// 	$response['error_msg'] = 'Masukan data yang benar !';
		// 	return response()->json($response);
		// }

  //   	else{
		// 	$validator = Validator::make($r->all(), 	[
		//         'nama' => 'required|max:255|',
		//         'alamat' => 'required|max:255',
		//         // 'telp' => 'required|max:255|min:12',
		//         'hari' => 'required|max:255',
		//         'email' => 'required|max:255',
		//         // 'gambar_pesanan' => 'required|max:255',
		        
	 //    	]);

	 //    	if ($validator->fails()) {
		// 		$response['success'] = false;
		// 		$response['error_msg'] = 'Data masih ada yang kosong.';
	 //    		return response()->json($response);
	 //    	}    		
  //   	}
		
		$data = new Pemesanan;
		$data->nama_pembeli = \Input::get('nama_pembeli');
		$data->no_hp = \Input::get('no_hp');
		$data->email = \Input::get('email');
		$data->alamat = \Input::get('alamat');
		$data->nama_barang = \Input::get('nama_barang');
		$data->jenis_barang = \Input::get('jenis_barang');
		$data->warna = \Input::get('warna');
		$data->ukuran = \Input::get('ukuran');
		$data->jumlah_barang = \Input::get('jumlah_barang');
		$data->keterangan = \Input::get('keterangan');
		$data->no_pesanan = str_random(8);
		$data->status = 'pending';
		
		$email = Input::get('email');
		$subject = "DJStoreJakarta";
		$message = 
		"Nama Pemesan: ".$data->nama_pembeli."<br>".
		"<b>*Copy nomor pesanan anda</b><br>".
		"No. Pesanan: ".$data->no_pesanan."<br>".
		"Klik <a href='".url('order')."'>disini</a> untuk mengecek orderan anda!";

		$data->save();

		$nomor_pesanan = Pemesanan::orderBy('id','desc')->first();
		$success = true;
		try {
			$a = new \PHPMailer(true);
			$a->isSMTP();
			$a->CharSet = "utf-8";
			$a->SMTPAuth = true;
			$a->SMTPSecure = "tls";
			$a->Host = "smtp.gmail.com";
			$a->Port = 587;
			$a->Username = "indahnuralifah21@gmail.com";
			$a->Password = "antenarusakk";
			$a->SetFrom("admin@djstore.com", "Admin");
			$a->Subject = $subject;
			$a->MsgHTML($message);
			$a->addAddress($email);
			$a->send();
			return response()->json(compact('nomor_pesanan','success'));
		} catch (Exception $e) {
			dd($e);
		}

	}

	public function save($no_pesanan)
	{

		$code_order = custom::where('no_pesanan',$no_pesanan)->first();

		if(Input::hasFile('bukti_tf')){
			$bukti_tf = date('YmdHis')
			.uniqid()
			."."
			.Input::file('bukti_tf')->getClientOriginExtension();

			Input::file('bukti_tf')->move(storage_path(),$bukti_tf);
			$select_order->bukti_tf = $bukti_tf;
		}

		$select_order->update();
		return redirect()->back();
	}

}
