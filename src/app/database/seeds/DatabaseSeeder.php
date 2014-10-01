<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//Crear un usuarios base
		$this->call('UsersTableSeeder');
		$this->call('ProfilesTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('functionalityTableSeeder');
	}

}
