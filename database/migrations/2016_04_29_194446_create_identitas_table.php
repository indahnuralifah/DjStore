<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('identitas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_apotik');
			$table->string('alamat');
			$table->string('nomor_telepon');
			$table->string('email');
			$table->string('gambar');
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
		Schema::drop('identitas');
	}

}
