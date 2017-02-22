<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pembelian;
use  App\data;
use  App\Custom;
use Input;
use Illuminate\Http\Request;

class PembelianController extends Controller {

	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getpembelian()
	{
		$data = Custom::all();
		return view('pembelian.add',['data'=>$data]);
	}

		public function update_reject($id)
	{
		$data = Custom::find($id);
		$data->status = "DITOLAK";
		$data->save();
		return redirect('/admin/pembelian');
	}
		public function update_accept($id)
	{
		$data = Custom::find($id);
		// dd($data);
		$data->status = "DITERIMA";
		$data->save();
		return redirect('/admin/pembelian');
	}
	public function destroy($id){
			$data = Custom::find($id);
			$data->delete();
		return redirect('/admin/pembelian');		
	}

	public function create()
	{
		$data = new \App\Custom;
		$data->harga = Input::get('harga');
		$data->save();
		return redirect(url('pembelian/add'));
	}
	public function update()
	{
		$data = Custom::find(Input::get('id'));
   		$data->harga = Input::get('harga');
   		$data->status = "DITERIMA";
   		$data->save();
   		return redirect(url('/pembelian/add'));
	}


}
 