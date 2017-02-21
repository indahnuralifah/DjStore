<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('nama_barang');
			$table->String('harga');
			$table->string('nama_produk');
			$table->String('gambar');
			$table->Integer('total');
			//
			$table->string('nama_pembeli');
			$table->string('no_hp');
			$table->string('email');
			$table->string('alamat');
			$table->string('no_pesanan');
			$table->string('status');
			$table->string('bukti_tf');
			$table->string('status_tf');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produks');
	}

}
