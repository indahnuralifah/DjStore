<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use  App\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getpembelian()
	{
		$data = Pembelian::all();
		return view('data')->with('data', $data);
	}

		public function update_reject($id)
	{
		$pembelian = Pembelian::find($id);
		$pembelian->status = "DITOLAK";
		$pembelian->save();
		return redirect('/admin/pembelian');
	}
		public function update_accept($id)
	{
		$pembelian = Pembelian::find($id);
		$pembelian->status = "DITERIMA";
		$pembelian->save();
		return redirect('/admin/pembelian');
	}
		public function destroy($id){
			$pembelian = Pembelian::find($id);
			$pembelian->delete();
			return redirect('/admin/pembelian');		
		}




}
 