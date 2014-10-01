<?php

/**
* Agregamos Las funcionalidades que tiene el permiso
*/
class FunctionalityTableSeeder extends Seeder {
    public function run(){

        DB::table('functionality')->insert(array(
            'name'              => 'Consulta Inventario'
        )); 
        DB::table('functionality')->insert(array(
            'name'              => 'Productos'
        )); 
        DB::table('functionality')->insert(array(
            'name'              => 'Cientes'
        )); 
        DB::table('functionality')->insert(array(
            'name'              => 'Empleados'
        )); 

        DB::table('functionality')->insert(array(
            'name'              => 'Usuarios'
        )); 
        DB::table('functionality')->insert(array(
            'name'              => 'Perfiles'
        )); 
    }
}