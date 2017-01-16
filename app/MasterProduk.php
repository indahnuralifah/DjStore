<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterProduk extends Model {

	public function produk(){
		return $this->hasMany('\App\Produk','nama_produk','nama_produk');
	}

}
