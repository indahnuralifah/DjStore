<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_pembeli');
			$table->string('no_hp');
			$table->string('email');
			$table->string('alamat');
			$table->string('nama_barang');
			$table->string('jenis_barang');
			$table->string('warna');
			$table->string('ukuran');
			$table->string('jumlah_barang');
			$table->string('keterangan');
			$table->string('no_pesanan');
			$table->string('status');
			$table->string('bukti_tf');
			$table->string('status_tf');
			$table->string('harga');
			$table->string('gambar');
			$table->string('total');
			// $table->integer('produks_id')->unsigned();
			// $table->foreign('produks_id')->references('id')->on('produks')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('customs');
	}

}
