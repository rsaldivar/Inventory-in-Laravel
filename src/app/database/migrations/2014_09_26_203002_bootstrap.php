<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bootstrap extends Migration {

	/**
	 * Migracion inicial Bootrstarp
	 * Crea la siguientes tablas
	 * Usuarios, Perfiles, Permisos, Funcionalidades, Clientes
	 * @return void
	 */
	public function up()
	{	
		//Crear la tabla de Usuarios
		Schema::create('users', function($table) {
			$table->bigIncrements('id');
			$table->string('key',45);
			$table->string('password',45);
			$table->string('email',45)->unique();//Email index
			$table->enum('status',array('active','inactive','delete'));//Enum
		   	$table->datetime('pass_creation');
			$table->datetime('pass_modify');
			$table->string('user_creation',45);
			$table->string('user_modify',45);
			$table->timestamps();
		});

		//Crear la tabla de Clientes
		Schema::create('clients', function($table) {
			$table->bigIncrements('id');
			$table->string('name',45);
			$table->enum('status',array('active','inactive','delete'));//Enum
		   	$table->string('user_creation',45);
			$table->string('user_modify',45);
			$table->timestamps();
		});

		//Crear la tabla de Perfiles
		Schema::create('profiles', function($table) {
			$table->bigIncrements('id');
			$table->string('name',45);
			$table->string('description',255);
			$table->enum('status',array('active','inactive','delete'));//Enum
			$table->string('user_creation',45);
			$table->string('user_modify',45);
			$table->timestamps();
		});
		

		//Crear la tabla de Permisos
		Schema::create('permissions', function($table) {			
			$table->bigIncrements('id');
			$table->string('name',45);
			$table->string('description',255);
			$table->string('user_creation',45);
			$table->string('user_modify',45);
			$table->timestamps();
		});


		//Crear la tabla de Modulos
		Schema::create('modules', function($table) {
			$table->bigIncrements('id');
			$table->string('name',45);
			$table->timestamps();
		});


		//Crear la tabla de SubModulos
		Schema::create('submodules', function($table) {
			$table->bigIncrements('id');
			$table->string('name',45);
			$table->string('icon',255);
			$table->bigInteger('module_id')->unsigned(); //Unsigned Necesario para Foreign
			$table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
			$table->timestamps();
		});

		//Crear la tabla de Funcionalidades
		Schema::create('functionality', function($table) {
			$table->bigIncrements('id');
			$table->string('name',45);
			$table->string('icon',255);
			$table->integer('order');
			$table->string('menu_url',45);
			$table->bigInteger('submodules_id')->unsigned();
			$table->foreign('submodules_id')->references('id')->on('submodules');
			$table->timestamps();
		});

		//******************TABLAS ASOCIATIVAS Muchos a  Mucho****************//
		
		//Crear la tabla de usuario - perfil : M:M
		Schema::create('user_profile', function($table) {
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('profile_id')->unsigned();
			$table->string('user_creation',45);
			$table->string('user_modify',45);
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('profile_id')->references('id')->on('profiles');
			$table->timestamps();
		});

		//Crear la tabla de usuario - cliente : M:M
		Schema::create('user_client', function($table) {
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('client_id')->unsigned();
			$table->string('user_creation',45);
			$table->string('user_modify',45);
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('client_id')->references('id')->on('clients');
			$table->timestamps();
		});

		//Crear la tabla de perfil - permiso : M:M
		Schema::create('profile_permission', function($table) {
			
			$table->bigInteger('permission_id')->unsigned();
			$table->bigInteger('profile_id')->unsigned();
			$table->string('user_creation',45);
			$table->string('user_modify',45);
			$table->foreign('permission_id')->references('id')->on('permissions');
			$table->foreign('profile_id')->references('id')->on('profiles');
			$table->timestamps();
		});

		//Crear la tabla de permiso - funcionalidad : M:M
		Schema::create('permission_functionality', function($table) {
			$table->bigInteger('permission_id')->unsigned();
			$table->bigInteger('profile_id')->unsigned();
			$table->foreign('permission_id')->references('id')->on('permissions');
			$table->foreign('profile_id')->references('id')->on('profiles');
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
		//Eliminar las tablas Asociativas
		Schema::drop('user_profile');
		Schema::drop('user_client');
		Schema::drop('profile_permission');
		Schema::drop('permission_functionality');

		//Eliminar tablas principales
		Schema::drop('modules');
		Schema::drop('submodules');
		Schema::drop('functionality');
		Schema::drop('permissions');
		Schema::drop('clients');
		Schema::drop('profiles');
		Schema::drop('users');
	}

}
