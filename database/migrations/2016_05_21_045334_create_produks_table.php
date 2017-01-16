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
