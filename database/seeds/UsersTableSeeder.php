<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
			$user = new User;
			$user->name='Indah Nur Alifah';
			$user->email='djstore@gmail.com';
			$user->password=bcrypt('okebangetsip');
			$user->save();


	}

}
