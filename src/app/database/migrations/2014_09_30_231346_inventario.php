<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inventario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Tabla de Almacen
		Schema::create('stock', function($table) {
			$table->bigIncrements('id');
			$table->string('name',255);//Ubicacion del productos
			$table->string('direction',255);
			$table->timestamps();
		});
		//Tabla de Productos
		Schema::create('products', function($table) {
			$table->bigIncrements('id');
			$table->float('amount');
			$table->string('description',255);
			$table->bigInteger('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients');
			$table->timestamps();
		});

		//Asociacion Alamacen - Productos - M:M
		Schema::create('products_stock', function($table) {
			$table->bigInteger('stock_id')->unsigned();
			$table->bigInteger('product_id')->unsigned();
			$table->foreign('stock_id')->references('id')->on('stock');
			$table->foreign('product_id')->references('id')->on('products');
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
		//Eliminacion tabla stock, products
		Schema::drop('products_stock');
		Schema::drop('products');
		Schema::drop('stock');
	}

}
