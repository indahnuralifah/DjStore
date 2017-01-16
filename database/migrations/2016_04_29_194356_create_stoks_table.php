<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stoks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode');
			$table->string('nama_barang');
			$table->string('jenis_barang');
			$table->string('satuan');
			$table->string('harga_beli');
			$table->string('harga_jual');
			$table->string('jumlah_stok');
		

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
		Schema::drop('stoks');
	}

}
