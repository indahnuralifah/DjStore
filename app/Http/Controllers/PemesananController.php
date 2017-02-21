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
		if(Input::hasFile('gambar')){
			$gambar = date("YmdHisaves").uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$data->gambar = $gambar;	
		}
		
		$email = Input::get('email');
		$subject = "DJStoreJakarta";
		$message = 
		"Nama Pemesan: ".$data->nama_pembeli."<br>".
		"<b>*Copy nomor pesanan anda</b><br>".
		"No. Pesanan: ".$data->no_pesanan."<br>".
	
		// $base64_photo = Input::get('image');
		// list($type,$base64_photo) = explode(';',$base64_photo);
  //       list(,$base64_photo) = explode(',',$base64_photo);
  //       $base64_photo = base64_decode($base64_photo);
  //       $image = round(microtime(true));
  //       file_put_contents(storage_path().'/'.$image.'.'.Input::get('mime'),$base64_photo);

  //       $data->gambar = $image.'.'.Input::get('mime');

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
